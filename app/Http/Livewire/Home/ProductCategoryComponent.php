<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\ProductCategory;

class ProductCategoryComponent extends Component
{
    public $productCategories;

    public function mount() {
        $this->productCategories = ProductCategory::all();
    }
    
    public function render()
    {
        return view('livewire.home.product-category-component');
    }
}
