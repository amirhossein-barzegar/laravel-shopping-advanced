<?php

namespace App\Http\Livewire\Partials;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $cartCount;
    protected $listeners = [
        'update-cart' => 'render'
    ];
    public function render()
    {
        $this->cartCount = Cart::content()->count();
        return view('livewire.partials.header-component');
    }
}
