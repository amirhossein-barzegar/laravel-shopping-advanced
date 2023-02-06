<x-master-layout>
    <main class="mt-16">
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
        <div class="bg-rose-500 h-96 w-full flex">
            <!-- Products for Mobile -->
            <div class="container mx-auto flex items-center overflow-x-auto md:overflow-x-hidden md:hidden gap-3 px-3">
                <div class="flex flex-col items-center justify-center w-40 shrink-0">
                    <img src="{{asset('img/Amazings.svg')}}" alt="" class="w-28">
                    <img src="{{asset('img/box.png')}}" alt="" class="w-36">
                </div>
                <a href="#" class="bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                    <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                    <figure class="relative">
                        <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                        <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                            <i class="fa-solid fa-plus"></i>
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
                        <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                            <i class="fa-solid fa-plus"></i>
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
                        <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                            <i class="fa-solid fa-plus"></i>
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
                        <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                            <i class="fa-solid fa-plus"></i>
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
            </div>
            <!-- / Products for Mobile -->

            <!-- Products for Any other -->
            <div class="hidden md:block container m-auto px-4">
                <div class="swiper relative" id="specialSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col items-center justify-center w-40 shrink-0">
                            <img src="{{asset('img/Amazings.svg')}}" alt="" class="w-28">
                            <img src="{{asset('img/box.png')}}" alt="" class="w-36">
                        </div>
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
                        <a href="#" class="swiper-slide bg-white rounded-lg p-3 w-40 h-80 shrink-0">
                            <p class="text-rose-500 text-xs font-semibold py-1">شگفت انگیز اختصاصی اپ</p>
                            <figure class="relative">
                                <img src="{{asset('img/products/digital_6.jpg')}}" alt="" class="rounded-lg w-36 h-32 object-cover my-1">
                                <div class="bg-white rounded-full border border-red-600 text-red-600 w-8 h-8 absolute bottom-3 right-3 grid place-items-center">
                                    <i class="fa-solid fa-plus"></i>
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
        <!-- / Special Perpose -->

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
            <a href="#" class="swiper-slide bg-white shadow hover:shadow-lg transition-all duration-300 rounded-lg p-3 h-80 shrink-0">
                <figure class="relative">
                    <div class="absolute -top-4 -left-4 bg-red-500 w-9 h-9 rounded-full text-xs font-bold text-white grid place-items-center">
                        30%
                    </div>
                    <img src="{{asset('img/products/digital_1.jpg')}}" alt="" class="rounded-lg w-full h-40 object-cover mt-1 mb-3">
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
            </a>
            </div>
        </div>
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
    </main>
</x-master-layout>