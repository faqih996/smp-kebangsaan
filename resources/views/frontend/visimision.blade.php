@extends('layouts.front')

@section('title', 'Vision & Mission')

@section('content')

    <section id="visi-misi" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
        <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo-sekolah" class="w-[160px]" />
        <h1 class="text-4xl leading-[45px] font-bold text-center">
            Visi
        </h1>
        <p class="text-xl leading-[45px] text-center font-semibold">
            {{ $vision->name }}
        </p>

        <h1 class="text-4xl leading-[45px] font-bold text-center mt-16">
            Misi
        </h1>

        @php
            $alphabet = range('1', '2'); // Membuat array huruf dari A-Z
        @endphp

        @forelse ($missions as $index => $mission)
            <div class="flex items-start w-full gap-4 p-4 border-b">
                <span class="text-lg font-bold text-gray-600">{{ $alphabet[$index] ?? $index + 1 }}.</span>
                <div class="flex-1">
                    <p class="text-base font-semibold text-gray-800">{{ $mission->name }}</p>
                </div>
            </div>
        @empty
            <div class="p-4 text-center text-gray-500">
                <p>Belum ada data yang tersedia.</p>
            </div>
        @endforelse
    </section>
@endsection
