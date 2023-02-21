<div>
    <div class="category-scrollbar overflow-x-auto whitespace-nowrap max-w-full mt-2 inline-flex gap-4 lg:gap-16 px-2">
        @foreach($productCategories as $category) 
        <a href="{{ route('shop.product.category',$category->slug) }}" class="group flex flex-col items-center text-gray-600 text-center m-auto transition-all duration-200">
            <div class="w-20 h-20 my-2 bg-gradient-to-r transition-all duration-200 from-pink-500 via-red-500 to-yellow-500 p-[2px] rounded-full grid place-items-center ring-offset-2 ring-0 group-hover:ring-2 ring-teal-500">
                <img src="{{ asset($category->img_thumb) }}" alt="" class="object-cover w-full h-full rounded-full">
            </div>
            <div class="max-w-[90px] text-sm truncate">
                {{$category->name}}
            </div>
        </a>
        @endforeach
    </div>
</div>
