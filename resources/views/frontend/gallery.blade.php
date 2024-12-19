@extends('layouts.front')

@section('title', 'Gallery')

@section('content')
    <!-- our activities -->
    <section id="our-activities" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <p class="badge-orange rounded-full p-[8px_18px] bg-blue-5 font-bold text-sm leading-[21px] text-blue-90 w-fit">
                Our Galleries
            </p>
            <h2 class="font-bold text-[26px] leading-[39px]">
                Galeri Kegiatan SMP Kebangsaan
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-12 xl:gap-4 lg:grid-cols-3">
            @forelse ($galleries as $gallery)
                <div class="flex items-end overflow-hidden text-center bg-cover rounded-lg h-96"
                    style="background-image: url('{{ asset($gallery->thumbnail) }}');
                ">
                    <div class="w-full px-8 py-2 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                        <h2 class="text-xl font-semibold text-white">
                            {{ $gallery->name }}
                        </h2>
                    </div>
                </div>
            @empty
                <p>Belum ada data</p>
            @endforelse
        </div>
    </section>
@endsection
