@extends('layouts.app')

@section('main')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Profil Seller</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold px-4 py-2 rounded-lg text-white bg-hydro-green transition hover:bg-green-700 mb-4">
                <a href="{{ route('seller.produk.index') }}">
                    Seller Center
                </a>
            </h2>
        </div>

        @if ($produk->isEmpty())
            <p class="text-gray-500 mb-4">Anda belum memiliki produk. Tambahkan produk pertama Anda!</p>
            <a href="{{ route('seller.produk.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg inline-block">
             Tambah
            </a>
        @else
            <ul class="space-y-4">
                @foreach ($produk as $item)
                <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg shadow-sm">
                    <div>
                        <p class="text-lg font-medium text-gray-900">{{ $item->name }}</p>
                        <p class="text-sm text-gray-600">Stok: {{ number_format($item->stok) }}</p>
                        <p class="text-sm text-gray-600">
                            Status:
                            <span class="{{ $item->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $item->status ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </p>
                    </div>
                    <div class="flex space-x-4">
                        <form action="{{ route('seller.produk.toggle-status', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="transition hover:text-sky-700">
                                {{ $item->status ? 'Nonaktifkan' : 'Aktifkan' }}
                            </button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>

            {{-- <div class="mx-10 my-5">
                {{ $produk->links() }}
            </div> --}}
        @endif
    </div>
</div>
@endsection
