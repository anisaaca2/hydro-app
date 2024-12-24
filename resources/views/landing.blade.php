@extends('layouts.app')

@section('main')
<div class="container mx-auto p-6">
    <header class="flex justify-between items-center rounded-lg bg-white shadow-md px-4 py-2 h-24">
        <h1 class="text-3xl font-bold">Selamat Datang di Hydro</h1>
    </header>

    <section class="mt-6">
        @if ($produk->isEmpty())
            <p class="text-gray-500 text-center">Produk tidak tersedia.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($produk as $item)
                    @if ($item->status)
                        <div class="bg-white shadow-sm rounded-lg overflow-hidden border hover:border-hydro-green transition-color duration-100">
                            <a href="{{ route('produk.pembeli.produkshow', $item->id) }}">
                                <img
                                    src="{{ asset('storage/' . $item->gambar) }}"
                                    alt="{{ $item->name }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-800 truncate">
                                        {{ $item->name }}
                                    </h3>
                                    <p class="text-lg font-bold text-green-600 mt-2">
                                        Rp{{ number_format($item->harga, 0, ',', '.') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </section>
</div>
@endsection
