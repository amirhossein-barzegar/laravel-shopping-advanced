<x-master-layout title="Topket">
    <div class="container mx-auto px-4">
        @livewire('home.product-category-component')
    </div>
<!-- Slider Top -->
<div class="swiper relative container mx-auto" id="topSlider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide px-4 py-2">
        <img src="{{asset('img/banners/banner1.jpg')}}" alt="" class="max-w-full w-full h-44 object-cover rounded-xl">
    </div>
    <div class="swiper-slide px-4 py-2">
        <img src="{{asset('img/banners/banner2.jpg')}}" alt="" class="max-w-full w-full h-44 object-cover rounded-xl">
    </div>
    <div class="swiper-slide px-4 py-2">
        <img src="{{asset('img/banners/banner3.jpg')}}" alt="" class="max-w-full w-full h-44 object-cover rounded-xl">
    </div>
    <div class="swiper-slide px-4 py-2">
        <img src="{{asset('img/banners/banner4.gif')}}" alt="" class="max-w-full w-full h-44 object-cover rounded-xl">
    </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination flex justify-end items-center transition-all duration-1000 ml-6 mb-3" id="topSliderPaginate"></div>
</div>
<!-- / Slider Top -->

<!-- Special Perpose -->
@livewire('home.special-product-component')
<!-- / Special Perpose -->

<!-- Products -->
@livewire('home.products-component')
<!-- / Products -->

<!-- Blogs -->
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center">
        <div class="flex text-gray-600 items-center px-4">
            <i class="fa-regular fa-newspaper text-4xl text-gray-500"></i>
            <h2 class="text-xl font-bold mr-4">بلاگ دیجی کالا</h2>
        </div>
        <a href="" class="transition-all duration-300 text-gray-500 rounded-xl px-6 py-2 flex items-center">
            <span class="ml-2">مشاهده همه</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>
    <div class="py-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog1.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog2.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog3.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog4.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog4.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 min-h-80 shrink-0">
            <figure class="relative">
                <img src="{{asset('img/blogs/blog4.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
            </figure>
            <h3 class="text-sm font-bold text-gray-600 tracking-tight">موبایل سامسونگ گلکسی مدل 97670</h3>
            <div class="flex gap-1 items-center my-1">
                <span class="text-xs text-gray-600 tracking-tighter leading-6">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                </span>
            </div>
            
            <div class="flex justify-between">
                <div class="text-xs text-gray-400 text-right">
                    <i class="fa-solid fa-eye"></i>
                    1240 بازدید
                </div>
                <div class="text-xs text-gray-400 text-left">
                    <i class="fa-regular fa-calendar"></i>
                    30 روز پیش
                </div>
            </div>
        </a>
    </div>
</div>
<!-- / Blogs -->
</x-master-layout>