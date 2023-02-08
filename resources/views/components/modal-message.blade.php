@props([
        'trigger',
    ])
<div>
    <div 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="{{$trigger}}=false" 
        x-show="{{$trigger}}" 
        x-cloak
        class="flex w-full min-h-screen bg-gray-900 bg-opacity-50 fixed top-0 left-0 bottom-0 right-0"
    >
        <div 
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="scale-50"
            x-transition:enter-end="scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-50"
            x-show="{{$trigger}}" 
            x-cloak
            class="bg-white max-w-md w-full m-auto rounded-2xl p-8 text-center"
        >
            <div class=" w-24 animate-pulse h-24 rounded-full border-4 border-green-200 mx-auto grid place-items-center text-green-600 text-7xl">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="text-2xl text-gray-800 font-bold pt-4 pb-2">
                {{$slot}}
            </div>
            <p class="text-gray-600 pt-2 pb-4">
                برای مشاهده به فروشگاه بروید.
            </p>
            <button @click="{{$trigger}} = false" class="px-8 py-2 rounded-lg bg-blue-700 active:bg-blue-600 text-white">باشه</button>
        </div>
    </div>
</div>