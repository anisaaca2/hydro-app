<nav class="bg-hydro-green text-white px-4 py-3" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center mb-4">
        <a href="#">
            <span class="[&>svg]:h-5 [&>svg]:w-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 448 512">
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </span>
        </a>

        <a href="#">
            <span class="[&>svg]:h-5 [&>svg]:w-5">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 512 512">
                    <path
                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3l58.3 0c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24l0-13.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1l-58.3 0c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/>
                </svg>
            </span>
        </a>
    </div>

    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-xl font-bold">
            <img src="{{ asset('assets/tipografi3.png') }}" alt="" class="w-48">
        </a>

        {{-- Search Bar --}}

        <form class="flex items-center max-w-screen mx-auto bg-white rounded-full overflow-hidden">
            <!-- Search Input -->
            <div class="relative flex-grow">
                <input
                    type="text"
                    id="search"
                    class="border-none text-gray-700 text-sm w-full px-4 py-2 bg-transparent focus:outline-none focus:ring-0"
                    placeholder="Cari Produk Hidroponik">
            </div>

            <!-- Search Button -->
            <button
                type="submit"
                class="px-4 py-2 text-sm font-medium text-hydro-green focus:text-green-700 transition-all duration-300">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10.5 18A7.5 7.5 0 1 1 18 10.5 7.5 7.5 0 0 1 10.5 18z"/>
                </svg>
            </button>
        </form>

        <!-- Menu Toggle for Mobile -->
        <div class="lg:hidden">
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex space-x-4">
            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        @if (auth()->check())
                                        <div class="relative">
                                            <button class="flex items-center focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </button>

                                            {{-- Dropdown --}}
                                            <div class="z-10 bg-white divide-y divide-gray-500 rounded shadow-lg w-44">
                                                <ul class="text-sm py-2 text-gray-700">
                                                    <li>
                                                        @if (auth()->user()->role === 'admin')
                                                            <a class="block px-4 py-2 hover:bg-gray-300" href="#">Dashboard Admin</a>
                                                        @elseif (auth()->user()->role === 'seller')
                                                            <a class="block px-4 py-2 hover:bg-gray-300" href="{{ route('profile.penjual') }}">Profil</a>
                                                        @elseif (auth()->user()->role === 'buyer')
                                                            <a class="block px-4 py-2 hover:bg-gray-300" href="{{ route('profile.penjual') }}">Profil</a>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <form class="block px-4 py-2 hover:bg-gray-300" id="logout-form" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button type="submit">Log Out</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/50 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
        </div>

    </div>

    <!-- Mobile Menu -->

    <div x-cloak x-show="openUserMenu"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
    <ul class="space-y-4">
        <li>
            @if (auth()->check())
                @if (auth()->user()->role === 'admin')
                    <a href="#">Dashboard Admin</a>
                @elseif (auth()->user()->role === 'penjual')
                    <a href="#">Hydro Seller Center</a>
                @elseif (auth()->user()->role === 'pembeli')
                    <a href="#">Profil Pembeli</a>
                @endif
            @else
                <!-- Konten alternatif jika pengguna tidak login -->
                <a href="{{ route('login') }}">Login</a>
            @endif
        </li>
        <li>
            @if (auth()->check())
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Log Out
                </a>
            @endif
        </li>
    </ul>
</div>

</nav>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js"></script>

