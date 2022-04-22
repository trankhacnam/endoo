<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'required',
            'summary' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20000',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'danh mục không được bỏ trống',
            'summary.required' => 'tóm tắt không được bỏ trống',
            'title.required' => 'tiêu đề không được bỏ trống',
            'thumbnail.mimes' => 'sai định dạng ảnh',
            'image.required' => 'ảnh không được bỏ trống',
        ];
    }
}
