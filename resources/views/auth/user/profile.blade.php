@extends('auth.layouts.main')
@section('content')
    <h1 class="text-2xl font-semibold mb-5">Pengaturan Akun</h1>
    
    <div class="grid lg:grid-cols-3 gap-2">
        <div class="lg:col-span-2 col-span-3 lg:order-1 order-2">
            @include('auth.user.partials.update-profile')
            @include('auth.user.partials.update-password')
            @include('auth.user.partials.delete-akun')
        </div>
        <div class="lg:col-span-1 col-span-3 lg:order-2 order-1 lg:mx-0 mx-auto">
            <div id="img-profile" class="lg:absolute sm:w-56 overflow-hidden rounded-xl aspect-[4/6]">
                <img class="img-preview aspect-[4/6] h-auto max-w-full rounded-xl mb-3 hover:scale-105 duration-500"
                    src="{{ asset('storage/' . auth()->user()->fotoProfile) }}">
            </div>
        </div>
    </div>
@endsection
