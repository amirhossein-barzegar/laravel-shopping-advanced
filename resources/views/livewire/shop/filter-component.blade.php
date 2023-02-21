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
            @click.self="showBrandFilter = !showBrandFilter"
            class="flex flex-col justify-between py-3 border-b border-gray-200 cursor-pointer">
                <div @click="showBrandFilter = !showBrandFilter" class="flex justify-between font-bold">
                    برند
                    <i x-bind:class="{'rotate-180':showBrandFilter}" class="fa-solid fa-sort-down duration-300 transition-all"></i>
                </div>
                <ul
                x-cloak
                x-show="showBrandFilter" 
                x-transition.duration.500ms
                class="pt-2" 
                >
                    @forelse($brands as $brand) 
                    <li class="py-1" wire:key="{{$brand->id}}">
                        <label for="brand{{$brand->id}}" class="flex gap-2 items-center">
                            <input wire:model="brandFilter.{{$brand->id}}" name="brands[]" type="checkbox" value="{{$brand->id}}" id="brand{{$brand->id}}" class="rounded-md">
                            <div class="text-gray-600">{{$brand->name}}</div>
                        </label>
                    </li>
                    @empty
                    هیچ برندی یافت نشد!
                    @endforelse
                    <!-- <li class="py-1">
                        <label for="check2" class="flex gap-2 items-center">
                            <input wire:model="brandFilter" type="checkbox" name="brand" id="check2" class="rounded-md">
                            <div class="text-gray-600">شیائومی</div>
                        </label>
                    </li>
                    <li class="py-1">
                        <label for="check3" class="flex gap-2 items-center">
                            <input wire:model="brandFilter" type="checkbox" name="brand" id="check3" class="rounded-md">
                            <div class="text-gray-600">نوکیا</div>
                        </label>
                    </li> -->
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
                <div class="font-bold">
                    <!-- Toggle B -->
                    <div>
                        <label 
                        for="toggle" 
                        class="flex w-full justify-between items-center cursor-pointer"
                        >
                            <span class="select-none">فقط کالا های موجود</span>
                            <!-- toggle -->
                            <div class="relative">
                                <!-- input -->
                                <input wire:model="onlyInStock" @click="showStockFilter = !showStockFilter" type="checkbox" id="toggle" class="sr-only">
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