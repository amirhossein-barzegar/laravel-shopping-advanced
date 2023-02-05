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
        <main class="flex flex-col min-h-screen justify-center items-center">
            <div class="w-96 bg-white m-auto shadow rounded-xl">
                <img src="{{asset('img/logo.png')}}" alt="" class="w-20 h-16 object-cover text-center mx-auto py-4">
                <form action="" class="flex flex-col py-2 px-4 gap-2">
                    <h3 class="text-2xl text-center text-blue-900">خوش آمدید! ثبت نام کنید</h3>
                    <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300">
                        <input type="text" id="form1" placeholder="نام شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl">
                        <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-user"></i></label>
                    </div>
                    <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300">
                        <input type="text" id="form1" placeholder="پست الکترونیک شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl">
                        <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-envelope"></i></label>
                    </div>
                    <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300">
                        <input type="text" id="form1" placeholder="کلمه عبور شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl">
                        <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-lock"></i></label>
                    </div>
                    <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300">
                        <input type="text" id="form1" placeholder="تکرار کلمه عبور" class="grow shrink border-none focus:ring-0 text-left rounded-xl">
                        <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-lock"></i></label>
                    </div>
                    <button class="bg-blue-500 text-white rounded-xl py-2">ورود</button>
                    <p class="text-sm text-gray-400 mt-2 mb-1">هنوز ثبت نام نکرده اید؟ <a href="" class="text-blue-500">ثبت نام کنید!</a></p>
                    <p class="text-sm text-gray-400 mb-1">کلمه عبود خود را بخاطر ندارید؟ <a href="" class="text-blue-500">بازیابی کلمه عبور</a></p>
                </form>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    </body>
</html>
