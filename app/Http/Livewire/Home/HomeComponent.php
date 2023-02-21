<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home.home-component')->layout('layouts.master');
    }
}
