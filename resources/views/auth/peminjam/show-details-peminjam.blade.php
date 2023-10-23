@extends('auth.layouts.main')
@section('content')
    <h1 class="mb-5 font-bold text-2xl">Detail Peminjam</h1>
    {{-- <a href="{{ asset('storage/' . $peminjam->suratImage) }}"
        class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 max-w-screen-md">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $peminjam->suratImage) }}" alt="">
        <div class="flex flex-col p-4">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <tbody>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nama }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                                NIP
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nip }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                                Email
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->email }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Pangkat
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->pangkat }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                seksi
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->seksi }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                nama Kasie
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->namaKasie }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                NIP Kasie
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nipKasie }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                No. SPT
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->noSPT }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Barang
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->barang }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Tanggal Pinjam
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->tgl_pinjam }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Tanggal Pengembalian
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->tgl_pengembalian }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Status
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->status }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Kode Barang
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->kode_barang }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </a> --}}
    {{-- <div class="grid grid-cols-3 rounded-xl overflow-hidden">
        <div class="lg:col-span-2 col-span-full bg-white border-2 border-gray-200 rounded-xl p-5">
            <table class="w-full text-sm text-left text-gray-500 overflow-visible">
                <tbody>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                            Nama
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->nama }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                            NIP
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->nip }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="font-semibold text-gray-700 whitespace-nowrap dark:text-white">
                            Email
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->email }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Pangkat
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->pangkat }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            seksi
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->seksi }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            nama Kasie
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->namaKasie }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            NIP Kasie
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->nipKasie }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            No. SPT
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->noSPT }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Barang
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->barang }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Tanggal Pinjam
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->tgl_pinjam }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Tanggal Pengembalian
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->tgl_pengembalian }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Status
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->status }}
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row"
                            class="font-semibold text-gray-700 whitespace-nowrap dark:text-white first-letter:uppercase">
                            Kode Barang
                        </th>
                        <td class="px-6 py-2">
                            {{ $peminjam->kode_barang }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <p class="font-semibold">
        Status :
        @if ($peminjam->status == 'Menunggu')
            <span
                class="bg-yellow-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $peminjam->status }}</span>
        @elseif($peminjam->status == 'Disetujui')
            <span
                class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $peminjam->status }}</span>
        @else
            <span
                class="bg-red-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $peminjam->status }}</span>
        @endif
    </p>


    <div class="md:grid md:grid-cols-3 md:gap-5 mt-5">
        <div class="col-span-2">
            <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5">
                <div class="mb-3">
                    <label for="nama" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ $peminjam->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ $peminjam->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nip"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">NIP/NIK</label>
                    <input type="number" id="nip" name="nip"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required value="{{ $peminjam->nip }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pangkat" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Pangkat
                        /
                        Jabatan</label>
                    <input type="text" id="pangkat" name="pangkat"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ $peminjam->pangkat }}" readonly>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 mt-5">
                <div class="mb-3 col-span-2">
                    <label for="seksi"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Seksi</label>
                    <input type="text" id="seksi" name="seksi"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required value="{{ $peminjam->seksi }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="namaKasie" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                        Kasie</label>
                    <input type="text" id="namaKasie" name="namaKasie"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required value="{{ $peminjam->namaKasie }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nipKasie" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">NIP
                        Kasie</label>
                    <input type="text" id="nipKasie" name="nipKasie"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required value="{{ $peminjam->nipKasie }}" readonly>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 mt-5">
                <div class="mb-3 col-span-1">
                    <label for="barang"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Barang</label>
                    <input type="text" id="barang" name="barang"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required value="{{ $peminjam->barang }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="noSPT" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">No.
                        SPT</label>
                    <input type="number" id="noSPT" name="noSPT"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"value="{{ $peminjam->noSPT }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="tgl_pinjam" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Tanggal
                        Pinjam</label>
                    <input type="text" id="tgl_pinjam" name="tgl_pinjam"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ $peminjam->tgl_pinjam }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="tgl_pengembalian" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Tanggal
                        Pengembalian</label>
                    <input type="text" id="tgl_pengembalian" name="tgl_pengembalian"
                        class="bg-gray-200 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ $peminjam->tgl_pengembalian }}" readonly>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div id="img-profile" class="mx-auto w-40 overflow-hidden right-60 rounded-xl aspect-[2/3] lg:mt-0 mt-5">
                <img class="img-preview aspect-[2/3] border border-gray-400 h-auto max-w-full rounded-xl mb-3 hover:scale-105 duration-500"
                    src="{{ asset('storage/' . auth()->user()->fotoProfile) }}">
            </div>
            <div id="img-profile" class="mx-auto w-40 overflow-hidden right-60 rounded-xl aspect-square mt-5">
                <img class="img-preview aspect-square border border-gray-400 h-auto max-w-full rounded-xl mb-3 hover:scale-105 duration-500"
                    src="{{ asset('storage/' . $peminjam->suratImage) }}">
            </div>
        </div>
    </div>
@endsection
