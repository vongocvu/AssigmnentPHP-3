<?php

namespace App\Http\Livewire\Admin\Champions;

use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Livewire\Component;

class ListChampion extends Component
{

    public $allChampion;

    public function mount()
    {
        $response = Http::get(env('NODE_SERVER') . '/champion/get-all-champion');
        if ($response->successful()) {
            $data = $response->json(); // Dữ liệu từ API được chuyển đổi thành mảng JSON
            $this->allChampion = $data;
        } else {
            response()->json(['error' => 'Không thể gọi API'], 500);
        }
    }

    public function render()
    {
        return view('livewire.admin.champions.list-champion', ['AllChampion' => $this->allChampion])
            ->extends('layouts.adminLayout')
            ->slot('main');
    }
}
