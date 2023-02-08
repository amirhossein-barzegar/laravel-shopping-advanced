<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Product;

class ProductsComponent extends Component
{
    public function render()
    {
        $products = Product::with('discount')->orderBy('created_at', 'DESC')->get();
        return view('livewire.home.products-component',compact('products'));
    }

    public function discountPrice($id) {
        $product = Product::find($id)->with('discount')->first();
        return $product->price - ($product->price*100/$product->discount->amount);

    }
}
