@props([
        'title' => 'none title'
    ])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <!-- Swipper Slider CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/price_range_script.css')}}">
        <link rel="stylesheet" href="{{asset('css/xzoom.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-zinc-50">
        @include('layouts.admin.partials.header')
        <main class="mt-16">
            {{ $slot }}
        </main>
        @include('layouts.admin.partials.footer')
        @livewireScripts
        <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/price_range_script.js') }}"></script>
        <script src="{{ asset('js/xzoom.js') }}"></script>
        <script>            
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
