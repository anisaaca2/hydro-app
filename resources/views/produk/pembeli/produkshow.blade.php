@extends('layouts.app')

@section('main')
<div class="container mx-auto p-6">
    <!-- Card Produk -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="flex flex-wrap md:flex-nowrap">
            <!-- Gambar Produk -->
            <div class="w-full md:w-1/3">
                @if ($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->name }}" class="w-full h-full object-cover">
                @else
                    <div class="flex items-center justify-center bg-gray-100 w-full h-64 text-gray-400">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            <!-- Informasi Produk -->
            <div class="w-full md:w-2/3 p-6">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $produk->name }}</h2>

                <div class="mb-4">
                    <p class="text-lg font-bold text-gray-800">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-lg font-medium text-gray-800">{{ $produk->stok }} Unit Tersisa</p>
                </div>

                <div class="mb-4">
                    <p class="text-lg font-medium text-gray-800">{{ $produk->ratings->count() }} Penilaian</p>
                </div>

                <div class="mb-4 gap-2 flex">
                    <p class="text-lg font-bold">
                        {{ number_format($produk->ratings->avg('nilai'), 1, ',', '.') }} / 5
                    </p>
                    <div class="flex items-center text-hydro-green">
                        <svg class="w-4 h-4  ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Rating -->
    </div>

    <!-- Deskripsi Produk -->
    <div class="container mt-8 bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Deskripsi Produk</h1>
        <p class="text-gray-600 leading-relaxed">{{ $produk->description }}</p>
    </div>
    <div class="mt-6 p-6 border-t">
        @php
            $userRating = $produk->ratings->where('user_id', auth()->id())->first();
            $currentRating = $userRating ? $userRating->nilai : 0;
        @endphp

        <form action="{{ route('buyer.rating.store', $produk->id) }}" method="POST" id="rating-form">
            @csrf
            <label for="rating" class="block text-sm font-medium text-gray-700">Beri Rating:</label>
            <div class="mt-3 flex items-center gap-2" id="star-rating">
                @for($i = 1; $i <= 5; $i++)
                    <label class="cursor-pointer">
                        <input
                            type="radio"
                            name="rating"
                            value="{{ $i }}"
                            class="hidden star-input"
                            {{ $userRating && $userRating->nilai == $i ? 'checked' : '' }}
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="{{ $currentRating >= $i ? '#0E8743' : 'none' }}"
                            stroke=""
                            class="w-8 h-8 star"
                            data-rating="{{ $i }}"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                            />
                        </svg>
                    </label>
                @endfor
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">
                {{ $userRating ? 'Perbarui Rating' : 'Submit' }}
            </button>
        </form>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stars = document.querySelectorAll('.star');
        const inputs = document.querySelectorAll('.star-input');
        const form = document.getElementById('rating-form');

        // Simpan rating yang terpilih sebelumnya
        let selectedRating = {{ $currentRating }};

        const updateStars = (rating) => {
            stars.forEach(star => {
                const starRating = parseInt(star.getAttribute('data-rating'));
                star.setAttribute('fill', starRating <= rating ? '#0e8743' : '#8c8c8c');
            });
        };

        // Inisialisasi tampilan bintang berdasarkan rating awal
        updateStars(selectedRating);

        stars.forEach((star, index) => {
            const input = inputs[index];

            // Event saat bintang di-klik
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));

                // Jika rating yang sama di-klik, deselect
                if (selectedRating === rating) {
                    input.checked = false;
                    selectedRating = 0; // Reset rating
                } else {
                    input.checked = true;
                    selectedRating = rating;
                }

                updateStars(selectedRating);
            });

            // Event saat hover untuk memberikan efek sementara
            star.addEventListener('mouseover', () => {
                const hoverRating = parseInt(star.getAttribute('data-rating'));
                updateStars(hoverRating);
            });

            // Reset ke tampilan awal saat mouse keluar
            star.addEventListener('mouseout', () => {
                updateStars(selectedRating);
            });
        });
    });
</script>


@endsection
