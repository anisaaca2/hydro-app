@extends('layouts.app')

@section('main')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Hydro Anda</h1>
    <a href="{{ route('produk.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Tambahkan</a>
    <table class="w-full mt-4 border-collapse">
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
                    <td class="border px-4 py-3">{{ $item->description }}</td>
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
                        <a href="{{ route('produk.show', $item->id) }}" class="p-2 rounded-lg border text-white bg-emerald-500 hover:bg-emerald-600 mr-2">Detail</a>
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
