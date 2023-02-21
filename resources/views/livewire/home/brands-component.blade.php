<div class="w-full flex">
    <div class="container mx-auto">
        <div class="flex justify-between items-center px-4 py-3">
            <div class="flex text-gray-600 items-center px-4 py-2">
                <i class="fa-solid fa-icons text-4xl text-gray-500"></i>
                <h2 class="text-xl font-bold mr-4">برند های فروشگاه</h2>
            </div>
        </div>
        <!-- Products for Mobile -->
        <div class="flex items-center overflow-x-auto md:overflow-x-hidden md:hidden gap-3 px-3">
            @foreach($brands as $brand)
                <a  wire:key="{{$brand->id}}" class="swiper-slide bg-white rounded-lg p-3 w-40 min-h-80 h-fit shrink-0">
                    <figure class="relative">
                        <img src="{{asset($brand->img_thumb)}}" alt="" class="rounded-lg w-36 h-32 object-contain my-1">
                    </figure>
                    <h3 class="text-sm font-bold text-gray-600 tracking-tight truncate max-w-full">{{$brand->name}}</h3>
                </a>
            @endforeach
        </div>
        <!-- / Products for Mobile -->

        <!-- Products for Any other -->
        <div class="hidden md:block px-4">
            <div wire:ignore.self class="swiper relative" id="brandsSlider">
                <div wire:ignore.self class="swiper-wrapper">
                    @foreach($brands as $brand)
                        <a href="{{ asset($brand->slug) }}"  wire:key="{{$brand->id}}" class="swiper-slide text-center bg-white rounded-lg p-3 w-40 min-h-80 h-fit shrink-0">
                            <figure class="relative">
                                <img src="{{asset($brand->img_thumb)}}" alt="" class="rounded-lg w-36 h-32 object-contain my-1 mx-auto">
                            </figure>
                            <h3 class="text-sm font-bold text-gray-600 tracking-tight truncate max-w-full">{{$brand->name}}</h3>
                        </a>
                    @endforeach
                </div>
                <div class="absolute z-50 top-1/3 left-4 bg-white border border-gray-300 rounded-full w-14 h-14 grid place-items-center text-xl text-gray-500" id="brandsSliderBtnLeft">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="absolute z-50 top-1/3 right-4 bg-white border border-gray-300 rounded-full w-14 h-14 grid place-items-center text-xl text-gray-500" id="brandsSliderBtnRight">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <!-- / Products for Any other -->
    </div>
</div>