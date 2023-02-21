<div>
    <!-- BreadCrumb -->
    <div class="container mx-auto p-4 grid grid-cols-4 gap-4">
        <div class="col-span-4">
            <ul>
                <li class="flex gap-4 text-sm items-center">
                    <a href="#" class="text-gray-600 text-sm">فروشگاه اینترنتی دیجی کالا</a>
                    <span class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></span> 
                    <ul>
                        <li>
                            <div class="text-gray-400 text-sm">فروشگاه</div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- / BreadCrumb -->
    <!-- Products -->
    <div class="container mx-auto p-4 grid grid-cols-4 gap-4 pt-0">
        @livewire('shop.filter-component')
        <div class="col-span-4 lg:col-span-3">
            <div class="mb-2">
                @livewire('home.product-category-component')
            </div>
            <div class="flex justify-between items-center">
                <div class="flex text-gray-600 items-center px-4 gap-2">
                    <i class="fa-solid fa-arrow-down-short-wide"></i>
                    <div class="text-sm">مرتب سازی بر اساس:</div>
                    <select wire:model="orderBy" name="" id="" class="rounded-xl text-sm border-gray-300 focus:ring-blue-200 focus:ring-4 focus:border-blue-400 transtion-all duration-300">
                        <option value="bestSell">پروفروش ترین</option>
                        <option value="bestView">پر بازدید ترین</option>
                        <option value="newest">جدید ترین</option>
                        <option value="inExpensive">ارزان ترین</option>
                        <option value="expensive">گران ترین</option>
                    </select>
                </div>
            </div>
            <div class="relative m-auto py-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
                @foreach($products as $product)
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
                    <h3 class="text-sm font-bold text-gray-600 tracking-tight two-line">{{$product->name}}</h3>
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
                    <div class="text-xs line-through text-left py-1 ml-6 text-gray-400">
                        {{number_format($product->price)}}
                    </div>
                    @else 
                    <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                        {{number_format($product->price)}}
                        <span class="tracking-[-0.1em] text-xs">تومان</span>
                    </div>
                    @endif
                </a>
                @endforeach
                <div class="absolute top-full left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-10">
                    <span class="animate-spin bg-transparent border-t-4 border-l-4 border-r-4 border-b-4 rounded-full w-20 h-20 border-gray-600 group-hover:border-white border-b-transparent group-hover:border-b-transparent m-auto"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- / Products -->
</div>
