<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AddPost extends Component
{
    public function savePost(Request $request)
    {

        $request->validate([
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $upload = $request->file('image_post');
        $uploadName = time() . '.' . $upload->extension();
        $upload->move(public_path('postImage'), $uploadName);

        Posts::create([
            'author' => "1",
            'title' => $request->title,
            'post_slug' => $request->slug,
            'post_image' =>  $uploadName,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'category' => $request->category,
            'tags' => $request->tags,
            'view' => 1,
            'status' => 1,
        ]);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.posts.add-post')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
