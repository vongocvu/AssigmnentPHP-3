<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ListPost extends Component
{
    public function render()
    {
        return view('livewire.admin.posts.list-post')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
