<?php

namespace App\Http\Controllers;


use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "posts",
            "posts" => post::all()
        ]);
    }
    public function show(post $post)
    {
        return view('post', [
            "title" => "post",
            "post" => $post
        ]);
    }
}
