<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class PostDetail extends BaseController
{

    public $postDetail;

    public function showDetailPost($cate_slug, $post_slug)
    {
        $data_post = Posts::join('categorys', 'Posts.category', '=', 'categorys.cate_slug')->where('post_slug', '=', $post_slug)->where('categorys.cate_slug', '=', $cate_slug)->first();
        $this->postDetail = $data_post;

        return view('livewire.posts.post-detail', ['postDetail' => $this->postDetail]);
    }
}
