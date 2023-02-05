<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Swipper Slider SDN -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <style>
            .swiper-button-disabled {
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
            }
            [x-cloak] { display: none !important; }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="bg-sky-50">
        <header 
        x-data="{
            mobileMenu: false,
            showCart: false,
        }"
        class="flex bg-white shadow fixed top-0 left-0 right-0 z-10000">
            <div class="container mx-auto px-3 py-2 flex items-center md:justify-between">
                <div class="hidden lg:flex items-center">
                    <img src="{{asset('img/logo.png')}}" alt="" class="h-12 w-28 px-4 object-cover">
                    <nav>
                        <ul class="flex items-center">
                            <li><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">خانه</a></li>
                            <li><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">دسته بندی ها</a></li>
                            <li><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">مقالات</a></li>
                            <li><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">فروشگاه</a></li>
                        </ul>
                    </nav>
                </div>
                <button 
                x-on:click="mobileMenu=true"
                class="grid place-items-center text-2xl p-3 lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="grow flex justify-end gap-3">
                    <form class="flex rounded-xl bg-gray-100 items-center grow md:grow-0 shrink flex-end focus-within:ring focus-within:ring-gray-200 duration-300">
                        <button class="w-19 h-full w-12 grid place-items-center text-lg text-gray-500">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input type="text" placeholder="جستجو در تاپکت" class="bg-transparent p-3 grow border-none focus:ring-0 text-gray-500"/> 
                    </form>
                    <button 
                        @click="showCart = true"
                        class="relative bg-sky-50 text-sky-600 text-lg rounded-xl w-12 h-12 grid place-items-center"
                    >
                        <span class="animate-bounce bg-red-600 font-semibold w-5 h-5 rounded-full text-xs text-white grid place-items-center absolute -top-1 -right-1 ring-4 ring-white">3</span>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>   
                    <button class="bg-pink-50 text-pink-600 text-lg rounded-xl w-12 h-12 grid place-items-center">
                        <i class="fa-solid fa-user"></i>
                    </button>   
                </div>

                           
            </div>
            <div
                x-cloak
                x-show="mobileMenu"
                @click.self="mobileMenu=false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="bg-gray-900 bg-opacity-50 w-full h-full fixed top-0 left-0 right-0">
                <div
                    x-cloak
                    x-show="mobileMenu"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="fixed top-0 right-0 bottom-0 bg-white w-72 h-full shadow-lg"
                >
                    <nav>
                        <ul class="flex flex-col">
                            <li><a href="#" class="flex px-4 py-3 border-b border-gray-200 text-gray-500 hover:text-gray-800 transition-all duration-200">خانه</a></li>
                            <li><a href="#" class="flex px-4 py-3 border-b border-gray-200 text-gray-500 hover:text-gray-800 transition-all duration-200">دسته بندی ها</a></li>
                            <li><a href="#" class="flex px-4 py-3 border-b border-gray-200 text-gray-500 hover:text-gray-800 transition-all duration-200">مقالات</a></li>
                            <li><a href="#" class="flex px-4 py-3 border-b border-gray-200 text-gray-500 hover:text-gray-800 transition-all duration-200">فروشگاه</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div
                x-cloak
                x-show="showCart"
                @click.self="showCart=false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="bg-gray-900 bg-opacity-50 w-full h-full fixed top-0 left-0 right-0">
                <div
                    x-cloak
                    x-show="showCart"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full"
                    class="p-4 fixed top-0 left-0 bottom-0 bg-white w-72 h-full shadow-lg overflow-y-auto max-h-screen flex flex-col justify-between"
                >
                <div class="grid grid-cols-1 gap-3">
                        <h4 class="text-center text-sm font-[600] text-gray-800 mb-2">سبد خرید من</h4>
                        <a href="#" class="py-2 flex gap-3">
                            <img src="{{ asset('img/products/digital_1.jpg') }}" alt="" class="bg-gray-300 rounded-lg w-20 h-32 object-cover">
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
                        </a>
                    </div>
                    <div class="bg-white h-24 w-full px-2 py-3">
                        <div class="pb-2 text-sm text-gray-600">
                            جمع کل : 
                            <span class="tracking-widest">2,300,000</span> 
                            <span class="text-xs tracking-[-0.07em]">تومان</span>
                        </div>
                        <div class="pb-2 text-sm text-gray-600">
                            هزینه ارسال : 
                            <span class="tracking-widest">50,000</span> 
                            <span class="text-xs tracking-[-0.07em]">تومان</span>
                        </div>
                        <div class="pb-2 text-sm font-semibold text-gray-800">
                            مبلغ قابل پرداخت : 
                            <span class="tracking-widest">2,350,000</span> 
                            <span class="text-xs tracking-[-0.07em]">تومان</span>
                        </div>
                        <button class="bg-green-600 text-white w-full py-2 mb-2 rounded-lg hover:bg-green-500 active:bg-green-600">Checkout</button>
                    </div>
                </div>

            </div>
        </header>
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
        <footer>
            
        </footer>
        <script src="//cdn.jsdelivr.net/npm/eruda"></script>
        <script>
            eruda.init();
            
            const topSlider = new Swiper('#topSlider', {
                // Optional parameters
                loop: true,
                breakpointsBase: 'container',
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    }
                },
                autoplay: {
                    delay: 4000,
                },
                speed: 500,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
                // If we need pagination
                pagination: {
                    el: '#topSliderPaginate',
                },
            });

            const specialSlider = new Swiper('#specialSlider', {
                // Optional parameters
                breakpoints: {
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 15,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 15,
                    },
                    1280: {
                        slidesPerView: 6,
                        spaceBetween: 15,
                    },
                    1536: {
                        slidesPerView: 7,
                        spaceBetween: 15,
                    }
                },
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
                // Navigation arrows
                navigation: {
                    nextEl: '#specialSliderBtnLeft',
                    prevEl: '#specialSliderBtnRight',
                },
            });
        </script>
    </body>
</html>
