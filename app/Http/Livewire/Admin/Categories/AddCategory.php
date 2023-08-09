<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Categorys;
use Illuminate\Http\Request;
use Livewire\Component;

class AddCategory extends Component
{

    public function saveCategory(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $upload = $request->file('image');
        $uploadName = time() . '.' . $upload->extension();
        $upload->move(public_path('categoryImage'), $uploadName);

        Categorys::create([
            'cate_name' => $request->name,
            'cate_slug' => $request->slug,
            'cate_parent' => $request->cate_parent,
            'cate_image' => $uploadName
        ]);

        return redirect()->back();
    }


    public function listCategory()
    {
        return view('livewire.admin.categories.list-category')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }

    public function render()
    {
        return view('livewire.admin.categories.add-category')
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
