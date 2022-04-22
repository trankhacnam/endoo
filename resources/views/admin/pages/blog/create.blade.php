@extends('admin.layouts.master')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <form role="form" method="POST" action="{{ route('blogs.store') }}" enctype='multipart/form-data'>
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tạo Mới Bài Viết
                        </header>
                    </section>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Danh Mục</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter category blog" required name="category">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tiêu Đề</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter title blog" required name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hình Ảnh</label>
                    <input type="file" id="exampleInputFile" name="image" >
                    <div class="text-center text-red">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tóm Tắt</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter summary blog" required name="summary">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội Dung</label>
                    <textarea name="content" id="text" cols="30" rows="10" placeholder="Enter main content blog"></textarea>
                    <div class="text-center text-red">
                        @error('content')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Xác Nhận</button>
            </div>
        </form>
	</section>
 <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
  <!-- / footer -->
</section>
<!--main content end-->
<script src= {{ asset('bower_components/ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'content', {
        
        filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
        filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
        filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123", 
        filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files", 
        filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
        filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
    } );
</script>
@include('ckfinder::setup')
@stop
