<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content, 
        ]);
    
        return redirect('posts/create')->with('status', 'Post Created!');
    }

    public function edit(int $id)
    {
        $posts = Post::findOrFail($id);
        //return $post;
        return view('post.edit', compact('posts'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'user_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        Post::findOrFail($id)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content, 
        ]);
    
        return redirect()->back()->with('status', 'Post Updated!');
    }

    public function destroy(int $id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        return redirect()->back()->with('status', 'Post Deleted.');
    }
}
