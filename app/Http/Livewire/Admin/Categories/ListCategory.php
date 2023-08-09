<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;

class ListCategory extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.list-category')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
