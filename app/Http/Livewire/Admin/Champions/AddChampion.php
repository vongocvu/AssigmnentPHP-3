<?php

namespace App\Http\Livewire\Admin\Champions;

use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddChampion extends Component
{
    use WithFileUploads;

    public $fileFields = [];
    public $textFields = [];

    public function render()
    {
        return view('livewire.admin.champions.add-champion')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
