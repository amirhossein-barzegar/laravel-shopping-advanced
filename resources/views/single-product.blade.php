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
        <link rel="stylesheet" href="{{asset('css/xzoom.css')}}">
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
                            <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                            <ul>
                                <li class="flex gap-4 text-sm items-center">
                                    <a href="#" class="text-gray-600 text-sm">فروشگاه</a>
                                    <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                                    <ul>
                                        <li>
                                            <div class="text-gray-400 text-sm">ساعت هوشمند مدل T500-Smart watch</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / BreadCrumb -->
            <!-- Single Product -->
            <div class="container mx-auto p-4 grid grid-cols-12 gap-4 pt-0">
                <div class="col-span-5">
                    <!-- output window start -->
                    <div class="relative">
                        <figure class="relative rounded-lg">
                            <img src="{{ asset('img/products/digital_1.jpg') }}" xoriginal="{{ asset('img/products/digital_1.jpg') }}"  class="image_preview h-auto max-w-full rounded-lg"/>    
                            <div class="flex flex-col absolute top-4 right-4 z-50">
                                <button class="group w-8 h-8 m-2 relative grid place-items-center">
                                <i class="fa-regular fa-heart text-lg"></i>
                                    <span class="absolute flex -top-1 right-[200%] whitespace-nowrap w-fit p-3 z-50 bg-gray-800 text-white rounded text-sm opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto group-hover:right-[120%] transition-all duration-200">افزودن به علاقه مندی</span>
                                </button>
                                <button class="group w-8 h-8 m-2 relative grid place-items-center">
                                    <i class="fa-solid fa-share-nodes text-lg" ></i>
                                    <span class="absolute flex -top-1 right-[200%] whitespace-nowrap w-fit p-3 z-50 bg-gray-800 text-white rounded text-sm opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto group-hover:right-[120%] transition-all duration-200">اشتراک گذاری</span>
                                </button>
                                <button class="group w-8 h-8 m-2 relative grid place-items-center">
                                    <i class="fa-regular fa-bell text-lg" ></i>
                                    <span class="absolute flex -top-1 right-[200%] whitespace-nowrap w-fit p-3 z-50 bg-gray-800 text-white rounded text-sm opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto group-hover:right-[120%] transition-all duration-200">اطلاع رسانی شگفت انگیز</span>
                                </button>
                                <button class="group w-8 h-8 m-2 relative grid place-items-center">
                                    <i class="fa-regular fa-rectangle-list text-lg"></i>
                                    <span class="absolute flex -top-1 right-[200%] whitespace-nowrap w-fit p-3 z-50 bg-gray-800 text-white rounded text-sm opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto group-hover:right-[120%] transition-all duration-200">اضافه به لیست</span>
                                </button>
                            </div>
                        </figure>
                        <div class="xzoom-thumbs flex flex-nowrap overflow-auto max-w-full gap-4 grow">
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_1.jpg') }}"  xpreview="{{ asset('img/products/digital_1.jpg') }}" title="The description goes here"></a>
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_2.jpg') }}" title="The description goes here"></a>
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_3.jpg') }}" title="The description goes here"></a>
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_4.jpg') }}" title="The description goes here"></a>
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_5.jpg') }}" title="The description goes here"></a>
                            <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_6.jpg') }}" title="The description goes here"></a>
                        </div>
                        <div id="lensProduct"></div>
                    </div>
                    <!-- output window end -->
                </div>
                <div class="col-span-4">
                    <h1 class="relative font-bold text-2xl text-gray-800 before:content-[''] before:w-3/4 before:h-[1px] before:bg-gray-200 before:absolute before:-bottom-4 before:right-0">ساعت هوشمند مدل T500-Smart watch</h1>
                </div>
                <div class="col-span-3">
                    fdsafsdfds
                </div>
            </div>
            <!-- / Single Product -->
        </main>
        <footer>
            
        </footer>
        <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/price_range_script.js') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/eruda"></script>
        <script src="{{ asset('js/xzoom.js') }}"></script>
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



            /**
             * Product Image slider
             */
            (function ($) {
                $(document).ready(function() {
                    $('.image_preview, .prd_img_list').xzoom({
                        // position:'#lensProduct',
                        tint: '#ffa200',
                        // lensClass:'customLensProduct',
                        fadeOut:true,
                        activeClass:'ring-2 ring-cyan-700',
                        // zoomClass:'product_preview',
                        scroll: false
                    });
                    //Integration with hammer.js
                    var isTouchSupported = 'ontouchstart' in window;
                    if (isTouchSupported) {
                        //If touch device
                        $('.image_preview').each(function(){
                            var xzoom = $(this).data('xzoom');
                            xzoom.eventunbind();
                        });
                        
                        $('.image_preview').each(function() {
                            var xzoom = $(this).data('xzoom');
                            $(this).hammer().on("tap", function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                var s = 1, ls;
                
                                xzoom.eventmove = function(element) {
                                    element.hammer().on('drag', function(event) {
                                        event.pageX = event.gesture.center.pageX;
                                        event.pageY = event.gesture.center.pageY;
                                        xzoom.movezoom(event);
                                        event.gesture.preventDefault();
                                    });
                                }
                
                                xzoom.eventleave = function(element) {
                                    element.hammer().on('tap', function(event) {
                                        xzoom.closezoom();
                                    });
                                }
                                xzoom.openzoom(event);
                            });
                        });

                    }
                });
            })(jQuery);

        </script>
    </body>
</html>
