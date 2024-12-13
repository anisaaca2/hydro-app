@extends('layouts.app') <!-- Pastikan layout yang benar -->

@section('main')
<div class="container mx-auto p-6">
    {{-- Header --}}
    <header class="flex justify-between items-center rounded-lg bg-white shadow-md px-4 py-2 h-24">
        <h1 class="text-3xl font-bold">Selamat Datang di Hydro</h1>
    </header>

    {{-- Produk Section --}}
    <section class="mt-6">
        <h2 class="text-xl font-semibold mb-4">Produk Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($produk as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                        <p class="text-gray-500">{{ $item->description }}</p>
                        <p class="text-lg font-bold text-blue-600 mt-2">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">Tidak ada produk yang tersedia.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
