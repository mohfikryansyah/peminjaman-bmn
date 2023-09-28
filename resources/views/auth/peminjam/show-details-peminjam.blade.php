@extends('auth.layouts.main')
@section('content')
<h1 class="mb-5 font-bold text-2xl">Detail Peminjam</h1>
    <a href="{{ asset('storage/' . $peminjam->suratImage) }}"
        class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 max-w-screen-md">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $peminjam->suratImage) }}" alt="">
        <div class="flex flex-col p-4">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    
                    <tbody>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nama }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                NIP
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nip }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                Email
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->email }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Pangkat
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->pangkat }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                seksi
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->seksi }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                nama Kasie
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->namaKasie }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                NIP Kasie
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->nipKasie }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                No. SPT
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->noSPT }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Barang
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->barang }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Tanggal Pinjam
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->tgl_pinjam }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Tanggal Pengembalian
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->tgl_pengembalian }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
                                Status
                            </th>
                            <td class="px-6 py-2">
                                {{ $peminjam->status }}
                            </td>
                        </tr>
                        <tr class="dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-2 font-semibold text-gray-900 whitespace-nowrap dark:text-white first-letter:uppercase">
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
    </a>
@endsection
