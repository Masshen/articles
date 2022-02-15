<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $post = Post::all();
        return view('index',['posts'=>$post]);
    }
    public function show($slug)
    {
        $post = Post::find($slug);
        if($post==null)
        {
            return "L'information inserer n'est pas bonne" ;
        }
        return view('show',['test'=>$post]);
    }
}
