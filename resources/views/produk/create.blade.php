@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="justify-center items-center font-jakarta">
    <div class="px-10 my-10">
        <h1 class="text-2xl font-bold mb-4 text-hydro-green">Tambah Produk</h1>

        <form action="{{ route('seller.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" id="harga" name="harga" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('harga') }}" required>
                @error('harga')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" id="stok" name="stok" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('stok') }}" required>
                @error('stok')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @error('gambar')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-sky-500 transition hover:bg-sky-600 text-white px-4 py-2 rounded-lg">Simpan</button>
                <button class="ml-2 bg-gray-500 transition hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                    <a href="{{ route('seller.profile.penjual') }}">Batal</a>
                </button>
            </div>
        </form>
    </div>
</div>

@include('layouts.partials.footer')
