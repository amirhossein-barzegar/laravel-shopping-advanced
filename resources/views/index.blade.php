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
@livewire('home.posts-component')
<!-- / Blogs -->
</x-master-layout>