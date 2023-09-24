@extends('auth.layouts.main')
@section('content')
    <div class="max-w-screen-md bg-white text-gray-800 p-5 rounded-lg border">
        <h1 class="mb-5 text-xl font-semibold">Form Penambahan Barang</h1>
        <form method="POST" action="/dashboard/barang">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium">Nama Barang</label>
                <input type="text" id="nama" name="nama"
                    class="bg-white border border-gray-300 text-sm rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nama') border-red-600 @enderror"
                    placeholder="Laptop" required>
                @error('nama')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="stok" class="block mb-2 text-sm font-medium">
                    Stok</label>
                <input type="number" id="stok" name="stok"
                    class="bg-white border border-gray-300 text-sm rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('stok') border-red-600 @enderror"
                    required>
                @error('stok')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="kode_barang" class="block mb-2 text-sm font-medium">
                    Kode Barang</label>
                <input type="text" id="kode_barang" name="kode_barang"
                    class="bg-white border border-gray-300 text-sm rounded-lg text-gray-800 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('kode_barang') border-red-600 @enderror"
                    required>
                    @error('kode_barang')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="text-white shadow-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
@endsection
