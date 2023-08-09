<?php

namespace App\Http\Livewire\Champions;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Champions extends Component
{

    public $data_champions;

    public function mount()
    {
        $response = Http::get(env('NODE_SERVER') . '/champion/get-all-champion');

        // Kiểm tra kết quả và xử lý dữ liệu
        if ($response->successful()) {
            $data = $response->json(); // Dữ liệu từ API được chuyển đổi thành mảng JSON
            $this->data_champions = $data;
        } else {
            response()->json(['error' => 'Không thể gọi API'], 500);
        }
    }

    public function render()
    {


        return view('livewire.champions.champions', ['data_champions' => $this->data_champions])
            ->extends('layouts.mainLayout')
            ->slot('main');
    }
}
