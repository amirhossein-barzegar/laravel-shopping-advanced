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
                            <a href="{{ route('post-category.index') }}" class="text-gray-600 text-sm">همه دسته بندی های پست</a>
                            <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                            <ul>
                                <li>
                                    <div class="text-gray-400 text-sm">افزودن دسته بندی پست</div>
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
                    افزودن دسته بندی جدید 
                    <p class="mt-1 text-sm font-normal text-gray-500">
                    دسته بندی مورد نظر خود را در اینجا ثبت کنید
                    </p>
                </div>
            </div>
            <form action="{{ route('product-category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="name" class="text-sm font-medium text-gray-900">نام دسته بندی : </label>
                    <input type="text" value="{{ old('name') }}" name="name" id="name" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" required autofocus>
                    <x-input-error :messages="$errors->get('name')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="description" class="text-sm font-medium text-gray-900">توضیحات کامل : </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">{{ old('description') }}</textarea>
                    <x-input-error :messages="$errors->get('description')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="slug" class="text-sm font-medium text-gray-900">مسیر دسته بندی : </label>
                    <input type="text" value="{{ old('slug') }}" name="slug" id="slug" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" required>
                    <x-input-error :messages="$errors->get('slug')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="img_thumb" class="text-sm font-medium text-gray-900">تصویر شاخص دسته بندی : </label>
                    <input type="file" value="{{ old('img_thumb') }}" name="img_thumb" id="img_thumb" class="outline-none py-2 text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" aria-describedby="file_input_help">
                    <x-input-error :messages="$errors->get('img_thumb')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="category" class="text-sm font-medium text-gray-900">
                        والد دسته بندی : 
                    </label>
                    <select id="category" name="parent_id" class="px-4 py-2 outline-none bg-left bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                        <option value selected>بدون والد</option>
                    @foreach($postCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 mt-2">
                    <button class="flex items-center justify-center text-sm gap-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 outline-none rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">ایجاد دسته بندی</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>