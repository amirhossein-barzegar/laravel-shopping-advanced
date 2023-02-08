<header 
    x-data="{
        mobileMenu: false,
        showCart: false,
    }"
    class="flex bg-white shadow fixed top-0 left-0 right-0 z-10000"
>
    <div class="container mx-auto px-3 py-2 flex items-center md:justify-between">
        <div class="hidden lg:flex items-center">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{asset('img/logo.png')}}" alt="" class="h-12 w-28 px-4 object-cover">
            </a>
            <nav>
                <ul class="flex items-center">
                    <li class="relative group flex">
                        <a href="{{ route('admin.dashboard') }}" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">داشبورد</a>
                    </li>
                    <li class="relative group flex">
                        <a href="" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">محصولات</a>
                        <ul class="w-52 flex flex-col absolute text-sm right-0 bg-white border border-gray-200 rounded-lg py-3 opacity-0 invisible top-[110%] group-hover:top-full group-hover:opacity-100 group-hover:visible transition-all duration-100 delay-100 text-gray-600">
                            <li class="flex">
                                <a href="{{ route('product.create') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">افزودن محصول</a>
                            </li>
                            <li class="flex">
                                <a href="{{ route('product.index') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">همه محصولات</a>
                            </li>
                            <li class="flex">
                                <a href="{{ route('product-category.create') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">افزودن دسته بندی</a>
                            </li>
                            <li class="flex">
                                <a href="{{ route('product-category.index') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">همه دسته بندی ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative group flex">
                        <a href="" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">برند ها</a>
                        <ul class="w-52 flex flex-col absolute text-sm right-0 bg-white border border-gray-200 rounded-lg py-3 opacity-0 invisible top-[110%] group-hover:top-full group-hover:opacity-100 group-hover:visible transition-all duration-100 delay-100 text-gray-600">
                            <li class="flex">
                                <a href="{{ route('product.create') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">افزودن برند</a>
                            </li>
                            <li class="flex">
                                <a href="{{ route('product.index') }}" class="w-full px-4 py-2 hover:bg-gray-50 transition-colors duration-200">همه برند ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative group flex"><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">مقالات</a></li>
                    <li class="relative group flex"><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">فروشگاه</a></li>
                </ul>
            </nav>
        </div>
        <button 
        x-on:click="mobileMenu=true"
        class="grid place-items-center text-2xl p-3 lg:hidden">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="grow flex justify-end gap-3">
            <form class="hidden sm:flex rounded-xl bg-gray-100 items-center grow md:grow-0 shrink flex-end focus-within:ring focus-within:ring-gray-200 duration-300">
                <button class="w-19 h-full w-12 grid place-items-center text-lg text-gray-500">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input type="text" placeholder="جستجو در تاپکت" class="bg-transparent p-3 grow border-none focus:ring-0 text-gray-500"/> 
            </form>
            <button 
                @click="showCart = true"
                class="relative bg-sky-50 text-sky-600 text-lg rounded-xl w-12 h-12 grid place-items-center"
            >
                <span class="animate-bounce bg-rose-500 font-semibold w-5 h-5 rounded-full text-xs text-white grid place-items-center absolute -top-0 -right-1 ring-4 ring-white">3</span>
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
            @auth
            <div class="relative group bg-pink-50 text-pink-600 text-lg rounded-xl w-12 h-12 grid place-items-center cursor-pointer">
                <span class="bg-green-600 font-semibold w-3 h-3 rounded-full text-xs text-white grid place-items-center absolute top-0 right-0 ring-4 ring-white"></span>
                <i class="fa-solid fa-user"></i>
                <ul class="flex flex-col w-36 text-center text-sm  border border-pink-200 py-3 rounded-xl absolute left-0 top-[110%] group-hover:top-full opacity-0 invisible bg-white group-hover:opacity-100 group-hover:visible transition-all delay-100 duration-100">
                    <li class="flex">
                        <a href="#" class="w-full py-2 hover:bg-pink-50 transition-colors duration-200">
                            پروفایل
                        </a>
                    </li>
                    <li class="flex">
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="w-full py-2 hover:bg-pink-50 transition-colors duration-200">
                                خروج
                            </button>
                        </form>
                    </li>
                </ul>
            </div>  
            @else
            <a href="{{ route('login') }}" class="relative group bg-pink-50 text-pink-600 text-lg rounded-xl w-12 h-12 grid place-items-center">
                <span class="bg-red-600 font-semibold w-3 h-3 rounded-full text-xs text-white grid place-items-center absolute top-0 right-0 ring-4 ring-white"></span>
                <i class="fa-solid fa-user"></i>
            </a> 
            @endauth 
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
            <button 
                @click="mobileMenu = false"
                class="fixed top-5 right-4 w-6 h-6 text-red-600 bg-white hover:shadow-sm transition-shadow duration-200 grid place-items-center rounded"
            >
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h4 class="text-center text-lg font-semibold text-rose-600 my-4">تاپکت</h4>
            <form class="flex sm:hidden rounded-xl bg-gray-100 items-center grow md:grow-0 shrink flex-end focus-within:ring focus-within:ring-gray-200 duration-300 mx-4">
                <button class="w-19 h-full w-12 grid place-items-center text-lg text-gray-500">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input type="text" placeholder="جستجو در تاپکت" class="bg-transparent p-3 grow border-none focus:ring-0 text-gray-500"/> 
            </form>
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
                <button 
                    @click="showCart = false"
                    class="fixed top-4 left-4 w-6 h-6 text-red-600 bg-white hover:shadow-sm transition-shadow duration-200 grid place-items-center rounded"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <h4 class="text-center text-sm font-[600] text-teal-600 mb-2">
                    سبد خرید من
                    <span class="font-normal">( 5 )</span>
                </h4>
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
                <button class="bg-green-600 shadow-md hover:shadow-inner duration-300 transition-all text-white w-full py-2 mb-2 rounded-lg active:bg-green-600">ادامه فرآیند</button>
            </div>
        </div>

    </div>
</header>