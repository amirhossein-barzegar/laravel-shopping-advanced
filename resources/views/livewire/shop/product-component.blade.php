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
        <div class="col-span-12 md:col-span-5">
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
                        @endforeach
                        <!-- <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_3.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_4.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_5.jpg') }}" title="The description goes here"></a>
                        <a href=""><img class="prd_img_list rounded-xl my-4 mx-2" width="90" src="{{ asset('img/products/digital_6.jpg') }}" title="The description goes here"></a> -->
                    @endif
                </div>
                <div id="lensProduct"></div>
            </div>
            <!-- output window end -->
        </div>
        <div class="col-span-12 md:col-span-6 lg:col-span-4">
            <h1 class="relative w-fit mb-6 font-bold text-2xl text-gray-800 before:content-[''] before:w-3/4 before:h-[1px] before:bg-gray-200 before:absolute before:-bottom-4 before:right-0">
                {{$product->name}}
            </h1>
            <div>
                {{$product->excerpt}}
            </div>
        </div>
        <div class="col-span-12 lg:col-span-3 bg-gray-50 border border-gray-200 rounded-lg p-4 h-fit">
            <div class="border-b border-gray-200 text-slate-700 py-2">
                <div class="">
                    <div class="text-xl font-bold">
                        فروشنده
                    </div>
                    <div class="py-2">
                        {{$product->seller->name}}
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-200 text-slate-700 py-2">
                <div class="">
                    <div class="text-xl flex items-center gap-4 py-4">
                        <i class="fa-regular fa-floppy-disk text-2xl text-teal-500"></i>
                        موجود در انبار
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center">
                <div class="text-md line-through text-left py-1 ml-6 text-gray-400 py-4">
                    2,500,000
                </div>
                <div class="bg-red-500 px-2 py-1 rounded-full text-md font-bold w-fit text-white">
                    20%
                </div>
            </div>
            <div class="text-2xl font-[500] tracking-tight text-gray-600 text-left">
                2,000,000 <span class="tracking-[-0.1em] text-lg">تومان</span>
            </div>
            <button class="bg-rose-500 active:bg-rose-600 transition-colors duration-200 w-full rounded-xl text-white py-3 mt-2">افزودن به سبد خرید</button>
        </div>
        <div 
            x-data="{
                triggerTab: 'comments'
            }"
            class="bg-white border-gray-100 rounded-lg col-span-12 p-4">
            <div>
                <button
                    @click="triggerTab = 'description'" 
                    :class="{'bg-blue-600 hover:bg-blue-700 !text-white': triggerTab=='description'}"
                    class="text-blue-700 transition-colors duration-200 rounded font-normal px-8 py-3">
                    توضیحات بیشتر
                </button>
                <button
                    id="form"
                    @click="triggerTab = 'comments'" 
                    :class="{'bg-blue-600 !text-white': triggerTab=='comments'}"
                    class="text-blue-700 transition-colors duration-200 rounded font-normal px-8 py-3">
                    نظرات کاربران
                </button>
                <button
                    @click="triggerTab = 'rating'" 
                    :class="{'bg-blue-600 !text-white': triggerTab=='rating'}"
                    class="text-blue-700 transition-colors duration-200 rounded font-normal px-8 py-3">
                    امتیاز محصول
                </button>
            </div>
            <div 
                x-cloak
                x-show="triggerTab=='description'"
                class="px-4 py-4"
            >
                {{$product->description}}
            </div>
            <div 
                x-cloak
                x-show="triggerTab=='comments'"
                class="px-4 py-4"
            >
                @livewire('shop.product-comment-component', ['product' => $product])
            </div>
            <div 
                x-cloak
                x-show="triggerTab=='rating'"
                class="px-4 py-4"
            >
rating
            </div>
        </div>
    </div>
    <!-- / Single Product -->
</div>
