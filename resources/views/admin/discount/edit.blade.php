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
                            <a href="{{ route('discount.index') }}" class="text-gray-600 text-sm">همه تخفیف ها</a>
                            <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                            <ul>
                                <li>
                                    <div class="text-gray-400 text-sm">افزودن تخفیف</div>
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
                    ویرایش تخفیف 
                    <p class="mt-1 text-sm font-normal text-gray-500">
                    تخفیف مورد نظر خود را در اینجا ویرایش کنید
                    </p>
                </div>
            </div>
            <form action="{{ route('discount.update', $discount->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="amount" class="text-sm font-medium text-gray-900">نام تخفیف : </label>
                    <input type="number" min=0 max=100 value="{{ $discount->amount }}" name="amount" id="amount" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" required autofocus>
                    <x-input-error :messages="$errors->get('amount')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="description" class="text-sm font-medium text-gray-900">توضیحات : </label>
                    <textarea name="description" id="description" cols="30" rows="10" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">{{ $discount->description }}</textarea>
                    <x-input-error :messages="$errors->get('description')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="start_time" class="text-sm font-medium text-gray-900">زمان شروع تخفیف :</label>
                    <input type="datetime-local" value="{{ $discount->start_time }}" name="start_time" id="start_time" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                    <x-input-error :messages="$errors->get('start_time')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2 ">
                    <label for="expire_time" class="text-sm font-medium text-gray-900">زمان انقضا تخفیف : </label>
                    <input type="datetime-local" value="{{ $discount->expire_time }}" name="expire_time" id="expire_time" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">
                    <x-input-error :messages="$errors->get('expire_time')"/>
                </div>
                <div class="flex flex-col gap-1 mt-2">
                    <button class="flex items-center justify-center text-sm gap-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 outline-none rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">ویرایش تخفیف</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>