@extends('layouts.app')

@section('main')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Hasil Pencarian untuk "{{ $query }}"</h2>

    @if($produk->isEmpty())
        <p class="text-gray-600">Tidak ada produk ditemukan.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($produk as $item)
                @if($item->status)
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
</div>
@endsection
