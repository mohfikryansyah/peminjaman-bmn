@extends('auth.layouts.main')
@section('content')
    <h1 class="text-2xl font-semibold mb-5">Pengaturan Akun</h1>
    <div class=" max-w-screen-md">
        @include('auth.user.partials.update-profile')
        @include('auth.user.partials.update-password')
        @include('auth.user.partials.delete-akun')
    </div>
@endsection
