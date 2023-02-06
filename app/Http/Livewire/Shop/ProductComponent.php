<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use App\Models\Product;

class ProductComponent extends Component
{
    public $productId;
    public function mount($id) {
        $this->productId = $id;
    }
    public function render()
    {
        $product = Product::find($this->productId);
        $img_gallery = $this->getImgGallery($product);        
        return view('livewire.shop.product-component', compact('product','img_gallery'))->layout('layouts.master');
    }

    public function getImgGallery($product) {
        if ($product->img_gallery != null) {
            return explode(',',$product->img_gallery);
        } else {
            return null;
        }
    }
}
