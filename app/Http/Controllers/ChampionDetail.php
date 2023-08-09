<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class ChampionDetail extends BaseController
{

    public $Champion;

    public function showDetailChampion($slug_name)
    {
        $response = Http::get(env('NODE_SERVER') . '/champion/get-one-champion/' . $slug_name);
        if ($response->successful()) {
            $data = $response->json(); // Dữ liệu từ API được chuyển đổi thành mảng JSON
            $this->Champion = $data;
        } else {
            response()->json(['error' => 'Không thể gọi API'], 500);
        }
        return view('livewire.champions.champion-component', ['Champion' => $this->Champion]);
    }
}
