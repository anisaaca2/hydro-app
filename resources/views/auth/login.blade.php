<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-jakarta">

    <div>
        <div class="min-h-screen flex flex-col items-center justify-center px-4 bg-hydro-green">
          <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
            <svg class="w-80 ml-20"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 49.62 89.02"
                <defs>
                    <style>.cls-1{fill:#fff;}</style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <path class="cls-1" d="M43.27,38H28.77V17.22c0-5.11,2.63-8,7.87-8h4A10.14,10.14,0,0,0,27.49.47q-7.08,3.78-7.07,15.05V38h-.57Q8.57,38,8.57,26.5V0H0V27A29.16,29.16,0,0,0,1.57,37.06a.8.8,0,0,1-.76,1.07h0a.81.81,0,0,0-.81.81V62.37C0,80.16,12.48,89,24.81,89s24.81-8.86,24.81-26.65V48.62h0V44.33A6.34,6.34,0,0,0,43.27,38ZM41,61.66C41,72.86,33,78.32,24.81,78.32S8.58,72.86,8.58,61.66v-13H41Z"/>
                        <path class="cls-1" d="M38.31,16.66,28.77,28,20.42,38V10.14a10.13,10.13,0,0,1,20.22-.93A10.17,10.17,0,0,1,38.31,16.66Z"/>
                    </g>
                </g>
            </svg>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="max-w-md md:ml-auto w-full bg-white rounded-xl p-8">
                @csrf

                <h3 class="text-black text-center text-3xl font-bold mb-12">
                    Log In
                </h3>

                <div class="space-y-4">
                    <!-- Email Address -->
                    <div>
                        <x-text-input
                            name="email"
                            id="email"
                            type="email"
                            autocomplete="email"
                            required
                            class="bg-white w-full text-sm text-gray-800 px-4 py-3.5 rounded-md focus:border-hydro-green focus:bg-white"
                            placeholder="Email address"
                            :value="old('email')"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-text-input
                            name="password"
                            id="password"
                            type="password"
                            autocomplete="current-password"
                            required
                            class="bg-white w-full text-sm text-gray-800 px-4 py-3.5 rounded-md focus:border-hydro-green focus:bg-transparent"
                            placeholder="Password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center">
                            <input
                                id="remember_me"
                                name="remember"
                                type="checkbox"
                                class="h-4 w-4 text-hydro-green focus:ring-hydro-green border-gray-300 rounded"
                            />
                            <label for="remember_me" class="ml-3 block text-sm text-gray-800">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="text-hydro-green hover:text-green-700 font-semibold">
                                    Forgot your password?
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="!mt-8">
                    <x-primary-button class="w-full py-2.5 px-4 text-lg font-bold rounded text-white bg-hydro-green hover:bg-green-700 focus:outline-none justify-center">
                        Log in
                    </x-primary-button>
                </div>

                <p class="mt-12 text-slate-500 text-center text-sm">
                    Baru di HYDRO? <a href="{{ route('register') }}" class="text-hydro-green font-semibold">Daftar</a>
                </p>
            </form>
          </div>
        </div>
      </div>
</body>
</html>
