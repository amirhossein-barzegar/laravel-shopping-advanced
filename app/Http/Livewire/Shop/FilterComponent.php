<?php

namespace App\Http\Livewire\Shop;

use App\Models\Brand;
use Livewire\Component;

class FilterComponent extends Component
{
    public $brandFilter = [];
    public $onlyInStock = false;
    public $brands;

    public function mount() {
        $this->brands = Brand::all();
    }

    public function render()
    {
        if ($this->onlyInStock == true) {
            $this->emit('only-in-stock',$this->onlyInStock);
        } else {
            
        }
        $this->brandOnChange();
        return view('livewire.shop.filter-component');
    }

    public function brandOnChange() {
        $this->emit('brand-update',$this->brandFilter);
    }
}
