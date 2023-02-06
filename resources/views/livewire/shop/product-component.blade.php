<div>
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
                                    <div class="text-gray-400 text-sm">
                                        {{$product->name}}
                                    </div>
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
                    <img src="{{ asset($product->img_thumb) }}" xoriginal="{{ asset($product->img_thumb) }}"  class="image_preview h-auto max-w-full rounded-lg"/>    
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
                    <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset($product->img_thumb) }}"  xpreview="{{ asset($product->img_thumb) }}" title="The description goes here"></a>
                    @if($img_gallery)
                        @foreach($img_gallery as $img)
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset($img) }}" title="The description goes here"></a>
                        <!-- <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_3.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_4.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_5.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_6.jpg') }}" title="The description goes here"></a> -->
                        @endforeach
                    @endif
                </div>
                <div id="lensProduct"></div>
            </div>
            <!-- output window end -->
        </div>
        <div class="col-span-4">
            <h1 class="relative font-bold text-2xl text-gray-800 before:content-[''] before:w-3/4 before:h-[1px] before:bg-gray-200 before:absolute before:-bottom-4 before:right-0">
                {{$product->name}}
            </h1>
        </div>
        <div class="col-span-3">
            fdsafsdfds
        </div>
    </div>
    <!-- / Single Product -->
</div>
