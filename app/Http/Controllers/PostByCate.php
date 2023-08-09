<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Routing\Controller as BaseController;

class PostByCate extends BaseController
{

    public $postByCate;

    public function showPostByCate($cate_slug)
    {
        $data_post = Posts::join('categorys', 'Posts.category', '=', 'categorys.cate_slug')->where('categorys.cate_slug', '=', $cate_slug)->get();
        $this->postByCate = $data_post;

        return view('livewire.posts.post-by-cate', ['postByCate' => $this->postByCate]);
    }
}
