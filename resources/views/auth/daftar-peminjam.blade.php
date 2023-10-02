@extends('auth.layouts.main')
@section('content')
    <div>

        {{-- <div class="mb-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Daftar
                                Peminjam</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div> --}}

        <div class="mb-5">
            <h1 class="sm:text-2xl text-xs font-semibold uppercase">Daftar Peminjam Barang Milik Negara</h1>

        </div>

        @if (Session::get('BARANG_STORED'))
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ Session::get('BARANG_STORED') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        @if (Session::get('deleteSuccess'))
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ Session::get('deleteSuccess') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        @if (Session::get('error'))
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-gray-200 rounded-lg bg-red-500 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ Session::get('error') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        <a href="/dashboard/daftar-peminjam/export"
            class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-slate-800 rounded-lg hover:bg-blue-800">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
            </svg>
            Export
        </a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-slate-800 tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Barang
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pengembalian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NUP/Seri
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peminjams as $peminjam)
                        <tr class="bg-white border-b">

                            <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                <a class="hover:text-emerald-500"
                                    href="{{ route('pinjam.show', $peminjam->id) }}">{{ $peminjam->nama }}</a>
                            </th>
                            <td class="px-6 py-4">
                                {{ $peminjam->barang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $peminjam->tgl_pinjam }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $peminjam->tgl_pengembalian }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ asset('storage/' . $peminjam->suratImage) }}" target="_blank"
                                    class="text-blue-500">Lihat gambar</a>
                            </td>
                            @if ($peminjam->status == 'Menunggu')
                                <td class="px-6 whitespace-nowrap py-4">
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $peminjam->status }}</span>
                                </td>
                                <td class="px-6 whitespace-nowrap py-4">
                                    {{-- KONFIRMASI PEMINJAM --}}
                                    <form method="POST" action="{{ route('pinjam.confirm', $peminjam->id) }}">
                                        @csrf
                                        @method('put')
                                        <input type="text" id="kode_barang" name="kode_barang"
                                            class="p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs @error('kode_barang') border-red-300 placeholder-red-700 @enderror"
                                            @error('kode_barang')
                                            placeholder="Tidak boleh kosong"
                                        @enderror>

                                </td>
                                <td class="px-6 py-4">

                                    <input type="text" id="seriNUP" name="seriNUP"
                                        class="p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs @error('seriNUP') border-red-300 placeholder-red-700 @enderror"
                                        @error('seriNUP')
                                            placeholder="Tidak boleh kosong"
                                        @enderror>


                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <button type="submit"
                                            class="p-2 mr-1 text-xs font-medium text-center inline-flex items-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-green-300">
                                            <svg class="w-3 h-3 text-white" xmlns="http://www.w3.org/2000/svg"
                                                height="1em" fill="currentColor"
                                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                            </svg>
                                        </button>
                                        </form>
                                        {{-- END KONFIRMASI PEMINJAM --}}

                                        {{-- TOLAK PEMINJAM --}}
                                        <a href="{{ route('pinjam.tolak', $peminjam->id) }}"
                                            class="p-2 text-xs font-medium text-center inline-flex items-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-2 focus:outline-none focus:ring-yellow-300">
                                            <svg class="w-3 h-3 text-white" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                            </svg>
                                        </a>
                                        {{-- END TOLAK PEMINJAM --}}
                                    </div>
                                </td>
                            @elseif ($peminjam->status == 'Disetujui')
                                <td class="px-6 whitespace-nowrap py-4">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $peminjam->status }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->kode_barang }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->seriNUP }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('pinjam.selesai', $peminjam->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Selesai</a>
                                </td>
                            @elseif ($peminjam->status == 'Ditolak')
                                <td class="px-6 whitespace-nowrap py-4">
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $peminjam->status }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->kode_barang }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->seriNUP }}
                                </td>
                                <td class="px-6 py-4">
                                    &nbsp;
                                </td>
                            @else
                                <td class="px-6 whitespace-nowrap py-4">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $peminjam->status }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->kode_barang }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $peminjam->seriNUP }}
                                </td>
                                <td class="px-6 py-4">
                                    &nbsp;
                                </td>
                            @endif

                        </tr>
                    @empty
                        <tr class="bg-white border-b">
                            <td colspan="8" class="px-4 py-6 text-center">
                                Belum ada Permintaan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
