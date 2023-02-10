<div class="min-h-full">
    @if(session()->has('error'))
    {{session()->get('error')}}
    @endif
    <div class="grid grid-cols-1 gap-3">
        <button 
            @click="showCart = false"
            class="fixed top-4 left-4 w-6 h-6 text-red-600 bg-white hover:shadow-sm transition-shadow duration-200 grid place-items-center rounded"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>
        <h4 class="text-center text-sm font-[600] text-teal-600 mb-2">
            سبد خرید من
            <span class="font-normal">( @livewire('shop.cart-counter') )</span>
        </h4>
        @forelse($cartItems as $item)
        <a href="" class="py-2 flex gap-3">
            @if(isset($item->product->img_thumb))
            <img src="{{ asset($item->product->img_thumb) }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
            @endif
            @if(isset($item->name)) 
            <div class="flex flex-col w-full">
                <h5 class="text-sm text-gray-700 font-semibold py-1 leading-6">{{$item->name}}</h5>
                <div class="my-1">
                    <small class="text-gray-700 tracking-wider">{{$item->subtotal()}}</small>
                    @if(isset($item->product->discount)) 
                    <small class="text-gray-400 line-through text-xs tracking-wider">{{$item->product->price}}</small>
                    <small class="bg-red-500 scale-75 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">{{$item->product->discount->amount}}%</small>
                    @endif 
                </div>
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <button wire:loading.attr="disabled" wire:click.prevent="incrementCart('{{$item->rowId}}')" class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300 grid place-items-center">
                            <i wire:loading.remove wire:target="incrementCart('{{$item->rowId}}')" class="fa-solid fa-plus"></i>
                            <span wire:loading wire:target="incrementCart('{{$item->rowId}}')" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-gray-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent"></span>
                        </button>
                        <span class="text-gray-600">{{$item->qty}}</span>
                        <button wire:loading.attr="disabled" wire:click.prevent="decrementCart('{{$item->rowId}}')" class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300 grid place-items-center">
                            <i wire:loading.remove wire:target="decrementCart('{{$item->rowId}}')" class="fa-solid fa-minus"></i>
                            <span wire:loading wire:target="decrementCart('{{$item->rowId}}')" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-gray-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent"></span>
                        </button>
                    </div>
                    <button wire:loading.attr="disabled" wire:click.prevent="removeCart('{{$item->rowId}}')" class="text-white bg-red-500 active:bg-red-600 w-8 h-8 rounded-full text-sm grid place-items-center">
                        <i wire:loading.remove wire:target="removeCart('{{$item->rowId}}')" class="fa-regular fa-trash-can"></i>
                        <span wire:loading wire:target="removeCart('{{$item->rowId}}')" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-white border-b-transparent group-hover:border-b-transparent"></span>
                    </button>
                </div>                  
            </div>
            @endif
        </a>
        @empty
        <div class="flex flex-col gap-6">
            <div class="text-center text-sm text-gray-500">
            هیچ محصولی در سبد خرید یافت نشد!
            </div>
            <div class="text-5xl text-gray-300 text-center">
            <i class="fa-solid fa-store-slash"></i>
            </div>
        </div>
        @endforelse
        <!-- <a href="#" class="py-2 flex gap-3">
            <img src="{{ asset('img/products/digital_2.jpg') }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
            <div class="flex flex-col">
                <h5 class="text-sm text-gray-700 font-semibold py-1 leading-6">لپ تاپ گیمینگ DELL مدل i7</h5>
                <div class="my-1">
                    <small class="text-gray-700 tracking-wider">2,100,000</small>
                    <small class="text-gray-400 line-through text-xs tracking-wider">2,100,000</small>
                </div> 
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-plus"></i></button>
                        <span class="text-gray-600">1</span>
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-minus"></i></button>
                    </div>
                    <button class="text-white bg-red-500 active:bg-red-600 w-8 h-8 rounded-full text-sm">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>                  
            </div>
        </a>
        <a href="#" class="py-2 flex gap-3">
            <img src="{{ asset('img/products/digital_3.jpg') }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
            <div class="flex flex-col">
                <h5 class="text-sm text-gray-700 font-semibold py-1 leading-6">لپ تاپ گیمینگ DELL مدل i7</h5>
                <div class="my-1">
                    <small class="text-gray-700 tracking-wider">2,100,000</small>
                    <small class="text-gray-400 line-through text-xs tracking-wider">2,100,000</small>
                </div> 
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-plus"></i></button>
                        <span class="text-gray-600">1</span>
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-minus"></i></button>
                    </div>
                    <button class="text-white bg-red-500 active:bg-red-600 w-8 h-8 rounded-full text-sm">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>                  
            </div>
        </a>
        <a href="#" class="py-2 flex gap-3">
            <img src="{{ asset('img/products/digital_4.jpg') }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
            <div class="flex flex-col">
                <h5 class="text-sm text-gray-700 font-semibold py-1 leading-6">لپ تاپ گیمینگ DELL مدل i7</h5>
                <div class="my-1">
                    <small class="text-gray-700 tracking-wider">2,100,000</small>
                    <small class="text-gray-400 line-through text-xs tracking-wider">2,100,000</small>
                </div> 
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-plus"></i></button>
                        <span class="text-gray-600">1</span>
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-minus"></i></button>
                    </div>
                    <button class="text-white bg-red-500 active:bg-red-600 w-8 h-8 rounded-full text-sm">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>                  
            </div>
        </a>
        <a href="#" class="py-2 flex gap-3">
            <img src="{{ asset('img/products/digital_5.jpg') }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
            <div class="flex flex-col">
                <h5 class="text-sm text-gray-700 font-semibold py-1 leading-6">لپ تاپ گیمینگ DELL مدل i7</h5>
                <div class="my-1">
                    <small class="text-gray-700 tracking-wider">2,100,000</small>
                    <small class="text-gray-400 line-through text-xs tracking-wider">2,100,000</small>
                </div> 
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-plus"></i></button>
                        <span class="text-gray-600">1</span>
                        <button class="text-gray-600 bg-gray-200 w-8 h-8 rounded-full text-sm active:bg-gray-300"><i class="fa-solid fa-minus"></i></button>
                    </div>
                    <button class="text-white bg-red-500 active:bg-red-600 w-8 h-8 rounded-full text-sm">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>                  
            </div>
        </a> -->
    </div>
    <div class="bg-white h-24 w-full px-2 py-3 mt-auto">
        <div class="pb-2 text-sm text-gray-600">
            جمع کل : 
            <span class="tracking-widest">{{Cart::initial()}}</span> 
            <span class="text-xs tracking-[-0.07em]">تومان</span>
        </div>
        <div class="pb-2 text-sm text-gray-600">
            جمع تخفیفات : 
            <span class="tracking-widest">{{Cart::discount()}}</span> 
            <span class="text-xs tracking-[-0.07em]">تومان</span>
        </div>
        <div class="pb-2 text-sm text-gray-600">
            مالیات : 
            <span class="tracking-widest">{{Cart::tax()}}</span> 
            <span class="text-xs tracking-[-0.07em]">تومان</span>
        </div>
        <div class="pb-2 text-sm font-semibold text-gray-800">
            مبلغ قابل پرداخت : 
            <span class="tracking-widest">{{Cart::total()}}</span> 
            <span class="text-xs tracking-[-0.07em]">تومان</span>
        </div>
        <button class="bg-green-600 shadow-md hover:shadow-inner duration-300 transition-all text-white w-full py-2 mb-2 rounded-lg active:bg-green-600">ادامه فرآیند</button>
    </div>
</div>