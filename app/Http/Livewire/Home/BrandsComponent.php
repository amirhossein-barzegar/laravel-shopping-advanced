<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Brand;

class BrandsComponent extends Component
{
    public $brands = null;

    public function mount() {
        $this->brands = Brand::all();
    }
    public function render()
    {
        return view('livewire.home.brands-component');
    }
}
