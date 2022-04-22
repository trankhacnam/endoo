<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;

class HomeController extends Controller
{
    public function index()
    {   
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(4);
        return view('user.pages.home', compact('blogs'));
    }
}
