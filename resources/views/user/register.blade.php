<x-guest-layout>
<main class="flex flex-col min-h-screen justify-center items-center">
    <div class="w-96 bg-white m-auto shadow rounded-xl">
            <a href="{{ url('/') }}">
                <img src="{{asset('img/logo.png')}}" alt="" class="w-20 h-16 object-contain text-center mx-auto mt-4 mb-2">
            </a>    
            @if($errors->count() > 0 )
            @foreach($errors as $error)
                {{$error}}
            @endforeach
        @endif
        <form action="{{ route('register') }}" method="post" class="flex flex-col py-2 px-4 gap-2">
            @csrf
            <h3 class="text-2xl text-center text-blue-900">خوش آمدید! ثبت نام کنید</h3>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="text" name="name" id="form1" placeholder="نام شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl" autofocus required>
                    <label for="form1" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-user"></i></label>
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-1"/>
            </div>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="email" name="email" id="form2" placeholder="پست الکترونیک شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl" required>
                    <label for="form2" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-envelope"></i></label>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="password" name="password" id="form3" placeholder="کلمه عبور شما" class="grow shrink border-none focus:ring-0 text-left rounded-xl" required>
                    <label for="form3" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-lock"></i></label>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>
            <div class="mt-1">
                <div class="border-2 border-gray-100 flex items-center rounded-xl focus-within:ring-2 focus-within:ring-blue-300 transition-all duration-200">
                    <input type="password" name="password_confirmation" id="form4" placeholder="تکرار کلمه عبور" class="grow shrink border-none focus:ring-0 text-left rounded-xl" required>
                    <label for="form4" class="px-3 text-blue-400 grid place-items-center"><i class="fa-solid fa-lock"></i></label>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>
            <button class="bg-blue-500 text-white rounded-xl py-2">ثبت نام</button>
            <p class="text-sm text-gray-400 mb-1">قبلاً ثبت نام کرده اید؟ <a href="{{ route('login') }}" class="text-blue-500">وارد شوید!</a></p>
        </form>
    </div>
</main>
</x-guest-layout>
