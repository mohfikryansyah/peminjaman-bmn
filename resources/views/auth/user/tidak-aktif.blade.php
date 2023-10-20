@extends('auth.layouts.main')

@section('content')
    <div class="max-w-screen-lg flex items-center rounded-xl bg-white p-8 border border-gray-200 shadow-lg space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-gray-300" fill="currentColor" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
        <h1 class="text-lg">Selamat, anda berhasil login. Silahkan menunggu admin untuk memverifikasi akun anda untuk dapat mengakses menu disamping.</h1>
    </div>
@endsection