<header 
    x-data="{
        mobileMenu: false,
        showCart: false,
    }"
    class="flex bg-white shadow fixed top-0 left-0 right-0 z-10000"
>
    <div class="container mx-auto px-3 py-2 flex items-center md:justify-between">
        <div class="hidden lg:flex items-center">
            <a href="{{url('/')}}">
                <img src="{{asset('img/logo.png')}}" alt="" class="h-12 w-28 px-4 object-contain">
            </a>
            <nav>
                <ul class="flex items-center">
                    <li><a href="{{ route('home') }}" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">خانه</a></li>
                    <li><a href="{{ route('shop') }}" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">فروشگاه</a></li>
                    <li><a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-800 transition-all duration-200">مقالات</a></li>
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
                <span class="animate-bounce bg-rose-500 font-semibold w-5 h-5 rounded-full text-xs text-white grid place-items-center absolute -top-0 -right-1 ring-4 ring-white">
                    @livewire('shop.cart-counter')
                </span>
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
            @auth
            <div class="relative group bg-pink-50 text-pink-600 text-lg rounded-xl w-12 h-12 grid place-items-center cursor-pointer">
                <span class="bg-green-600 font-semibold w-3 h-3 rounded-full text-xs text-white grid place-items-center absolute top-0 right-0 ring-4 ring-white"></span>
                <i class="fa-solid fa-user"></i>
                <ul class="flex flex-col w-36 text-center text-sm shadow py-3 rounded-xl absolute left-0 top-full opacity-0 invisible bg-white group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    @can('admin_user')
                    <li class="flex">
                        <a href="{{ route('admin.dashboard') }}" class="w-full py-2 hover:bg-pink-50 transition-colors duration-200">
                            داشبورد مدیریت
                        </a>
                    </li>
                    @endcan
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
        class="bg-gray-900 bg-opacity-50 w-full h-full fixed top-0 left-0 right-0"
    >
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
            @livewire('shop.cart-items')
        </div>

    </div>
</header>