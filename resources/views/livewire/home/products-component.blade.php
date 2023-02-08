<!-- Products -->
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center">
        <div class="flex text-gray-600 items-center px-4">
            <i class="fa-solid fa-store text-4xl text-gray-500"></i>
            <h2 class="text-xl font-bold mr-4">جدید ترین محصولات</h2>
        </div>
        <a href="" class="transition-all duration-300 text-gray-500 rounded-xl px-6 py-2 flex items-center">
            <span class="ml-2">بریم به فروشگاه</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>
    <div class="py-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
        @foreach($products as $product)
        <a  href="{{ route('shop.product', $product->id) }}" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                @if($product->discount && $product->discount->amount > 0)
                <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                    {{$product->discount->amount}}%
                </div>
                @endif
                <img src="{{ $product->img_thumb }}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
                <button class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center hover:bg-red-500 hover:text-white hover:border-white transition-all duration-200">
                    <i class="fa-solid fa-plus"></i>
                </button>
                @if(10 < 1)
                <div class="flex items-center bg-white rounded-full border border-red-600 text-red-600 h-8 w-20 absolute bottom-3 right-3 ">
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <span class="grid place-items-center grow">1</span>
                    <button class="grid place-items-center grow">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
                @endif
            </figure>
            
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">{{$product->name}}</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            @if ($product->discount && $product->discount->amount > 0) 
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                {{ $product->price - ($product->price/100*$product->discount->amount) }} <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                {{ $product->price }}
            </div>
            @else 
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                {{ $product->price }} <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            @endif
        </a>
        @endforeach
        <!-- <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/products/digital_2.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>

            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                    30%
                </div>
                <img src="{{asset('img/products/digital_3.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>

            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                    30%
                </div>
                <img src="{{asset('img/products/digital_4.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>

            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/products/digital_5.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>

            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
            <figure class="relative">
                <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                    30%
                </div>
                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>

            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <i class="fa-regular fa-floppy-disk text-lg text-teal-500 grid place-items-center"></i>
                <span class="text-xs text-gray-600 tracking-tighter">موجود در انبار دیجی کالا</span>
            </div>
            <div class="text-md text-left font-[500] tracking-tight text-gray-600">
                2,000,000 <span class="tracking-[-0.1em] text-xs">تومان</span>
            </div>
            <div class="text-xs line-through text-left py-1 ml-6 text-gray-400 ">
                2,500,000
            </div>
        </a> -->
    </div>
</div>
<!-- / Products -->
