<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function list()
    {
        /*$posts = Post::orderByDesc('created_at')
                ->get();
        return view('list', [
            'post' => $posts
        ]);*/
        return view('list');
    }

    public function store()
    {
        
    }

    public function create()
    {
       
    }

    public function update($post)
    {
       
    }

    public function edit($post)
    {
       
    }

    public function destroy($post)
    {
        
    }
}
