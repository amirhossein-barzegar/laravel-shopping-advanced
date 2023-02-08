<x-admin-layout>
    <!-- BreadCrumb -->
    <div class="container mx-auto p-4 grid grid-cols-4 gap-4">
        <div class="col-span-4">
            <ul>
                <li class="flex gap-4 text-sm items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 text-sm">فروشگاه اینترنتی دیجی کالا</a>
                    <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                    <ul>
                        <li class="flex gap-4 text-sm items-center">
                            <a href="{{ route('product.index') }}" class="text-gray-600 text-sm">همه محصولات</a>
                            <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                            <ul>
                                <li>
                                    <div class="text-gray-400 text-sm">افزودن محصول</div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- / BreadCrumb -->
    <div class="container mx-auto grid grid-cols-12">
        <div class="col-start-4 col-span-6 bg-white px-4 py-3 border border-gray-100 rounded">
            <div class="flex flex-col justify-between items-center gap-2 px-4 py-3 sm:flex-row">
                <div class="text-lg text-center sm:text-right font-semibold text-gray-800 bg-white">
                    افزودن محصول جدید 
                    <p class="mt-1 text-sm font-normal text-gray-500">
                        محصول مورد نظر خود را در اینجا ثبت کنید
                    </p>
                </div>
                <a href="{{ route('product.create') }}" class="flex items-center justify-center gap-2 bg-blue-500 hover:bg-blue-600 transition-colors duration-150 text-white text-xs px-4 py-2 rounded-lg">
                    <i class="fa-solid fa-plus"></i>
                    <span>افزودن محصول جدید</span>
                </a>
            </div>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="name" class="text-sm font-medium text-gray-900">نام محصول : </label>
                    <input type="text" value="{{ old('name') }}" name="name" id="name" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" required autofocus>
                    <x-input-error :messages="$errors->get('name')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="excerpt" class="text-sm font-medium text-gray-900">توضیح کوتاه : </label>
                    <input type="text" value="{{ old('excerpt') }}" name="excerpt" id="excerpt" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                    <x-input-error :messages="$errors->get('excerpt')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="description" class="text-sm font-medium text-gray-900">توضیحات کامل : </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">{{ old('description') }}</textarea>
                    <x-input-error :messages="$errors->get('description')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="price" class="text-sm font-medium text-gray-900">قیمت : </label>
                    <input type="number" value="{{ old('price') }}" name="price" id="price" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" required>
                    <x-input-error :messages="$errors->get('price')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="discount" class="text-sm font-medium text-gray-900">درصد تخفیف : </label>
                    <select id="discount" name="discount_id" class="px-4 py-2 outline-none bg-left bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                        <option value selected>بدون تخفیف</option>
                    @foreach($discounts as $discount)
                        <option value="{{$discount->id}}">{{ $discount->amount }} - {{$discount->description ? substr($discount->description,0,50) : ''}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="qty" class="text-sm font-medium text-gray-900">تعداد : </label>
                    <input type="number" value="{{ old('quantity') }}" name="quantity" id="qty" placeholder="پیشفرض: 0" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                    <x-input-error :messages="$errors->get('quantity')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="stock_limit" class="text-sm font-medium text-gray-900">تعداد خرید یکجا : </label>
                    <input type="number" value="{{ old('stock_limit') }}" name="stock_limit" id="stock_limit" placeholder="پیشفرض: 10" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                    <x-input-error :messages="$errors->get('stock_limit')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="img_thumb" class="text-sm font-medium text-gray-900">تصویر شاخص محصول : </label>
                    <input type="file" value="{{ old('img_thumb') }}" name="img_thumb" id="img_thumb" class="outline-none py-2 text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" aria-describedby="file_input_help">
                    <x-input-error :messages="$errors->get('img_thumb')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="img_gallery" class="text-sm font-medium text-gray-900">گالری تصاویر محصول : </label>
                    <input type="file" value="{{ old('img_gallery') }}" multiple name="img_gallery[]" id="img_gallery" class="outline-none py-2 text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" aria-describedby="file_input_help">
                    <x-input-error :messages="$errors->get('img_gallery')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="category" class="text-sm font-medium text-gray-900">
                        دسته بندی محصول : 
                    </label>
                    <select id="category" name="category_id" class="px-4 py-2 outline-none bg-left bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                        <option value selected>بدون دسته بندی</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="brand"class="text-sm font-medium text-gray-900">
                         برند محصول : 
                    </label>
                    <select id="brand" name="brand_id" class="px-4 py-2 outline-none bg-left bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                        <option value selected>بدون برند</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 mt-2">
                    <button class="flex items-center justify-center text-sm gap-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 outline-none rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">ایجاد محصول</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>