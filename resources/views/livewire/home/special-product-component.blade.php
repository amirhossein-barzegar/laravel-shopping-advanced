<div class="bg-rose-500 h-96 w-full flex">
    <!-- Products for Mobile -->
    <div class="container mx-auto flex items-center overflow-x-auto md:overflow-x-hidden md:hidden gap-3 px-3">
        <div class="flex flex-col items-center justify-center w-40 shrink-0">
            <img src="{{asset('img/Amazings.svg')}}" alt="" class="w-28">
            <img src="{{asset('img/box.png')}}" alt="" class="w-36">
        </div>
        @foreach($specialProducts as $product)
            <a href="{{ route('shop.product',$product->id) }}" wire:key="{{$product->id}}" class="swiper-slide bg-white rounded-lg p-3 w-40 min-h-80 h-fit shrink-0">
                <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                <figure class="relative">
                    <img src="{{asset($product->img_thumb)}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                    @if(isset($product->cartItem))
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
                <h3 class="text-sm font-bold text-gray-600 tracking-tight truncate max-w-full">{{$product->name}}</h3>
                @if($product->stock_status == App\Models\Product::AVAILABLE_PRODUCT)
                <div class="flex gap-1 items-center my-1">
                    <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                    <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
                </div>
                @else 
                <div class="flex gap-1 items-center my-1">
                    <i class="fa-regular fa-floppy-disk text-lg text-red-500 grid place-items-center"></i>
                    <span class="text-xs text-gray-600 tracking-tighter"> نا موجود در انبار دیجی کالا</span>
                </div>
                @endif
                <div class="flex justify-between items-center">
                    <div class="bg-red-500 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">
                        {{$product->discount->amount}}%
                    </div>
                    <div class="text-md font-[500] tracking-tight text-gray-600">
                        {{number_format($product->price - ($product->price/100*$product->discount->amount))}} 
                        <span class="tracking-[-0.1em] text-xs">تومان</span>
                    </div>
                </div>
                <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                    {{number_format($product->price)}} 
                </div>
                <div class="text-xs text-gray-400 text-left" wire:poll.1000ms="calculateTime">
                    {{$product->discount->remainingTimeMessage}}
                </div>
            </a>
        @endforeach
        <!-- <a href="#" class="bg-white rounded-lg p-3 w-40 h-80 shrink-0">
            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
            <figure class="relative">
                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                <button class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center hover:bg-red-500 hover:text-white hover:border-white transition-all duration-200">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="flex items-center bg-white rounded-full border border-red-600 text-red-600 h-8 w-20 absolute bottom-3 right-3 ">
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <span class="grid place-items-center grow">1</span>
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="flex justify-between items-center">
                <div class="bg-red-500 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">
                    20%
                </div>
                <div class="text-md font-[500] tracking-tight text-gray-600">
                    2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
                </div>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
            <div class="text-xs text-gray-400 text-left">
                06:34:10
            </div>
        </a>
        <a href="#" class="bg-white rounded-lg p-3 w-40 h-80 shrink-0">
            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
            <figure class="relative">
                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                <button class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center hover:bg-red-500 hover:text-white hover:border-white transition-all duration-200">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="flex items-center bg-white rounded-full border border-red-600 text-red-600 h-8 w-20 absolute bottom-3 right-3 ">
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <span class="grid place-items-center grow">1</span>
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="flex justify-between items-center">
                <div class="bg-red-500 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">
                    20%
                </div>
                <div class="text-md font-[500] tracking-tight text-gray-600">
                    2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
                </div>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
            <div class="text-xs text-gray-400 text-left">
                06:34:10
            </div>
        </a>
        <a href="#" class="bg-white rounded-lg p-3 w-40 h-80 shrink-0">
            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
            <figure class="relative">
                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                <button class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center hover:bg-red-500 hover:text-white hover:border-white transition-all duration-200">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div class="flex items-center bg-white rounded-full border border-red-600 text-red-600 h-8 w-20 absolute bottom-3 right-3 ">
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <span class="grid place-items-center grow">1</span>
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="flex justify-between items-center">
                <div class="bg-red-500 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">
                    20%
                </div>
                <div class="text-md font-[500] tracking-tight text-gray-600">
                    2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
                </div>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
            <div class="text-xs text-gray-400 text-left">
                06:34:10
            </div>
        </a> -->
    </div>
    <!-- / Products for Mobile -->

    <!-- Products for Any other -->
    <div class="hidden md:block container m-auto px-4">
        <div wire:ignore.self class="swiper relative" id="specialSlider">
            <div wire:ignore.self class="swiper-wrapper">
                <div class="swiper-slide flex flex-col items-center justify-center w-40 shrink-0">
                    <img src="{{asset('img/Amazings.svg')}}" alt="" class="w-28">
                    <img src="{{asset('img/box.png')}}" alt="" class="w-36">
                </div>
                @foreach($specialProducts as $product)
                    <a href="{{ route('shop.product',$product->id) }}" wire:key="{{$product->id}}" class="swiper-slide bg-white rounded-lg p-3 w-40 min-h-80 h-fit shrink-0">
                        <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                        <figure class="relative">
                            <img src="{{asset($product->img_thumb)}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                            @if(isset($product->cartItem))
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
                        <h3 class="text-sm font-bold text-gray-600 tracking-tight truncate max-w-full">{{$product->name}}</h3>
                        @if($product->stock_status == App\Models\Product::AVAILABLE_PRODUCT)
                        <div class="flex gap-1 items-center my-1">
                            <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                            <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
                        </div>
                        @else 
                        <div class="flex gap-1 items-center my-1">
                            <i class="fa-regular fa-floppy-disk text-lg text-red-500 grid place-items-center"></i>
                            <span class="text-xs text-gray-600 tracking-tighter"> نا موجود در انبار دیجی کالا</span>
                        </div>
                        @endif
                        <div class="flex justify-between items-center">
                            <div class="bg-red-500 px-2 py-1 rounded-full text-xs font-bold w-fit text-white">
                                {{$product->discount->amount}}%
                            </div>
                            <div class="text-md font-[500] tracking-tight text-gray-600">
                                {{number_format($product->price - ($product->price/100*$product->discount->amount))}} 
                                <span class="tracking-[-0.1em] text-xs">تومان</span>
                            </div>
                        </div>
                        <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                            {{number_format($product->price)}} 
                        </div>
                        <div class="text-xs text-gray-400 text-left">
                            {{$product->discount->remainingTimeMessage}}
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="absolute z-50 top-1/3 left-4 bg-white border border-gray-300 rounded-full w-14 h-14 grid place-items-center text-xl text-gray-500" id="specialSliderBtnLeft">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <div class="absolute z-50 top-1/3 right-4 bg-white border border-gray-300 rounded-full w-14 h-14 grid place-items-center text-xl text-gray-500" id="specialSliderBtnRight">
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>
    <!-- / Products for Any other -->
</div>
