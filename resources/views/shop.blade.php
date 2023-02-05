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
        <link rel="stylesheet" href="{{asset('css/price_range_script.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <style>

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
                <div 
                x-data="{
                    showBrandFilter: false,
                    showColorFilter: false,
                    showPriceFilter: false,
                    showStockFilter: false,
                }"
                class="col-span-4 lg:col-span-1 bg-white px-4 py-3 rounded-xl shadow"
                >
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl text-gray-800">فیلتر ها</h2>
                        <button class="text-sm text-cyan-500">حذف فیلتر ها</button>
                    </div>
                    <div>
                        <ul>
                            <li 
                            @click="showBrandFilter = !showBrandFilter"
                            class="flex flex-col justify-between py-3 border-b border-gray-200 cursor-pointer">
                                <div class="flex justify-between font-bold">
                                    برند
                                    <i x-bind:class="{'rotate-180':showBrandFilter}" class="fa-solid fa-sort-down duration-300 transition-all"></i>
                                </div>
                                <ul
                                x-cloak
                                x-show="showBrandFilter" 
                                x-transition.duration.500ms
                                class="pt-2" 
                                >
                                    <li class="py-1">
                                        <label for="check1" class="flex gap-2 items-center">
                                            <input type="checkbox" name="" id="check1" class="rounded-md">
                                            <div class="text-gray-600">سامسونگ</div>
                                        </label>
                                    </li>
                                    <li class="py-1">
                                        <label for="check2" class="flex gap-2 items-center">
                                            <input type="checkbox" name="" id="check2" class="rounded-md">
                                            <div class="text-gray-600">شیائومی</div>
                                        </label>
                                    </li>
                                    <li class="py-1">
                                        <label for="check3" class="flex gap-2 items-center">
                                            <input type="checkbox" name="" id="check3" class="rounded-md">
                                            <div class="text-gray-600">نوکیا</div>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li 
                            @click.self="showColorFilter = !showColorFilter"
                            class="flex flex-col justify-between py-3 border-b border-gray-200 cursor-pointer">
                                <div 
                                @click="showColorFilter = !showColorFilter"
                                class="flex justify-between font-bold"
                                >
                                    رنگ
                                    <i x-bind:class="{'rotate-180':showColorFilter}" class="fa-solid fa-sort-down duration-300 transition-all"></i>
                                </div>
                                <ul
                                x-cloak
                                x-show="showColorFilter" 
                                x-transition.duration.500ms
                                class="pt-2 grid grid-cols-4 gap-3" 
                                >
                                    <li class="py-1">
                                        <label for="color1" class="flex flex-col gap-1 items-center">
                                            <input type="checkbox" name="" id="color1" class="rounded-md w-10 h-10 text-red-500 focus:ring-cyan-300 checked:ring-cyan-300 border-gray-200 bg-red-500">
                                            <div class="text-gray-600 text-sm">قرمز</div>
                                        </label>
                                    </li>
                                    <li class="py-1">
                                        <label for="color2" class="flex flex-col gap-1 items-center">
                                            <input type="checkbox" name="" id="color2" class="rounded-md w-10 h-10 text-green-500 focus:ring-cyan-300 checked:ring-cyan-300 border-gray-200 bg-green-500">
                                            <div class="text-gray-600 text-sm">سبز</div>
                                        </label>
                                    </li>
                                    <li class="py-1">
                                        <label for="color3" class="flex flex-col gap-1 items-center">
                                            <input type="checkbox" name="" id="color3" class="rounded-md w-10 h-10 text-blue-500 focus:ring-cyan-300 checked:ring-cyan-300 border-gray-200 bg-blue-500">
                                            <div class="text-gray-600 text-sm">آبی</div>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li 
                            @click.self="showPriceFilter = !showPriceFilter"
                            class="flex flex-col justify-between py-3 border-b border-gray-200 cursor-pointer">
                                <div 
                                @click="showPriceFilter = !showPriceFilter"
                                class="flex justify-between font-bold">
                                    محدوده قیمت
                                    <i x-bind:class="{'rotate-180':showPriceFilter}" class="fa-solid fa-sort-down duration-300 transition-all"></i>
                                </div>
                                <ul
                                x-cloak
                                x-show="showPriceFilter" 
                                x-transition.duration.500ms
                                class="pt-2" 
                                >
                                    <li>
                                        <div class="flex items-center">
                                            <label for="" class="text-gray-400">از </label>
                                            <input readonly type="text" step="50000" min=0 max=5000000 id="min_price_range" class="price-range-field" class="appearance-none rounded-lg !grow"/>
                                            <span class="tracking-tighter text-sm">تومان</span>
                                        </div>
                                        <div class="flex items-center">
                                            <label for="" class="text-gray-400">تا </label>
                                            <input readonly type="text" step="50000" min=0 max=5000000 id="max_price_range" class="price-range-field" class="appearance-none rounded-lg grow"/>
                                            <span class="tracking-tighter text-sm">تومان</span>
                                        </div>
                                            
                                        <div id="rangeSlider" class="flex mt-4 w-full"></div>
                                        <div class="flex justify-between text-gray-400 mt-2 text-sm">
                                            <span>گران ترین</span>
                                            <span>ارزان ترین</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li 
                                @click="showStockFilter = !showStockFilter"
                                class="flex flex-col justify-between py-3 border-b border-gray-200 cursor-pointer"
                            >
                                <div class="flex justify-between font-bold">
                                    <span class="select-none">فقط کالا های موجود</span>
                                    <!-- Toggle B -->
                                    <div class="flex items-center justify-center w-fit">
                                        <label 
                                            for="toggle" 
                                            class="flex items-center cursor-pointer"
                                        >
                                            <!-- toggle -->
                                            <div class="relative">
                                                <!-- input -->
                                                <input @click="showStockFilter = !showStockFilter" type="checkbox" id="toggle" class="sr-only">
                                                <!-- line -->
                                                <div :class="{'bg-cyan-500 border-cyan-500':showStockFilter}" class="block border-2 border-gray-400 w-10 h-5 rounded-full transition-all duration-300"></div>
                                                <!-- dot -->
                                                <div :class="{'right-1 !bg-white':showStockFilter}" class="dot absolute left-1 top-1 bg-gray-400 w-3 h-3 rounded-full transition-all duration-300"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-3">
                    <div class="flex justify-between items-center">
                        <div class="flex text-gray-600 items-center px-4 gap-2">
                            <i class="fa-solid fa-arrow-down-short-wide"></i>
                            <div class="text-sm">مرتب سازی بر اساس:</div>
                            <select name="" id="" class="rounded-xl text-sm border-gray-300 focus:ring-blue-200 focus:ring-4 focus:border-blue-400 transtion-all duration-300">
                                <option value="">پروفروش ترین</option>
                                <option value="">پر بازدید ترین</option>
                                <option value="">جدید ترین</option>
                                <option value="">ارزان ترین</option>
                                <option value="">گران ترین</option>
                            </select>
                        </div>
                    </div>
                    <div class="py-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
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
            </div>
            <!-- / Products -->
        </main>
        <footer>
            
        </footer>
        <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/price_range_script.js') }}"></script>
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
