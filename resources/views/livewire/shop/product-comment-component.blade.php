<div 
    class="grid grid-cols-12"
    x-data="{
        modalShow: {{session()->has('success') ? 'true':'false'}}
    }"
>
    @auth
    <form @submit.prevent="modalShow=true" wire:submit.prevent="addProductComment({{$product->id}})" action="" class="mb-4 col-span-12 lg:col-span-6">
        @csrf
        @if($reply_id!=0)
        <div class="flex gap-4 bg-gray-100 p-4 text-sm rounded-lg">
            <div class="flex items-center gap-2 text-gray-700">
                <button wire:click.prevent="resetReplyComment" class="text-red-500 text-xl ml-2">
                    <i class="fa-solid fa-circle-xmark"></i>
                </button>
                <div class="">
                    پاسخ به نظر : 
                    <span class="text-gray-800 font-bold">
                        {{$repliedComment->user->name}}
                    </span>
                </div>
                <div>
                    با موضوع :
                    <span class="text-gray-800 font-bold">{{$repliedComment->title}}</span>
                </div>
            </div>
        </div>
        @endif
        <div class="flex flex-col gap-1 mt-2 ">
            <label for="title" class="text-sm font-medium text-gray-900">عنوان دیدگاه : </label>
            <input type="text" wire:model="title" value="{{ old('title') }}" name="title" id="title" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200" autofocus>
            <x-input-error :messages="$errors->get('title')"/>
        </div>
        <div class="flex flex-col gap-1 mt-2 ">
            <label for="description" class="text-sm font-medium text-gray-900">متن دیدگاه : </label>
            <textarea cols="20" wire:model="description" rows="5" name="description" id="description" class="outline-none border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')"/>
        </div>
        <div class="flex flex-col gap-1 mt-2">
            <button class="flex items-center justify-center text-sm gap-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 outline-none rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-gray-200 transition-all duration-200">ثبت نظر</button>
        </div>
    </form>
    @else
    <div class="text-red-600 col-span-12 text-sm py-2">
        برای نظر دهی باید در سایت ثبت نام کنید!
    </div>
    @endauth
    <div class="grid gap-4 col-span-12">
        @forelse($comments as $comment)
        <div class="relative flex flex-col gap-4 rounded-lg bg-gray-50 border border-gray-300 rounded-lg px-4 py-3">
            <div class="flex gap-4">
                <img src="{{ asset('img/user.jpg') }}" alt="" class="w-20 h-20 rounded-lg object-cover">
                <div class="flex flex-col gap-2">
                    <h4 class="text-md font-bold">
                        {{$comment->title}}
                    </h4>
                    <p class="text-sm font-gray-700 leading-relaxed">
                        {{$comment->description}}
                        این محصول برخلاف انچه که ازش انتظار داشتم خیلی ضعیف بوده و کیفیت دوربین قابل توجهی ندارد!
                        این محصول برخلاف انچه که ازش انتظار داشتم خیلی ضعیف بوده و کیفیت دوربین قابل توجهی ندارد!
                    </p>
                </div>
                <a href="#form" wire:click="setReplyId('{{$comment->id}}')" class="absolute top-2 left-2 text-slate-600 hover:bg-slate-200 transition-colors duration-300 text-sm rounded-full grid place-items-center w-8 h-8">
                    <i class="fa-solid fa-reply"></i>
                </a>
            </div>
            <div class="text-gray-400 text-xs flex">
                <div class="ml-8">
                    نویسنده: {{$comment->user->name}}
                </div>
                <div class="ml-8">
                    در تاریخ: 22 بهمن 1400
                </div>
            </div>
            @foreach($comment->replies as $reply)
            <div class="relative flex flex-col gap-4 rounded-lg bg-gray-50 border border-gray-300 rounded-lg px-4 py-3">
                <div class="flex gap-4">
                    <img src="{{ asset('img/user.jpg') }}" alt="" class="w-20 h-20 rounded-lg object-cover">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-md font-bold">
                            {{$reply->title}}
                        </h4>
                        <p class="text-sm font-gray-700 leading-relaxed">
                            {{$reply->description}}
                        </p>
                    </div>
                    <a href="#form" wire:click="setReplyId('{{$reply->id}}')" class="absolute top-2 left-2 text-slate-600 hover:bg-slate-200 transition-colors duration-300 text-sm rounded-full grid place-items-center w-8 h-8">
                        <i class="fa-solid fa-reply"></i>
                    </a>
                </div>
                <div class="text-gray-400 text-xs flex">
                    <div class="ml-8">
                        نویسنده: {{$reply->user->name}}
                    </div>
                    <div class="ml-8">
                        در تاریخ: 22 بهمن 1400
                    </div>
                </div>
                @foreach($reply->replies as $reply)
                <div class="relative flex flex-col gap-4 rounded-lg bg-gray-50 border border-gray-300 rounded-lg px-4 py-3">
                    <div class="flex gap-4">
                        <img src="{{ asset('img/user.jpg') }}" alt="" class="w-20 h-20 rounded-lg object-cover">
                        <div class="flex flex-col gap-2">
                            <h4 class="text-md font-bold">
                                {{$reply->title}}
                            </h4>
                            <p class="text-sm font-gray-700 leading-relaxed">
                                {{$reply->description}}
                            </p>
                        </div>
                        <a href="#form" wire:click="setReplyId('{{$reply->id}}')" class="absolute top-2 left-2 text-slate-600 hover:bg-slate-200 transition-colors duration-300 text-sm rounded-full grid place-items-center w-8 h-8">
                            <i class="fa-solid fa-reply"></i>
                        </a>
                    </div>
                    <div class="text-gray-400 text-xs flex">
                        <div class="ml-8">
                            نویسنده: {{$reply->user->name}}
                        </div>
                        <div class="ml-8">
                            در تاریخ: 22 بهمن 1400
                        </div>
                    </div>
                    @foreach($reply->replies as $reply)
                    <div class="relative flex flex-col gap-4 rounded-lg bg-gray-50 border border-gray-300 rounded-lg px-4 py-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('img/user.jpg') }}" alt="" class="w-20 h-20 rounded-lg object-cover">
                            <div class="flex flex-col gap-2">
                                <h4 class="text-md font-bold">
                                    {{$reply->title}}
                                </h4>
                                <p class="text-sm font-gray-700 leading-relaxed">
                                    {{$reply->description}}
                                </p>
                            </div>
                        </div>
                        <div class="text-gray-400 text-xs flex">
                            <div class="ml-8">
                                نویسنده: {{$reply->user->name}}
                            </div>
                            <div class="ml-8">
                                در تاریخ: 22 بهمن 1400
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        @empty
        @endforelse
        <!-- <div class="relative flex flex-col gap-4 rounded-lg bg-gray-50 border border-gray-300 rounded-lg px-4 py-3">
            <div class="flex gap-4">
                <img src="{{ asset('img/user.jpg') }}" alt="" class="w-20 h-20 rounded-lg object-cover">
                <div class="flex flex-col gap-2">
                    <h4 class="text-md font-bold">
                        عنوان تستی برای محصول
                    </h4>
                    <p class="text-sm font-gray-700 leading-relaxed">
                        این محصول برخلاف انچه که ازش انتظار داشتم خیلی ضعیف بوده و کیفیت دوربین قابل توجهی ندارد!
                        این محصول برخلاف انچه که ازش انتظار داشتم خیلی ضعیف بوده و کیفیت دوربین قابل توجهی ندارد!
                    </p>
                </div>
                <button class="absolute top-2 left-2 text-slate-600 hover:bg-slate-200 transition-colors duration-300 text-sm rounded-full grid place-items-center w-8 h-8">
                    <i class="fa-solid fa-reply"></i>
                </button>
            </div>
            <div class="text-gray-400 text-xs flex">
                <div class="ml-8">
                    نویسنده: مصطفی کرمی
                </div>
                <div class="ml-8">
                    در تاریخ: 22 بهمن 1400
                </div>
            </div>
        </div> -->
        <x-modal-message trigger="modalShow">
            {{session()->get('success')}}
        </x-modal-message>
    </div>
</div>
