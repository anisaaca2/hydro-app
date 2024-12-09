@extends('layouts.app')

@section('main')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="{{ route('produk.update', $produk) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $produk->name) }}" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $produk->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" id="harga" name="harga" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('harga', $produk->harga) }}" required>
            @error('harga')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
            <input type="number" id="stok" name="stok" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('stok', $produk->stok) }}" required>
            @error('stok')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
            <div class="border border-gray-300 rounded-lg p-3 bg-white w-fit">
                @if ($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->name }}" class="w-64 h-64 rounded-lg object-cover mb-2">
                @endif
                <input type="file" id="gambar" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @error('gambar')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            <a href="{{ route('produk.index') }}" class="ml-2 text-gray-700">Batal</a>
        </div>
    </form>
</div>
@endsection
