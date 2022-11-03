<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\posts;
class postsController extends Controller
{
    public function index()
    {
        return view('posts',[
        "title" => "Blog",
        "posts" =>posts::all()
        ]);
    }
}
