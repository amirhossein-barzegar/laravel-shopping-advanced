<x-guest-layout>
<main class="flex flex-col min-h-screen justify-center items-center">
    <div class="w-96 bg-white m-auto shadow rounded-xl">
    <a href="{{ url('/') }}">
        <img src="{{asset('img/logo.png')}}" alt="" class="w-20 h-16 object-cover text-center mx-auto py-4">
    </a>    
        <form action="{{ route('login') }}" method="post" class="flex flex-col py-2 px-4 gap-2">
            @csrf
            <h3 class="text-2xl text-center text-blue-900">خوش برگشتید!</h3>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="text" name="email" id="form1" placeholder="پست الکترونیک شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl" required autofocus>
                    <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-envelope"></i></label>
                </div>
                <x-input-error class="mt-1" :messages="$errors->get('email')"></x-input-error>
            </div>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="text" name="password" id="form1" placeholder="کلمه عبور شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl" required>
                    <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-lock"></i></label>
                </div>
                <x-input-error class="mt-1" :messages="$errors->get('password')"></x-input-error>
            </div>
            
            <div>
                <label for="remember_mi" class="text-gray-600 cursor-pointer select-none">
                    <input type="checkbox" id="remember_mi" name="remember" class="rounded border-gray-100 ml-1 focus:ring-blue-300 transition-all duration-200">
                    <span class="text-sm">مرا به خاطر بسپار</span>
                </label>
            </div>
            <button class="bg-blue-500 text-white rounded-xl py-2">ورود</button>
            <p class="text-sm text-gray-400 mt-2 mb-1">هنوز ثبت نام نکرده اید؟ <a href="{{ route('register') }}" class="text-blue-500">ثبت نام کنید!</a></p>
            @if(Route::has('password.request'))
            <p class="text-sm text-gray-400 mb-1">کلمه عبود خود را بخاطر ندارید؟ <a href="{{ route('password.request') }}" class="text-blue-500">بازیابی کلمه عبور</a></p>
            @endif
        </form>
    </div>
</main>
</x-guest-layout>
