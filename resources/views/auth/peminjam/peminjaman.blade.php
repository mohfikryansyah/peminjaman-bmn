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

    {{-- <div class="w-full bg-white p-5 rounded-lg border">
        <h1 class="mb-5 text-xl font-semibold uppercase">Pinjam Barang</h1>

        <form method="POST" action="{{ route('user.peminjaman') }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="mb-3">
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
                <div class="mb-3">
                    <label for="nip"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP/NIK</label>
                    <input type="number" id="nip" name="nip"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nip') border-red-600 @enderror"
                        required value="{{ old('nip') }}" min="0">
                    @error('nip')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pangkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat /
                        Jabatan</label>
                    <input type="text" id="pangkat" name="pangkat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('pangkat') border-red-600 @enderror"
                        required value="{{ old('pangkat') }}">
                    @error('pangkat')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="seksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seksi</label>
                    <select id="seksi" name="seksi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>-- Pilih Seksi --</option>
                        @foreach ($kasie as $k)
                            <option value="{{ $k->seksi }}">{{ $k->seksi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="namaKasie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Kasie</label>
                    <input type="text" id="namaKasie" name="namaKasie"
                        class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('namaKasie') border-red-600 @enderror"
                        required value="{{ old('namaKasie') }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nipKasie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP
                        Kasie</label>
                    <input type="text" id="nipKasie" name="nipKasie"
                        class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nipKasie') border-red-600 @enderror"
                        required value="{{ old('nipKasie') }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="noSPT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                        SPT</label>
                    <input type="number" id="noSPT" name="noSPT"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('noSPT') border-red-600 @enderror"
                        required value="{{ old('noSPT') }}">
                    @error('noSPT')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="barang"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang</label>
                    <select id="barang" name="barang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>-- Pilih Barang --</option>
                        @foreach ($barangs->sortBy('nama') as $barang)
                            @if (old('id') == $barang->id)
                                <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                            @else
                                <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                            @endif
                        @endforeach
                        @error('barang')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Pengembalian</label>
                    <input type="date" id="tanggal" name="tgl_pengembalian"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('tgl_pengembalian') border-red-600 @enderror"
                        value="{{ old('tgl_pengembalian') }}">
                    @error('tgl_pengembalian')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="suratImage">Upload
                        surat</label>
                    <input type="file" id="suratImage" name="suratImage"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF</p>

                    @error('suratImage')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-white shadow-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div> --}}
    <h1 class="mb-5 text-xl font-semibold uppercase">Pinjam Barang</h1>
    <div class="md:grid md:grid-cols-3 md:gap-5">
        <div class="col-span-2">
            <form method="POST" action="{{ route('user.peminjaman') }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- <div class="lg:grid lg:grid-cols-2 lg:gap-4"> --}}
                <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5">
                    <div class="mb-3 col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                            Peminjam<span class="text-red-500">*</span></label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nama') border-red-600 @enderror"
                            required value="{{ auth()->user()->name }}">
                        @error('nama')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nip"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP/NIK</label>
                        <input type="number" id="nip" name="nip"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nip') border-red-600 @enderror"
                            required value="{{ old('nip') }}" min="0">
                        @error('nip')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pangkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat
                            /
                            Jabatan</label>
                        <input type="text" id="pangkat" name="pangkat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('pangkat') border-red-600 @enderror"
                            required value="{{ old('pangkat') }}">
                        @error('pangkat')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 mt-5">
                    <div class="mb-3 col-span-2">
                        <label for="seksi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seksi</label>
                        <select id="seksi" name="seksi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>-- Pilih Seksi --</option>
                            @foreach ($kasie as $k)
                                @if (old('seksi') === $k->seksi)
                                    <option value="{{ $k->seksi }}" selected>{{ $k->seksi }}</option>
                                @else
                                    <option value="{{ $k->seksi }}">{{ $k->seksi }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namaKasie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Kasie</label>
                        <input type="text" id="namaKasie" name="namaKasie"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('namaKasie') border-red-600 @enderror"
                            required value="{{ old('namaKasie') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nipKasie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP
                            Kasie</label>
                        <input type="text" id="nipKasie" name="nipKasie"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('nipKasie') border-red-600 @enderror"
                            required value="{{ old('nipKasie') }}" readonly>
                    </div>
                </div>

                <div class="lg:grid lg:grid-cols-2 lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 mt-5">
                    <div class="mb-3 col-span-2">
                        <label for="barang"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang</label>
                        <select id="barang" name="barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>-- Pilih Barang --</option>
                            @foreach ($barangs->sortBy('nama') as $barang)
                                @if (old('barang') === $barang->nama)
                                    <option value="{{ $barang->nama }}" selected>{{ $barang->nama }}</option>
                                @else
                                    <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                                @endif
                            @endforeach
                            @error('barang')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                    {{ $message }}</p>
                            @enderror
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="noSPT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            SPT</label>
                        <input type="number" id="noSPT" name="noSPT"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('noSPT') border-red-600 @enderror"
                            required value="{{ old('noSPT') }}">
                        @error('noSPT')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Pengembalian</label>
                        <input type="date" id="tanggal" name="tgl_pengembalian"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('tgl_pengembalian') border-red-600 @enderror"
                            value="{{ old('tgl_pengembalian') }}">

                        {{-- <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker datepicker-format="dd/mm/yyyy" type="text" id="tanggal" name="tgl_pengembalian"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pilih tanggal">
                        </div> --}}

                        @error('tgl_pengembalian')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                {{-- </div> --}}

        </div>
        <div class="col-span-1">
            <div class="lg:grid lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 lg:mt-0 mt-5">
                <img src="{{ asset('storage/' . auth()->user()->fotoProfile)  }}" height="100" width="100" alt="">
            </div>

            <div class="lg:grid lg:gap-4 bg-white border border-gray-300 rounded-xl p-5 mt-5">
                <div class="mb-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="suratImage">Upload
                        surat</label>
                    <input type="file" id="suratImage" name="suratImage"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                    </p>

                    @error('suratImage')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                            {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <button type="submit"
        class="mt-5 text-white shadow-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const seksiDropdown = document.getElementById('seksi');
            const namaInput = document.getElementById('namaKasie');
            const nipInput = document.getElementById('nipKasie');

            seksiDropdown.addEventListener('change', function() {
                const selectedSeksi = this.value;
                if (selectedSeksi) {
                    fetch(`/get-nama-nip/${selectedSeksi}`)
                        .then(response => response.json())
                        .then(data => {
                            // console.log('Selected Kasie :' . data.selectedSeksi);
                            namaInput.value = data.namaKasie;
                            nipInput.value = data.nipKasie;
                        })
                        .catch(error => console.error(error));
                } else {
                    namaInput.value = '';
                    nipInput.value = '';
                }
            });
        });
    </script>
@endsection
