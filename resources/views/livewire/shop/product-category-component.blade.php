<div class="container mx-auto p-4">
    <x-modal-message trigger="showModal">
        {{session()->get('success')}}
    </x-modal-message>
    <div class="flex justify-between items-center">
        <div class="flex flex-col text-gray-600 items-center px-4 gap-2 mb-2">
            <div class="flex w-fit items-center ml-auto">
                <i class="fa-solid fa-list text-4xl"></i>
                <h2 class="text-xl font-bold mr-4">دسته بندی : {{$productsCategory->name}}</h2>
            </div>
            <small class="text-gray-500 text-justify">{{$productsCategory->description}}</small>
        </div>
    </div>
    <div class="py-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
        @foreach($categoryProducts as $product)
        <a wire:key="{{$product->id}}" href="{{ route('shop.product', $product->id) }}" class="bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                @if($product->discount && $product->discount->amount > 0)
                <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                    {{$product->discount->amount}}%
                </div>
                @endif
                <img src="{{ asset($product->img_thumb) }}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
                @if($cart->where('id',$product->id)->count())
                    <div class="flex items-center bg-white rounded-full border border-red-600 text-red-600 h-8 w-20 absolute bottom-3 right-3 ">
                        <button wire:loading.attr="disabled" wire:click.prevent="incrementCart('{{$product->cartItem->rowId}}')" class="grid place-items-center grow">
                            <i wire:loading.remove wire:target="incrementCart('{{$product->cartItem->rowId}}')" class="fa-solid fa-plus"></i>
                            <span wire:loading wire:target="incrementCart('{{$product->cartItem->rowId}}')" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-red-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent"></span>
                        </button>
                        <span class="grid place-items-center grow">{{$product->cartItem->qty}}</span>
                        <button wire:loading.attr="disabled" wire:click.prevent="decrementCart('{{$product->cartItem->rowId}}')" class="grid place-items-center grow">
                            <i wire:loading.remove wire:target="decrementCart('{{$product->cartItem->rowId}}')" class="fa-solid fa-minus"></i>
                            <span wire:loading wire:target="decrementCart('{{$product->cartItem->rowId}}')" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-red-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent"></span>
                        </button>
                    </div>
                @else
                    <button wire:loading.attr="disabled" @click.prevent="showModal=true" wire:click.prevent="addToCart({{$product->id}},'{{$product->name}}',1,{{$product->price}})" class="group bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center hover:bg-red-500 hover:text-white hover:border-white transition-all duration-200">
                        <i wire:loading.remove wire:target="addToCart({{$product->id}},'{{$product->name}}',1,{{$product->price}})" class="fa-solid fa-plus"></i>
                        <span wire:loading wire:target="addToCart({{$product->id}},'{{$product->name}}',1,{{$product->price}})" class="animate-spin bg-transparent border-t-2 border-l-2 border-r-2 border-b-2 rounded-full w-4 h-4 border-red-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent"></span>
                    </button>
                @endif
            </figure>
            
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">{{$product->name}}</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            @if ($product->discount && $product->discount->amount > 0) 
            <div 
                class="text-md text-left font-[500] tracking-tight text-gray-600"
            >
                @php 
                $discount_price = $product->price - ($product->price/100*$product->discount->amount)
                @endphp
                {{number_format($discount_price)}}
                <span class="tracking-[-0.1em] text-xs">تومان</span>            
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                {{ $product->price }}
            </div>
            @else 
            <div class="text-md text-left font-[500] tracking-tight text-gray-600" x-text="$wire.discountPrice">
                {{$product->price}}
                <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            @endif
        </a>
        @endforeach
    </div>
</div>
