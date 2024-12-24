@extends('layouts.app')

@section('main')
<div class="container justify-items-end p-4 mt-5">
    <div class="flex space-x-3">
        <a href="{{ route('seller.profile.penjual') }}" class="text-hydro-green hover:text-green-800 font-semibold transition">
            Profile
        </a>
        <span class="text-gray-500">/</span>
        <p class="font-medium text-gray-700">Hydro Seller Center</p>
    </div>
</div>

<div class="container mx-auto p-4 mb-5">
    <h1 class="text-2xl font-bold mb-5">Hydro Seller Center</h1>
    <a href="{{ route('seller.produk.create') }}" class="bg-hydro-green transition hover:bg-green-600 text-white px-4 py-2 rounded-lg">Tambahkan</a>
    <table class="w-full mt-5 border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Deskripsi</th>
                <th class="border px-4 py-2">Harga</th>
                <th class="border px-4 py-2">Stok</th>
                <th class="border px-4 py-2">Gambar</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $item)
                <tr class="text-center">
                    <td class="border px-4 py-3">{{ $item->name }}</td>
                    <td class="border px-6 py-3">
                        <p class="line-clamp-3 text-justify">
                            {{ $item->description }}
                        </p>
                    </td>
                    <td class="border px-4 py-3">Rp{{ number_format($item->harga, 0, ',', '.') }},-</td>
                    <td class="border px-4 py-3">{{ $item->stok }}</td>
                    <td class="border px-4 py-2">
                        @if ($item->gambar)
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->name }}" class="w-28 h-28 object-cover mx-auto">
                            </div>
                        @else
                            <span class="text-gray-500">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td class="border px-4 py-3">
                        <a href="{{ route('seller.produk.show', $item->id) }}" class="p-2 rounded-lg border text-white bg-hydro-yellow transition hover:bg-amber-400 mr-2">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border px-4 py-2 text-center text-gray-500">Tidak ada produk yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
