@extends('auth.layouts.main')
@section('content')
    @if (Session::get('PINJAM_STORED'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Pinjam Barang |</span> {{ Session::get('PINJAM_STORED') }}
            </div>
        </div>
    @endif

    <div class="max-w-screen-md bg-white p-5 rounded-lg border">
        <h1 class="mb-5 text-xl font-semibold">Pinjam Barang</h1>
        <form method="POST" action="{{ route('pinjam.peminjaman') }}">
            @method('put')
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Peminjam</label>
                <input type="text" id="nama" name="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nama') border-red-600 @enderror"
                    required value="{{ auth()->user()->name }}">
                @error('nama')
                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                        {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang</label>
                <input type="text" id="barang" name="barang"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('barang') border-red-600 @enderror"
                    placeholder="*Laptop" required value="{{ old('barang') }}">
                @error('barang')
                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                        {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <input type="date" id="tanggal" name="tgl_pinjam"
                    class="bg-gray-50 border hidden border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 "
                    placeholder="Laptop">
            </div>
            <div class="mb-6">
                <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Pengembalian</label>
                <input type="date" id="tanggal" name="tgl_pengembalian"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('tgl_pengembalian') border-red-600 @enderror"
                    required placeholder="Laptop">
                @error('tgl_pengembalian')
                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                        {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <input type="text" id="status" name="status"
                    class="bg-gray-50 border hidden border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 "
                    placeholder="Laptop">
            </div>
            <button type="submit"
                class="text-white shadow-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
@endsection
