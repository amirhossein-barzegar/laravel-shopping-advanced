<x-admin-layout>
<div x-data="{
    modalShow: {{session()->has('success') ? 'true':'false'}}
}">
    <div class="container mx-auto px-4">
        <!-- BreadCrumb -->
        <div class="container mx-auto p-4 grid grid-cols-4 gap-4">
            <div class="col-span-4">
                <ul>
                    <div x-text="showModal"></div>
                    <li class="flex gap-4 text-sm items-center">
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-600 text-sm">فروشگاه اینترنتی دیجی کالا</a>
                        <small class="text-gray-500 text-xs"><i class="fa-solid fa-chevron-left"></i></small> 
                        <ul>
                            <li class="flex gap-4 text-sm items-center">
                                <div class="text-gray-400 text-sm">
                                    همه پست ها
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- / BreadCrumb -->
        <div class="bg-white border border-gray-100 shadow">
            <div class="flex flex-col justify-between items-center gap-2 px-4 py-3 sm:flex-row">
                <div class="text-lg text-center sm:text-right font-semibold text-gray-800 bg-white">
                    همه پست ها
                    <p class="mt-1 text-sm font-normal text-gray-500">
                        نمای کلی از تمام پست ها مشاهده کنید.
                    </p>
                </div>
                <a href="{{ route('post.create') }}" class="flex items-center justify-center gap-2 bg-blue-500 hover:bg-blue-600 transition-colors duration-150 text-white text-xs px-4 py-2 rounded-lg">
                    <i class="fa-solid fa-plus"></i>
                    <span>افزودن پست جدید</span>
                </a>
            </div>
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                عنوان پست
                            </th>
                            <th scope="col" class="px-6 py-3">
                                توضیح کوتاه
                            </th>
                            <th scope="col" class="px-6 py-3">
                                نویسنده
                            </th>
                            <th scope="col" class="px-6 py-3">
                                دسته بندی
                            </th>
                            <th scope="col" class="px-6 py-3">
                                بازدید
                            </th>
                            <th scope="col" class="px-6 py-3">
                                عملیات
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr class="bg-white {{$loop->last ? '': 'border-b'}}">
                            <th scope="row" class="max-w-[120px] truncate px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$post->title}}
                            </th>
                            <td class="px-6 py-4 max-w-[120px] truncate">
                                {{$post->excerpt}}
                            </td>
                            <td class="px-6 py-4">
                                {{$post->author->name}}
                            </td>
                            <td class="px-6 py-4 max-w-[120px] truncate">
                                {{$post->category->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$post->views}}
                            </td>
                            <td class="px-6 py-4 text-right flex gap-2 justify-center">
                                <a href="{{ route('post.edit',$post->id) }}" class="font-medium bg-yellow-500 w-6 h-6 grid place-items-center rounded shadow-sm hover:bg-yellow-600 transition-colors duration-150 text-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button @click="showModal=true" class="font-medium bg-red-500 w-6 h-6 grid place-items-center rounded shadow-sm hover:bg-red-600 transition-colors duration-150 text-white">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                                <a href="#" class="font-medium bg-blue-500 w-6 h-6 grid place-items-center rounded shadow-sm hover:bg-blue-600 transition-colors duration-150 text-white">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty 
                        <tr>
                            <td>
                                هیچ پستی یافت نشد
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <x-modal-message trigger="modalShow">
        {{session()->get('success')}}
    </x-modal-message>
    @if(session()->has('success')) 
    @endif
</div>
</x-admin-layout>