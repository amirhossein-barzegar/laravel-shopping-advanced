<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use App\Models\ProductCategory;

class ProductCategoryComponent extends Component
{
    public $slug;
    public $categoryProducts;
    public function mount($slug) {
        $this->slug = $slug;
        $this->categoryProducts = ProductCategory::where('slug',$slug)->with('products')->get();
    }
    public function render()
    {
        return view('livewire.shop.product-category-component')->layout('layouts.master');
    }
}
