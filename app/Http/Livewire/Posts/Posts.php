<?php

namespace App\Http\Livewire\Posts;

use App\Models\Posts as ModelsPosts;
use Livewire\Component;

class Posts extends Component
{

    public $data_posts;


    public function mount()
    {
        $getPosts = ModelsPosts::all();
        $this->data_posts = $getPosts;
    }

    public function render()
    {
        return view('livewire.posts.posts', ['data_posts' => $this->data_posts])
            ->extends('layouts.mainLayout')
            ->slot('main');
    }
}
