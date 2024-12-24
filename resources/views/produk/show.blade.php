@extends('layouts.app')

@section('main')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Detail Produk</h1>

    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <div class="flex flex-wrap md:flex-nowrap border-y-black">
            <div class="w-full md:w-1/3">
                @if ($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->name }}" class="w-full h-auto object-cover">
                @else
                    <div class="flex items-center justify-center bg-gray-100 w-full h-64 text-gray-400">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            <div class="w-full md:w-2/3 p-4 mx-4">
                <h2 class="text-2xl font-semibold text-gray-900 mb-2">{{ $produk->name }}</h2>
                <p class="text-gray-600 mb-4 text-justify">{{ $produk->description }}</p>

                <div class="mb-4">
                    <p class="text-sm text-gray-500">Harga</p>
                    <p class="text-lg font-bold text-gray-800">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-500">Stok</p>
                    <p class="text-lg font-medium text-gray-800">{{ $produk->stok }} unit</p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">
                        Status:
                        <p class="{{ $produk->status ? 'text-green-500' : 'text-red-500' }}">
                            {{ $produk->status ? 'Tersedia' : 'Tidak Tersedia' }}
                        </p>
                    </p>
                </div>


            </div>
        </div>
    </div>

    <div class="mt-6 flex flex-wrap gap-4">
        <a href="{{ route('seller.produk.edit', $produk) }}" class="px-4 py-2 bg-hydro-green transition text-white rounded-md hover:bg-green-600">Edit Produk</a>
        <form action="{{ route('seller.produk.destroy', $produk) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-500 transition text-white rounded-md hover:bg-red-600">Hapus Produk</button>
        </form>

        <a href="{{ route('seller.produk.index') }}" class="px-4 py-2 bg-gray-500 transition text-white rounded-md hover:bg-gray-600">Kembali</a>
    </div>
</div>
@endsection
