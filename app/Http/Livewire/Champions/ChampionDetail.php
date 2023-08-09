<?php

namespace App\Http\Livewire\Champions;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ChampionDetail extends Component
{

    public $Champion;
    public $slug_name;


    public function mount($Champion)
    {
        $this->Champion = $Champion;
    }

    public function render()
    {
        return view('livewire.champions.champion-detail', ['Champion' => $this->Champion]);
    }
}
