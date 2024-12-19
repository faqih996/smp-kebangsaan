@extends('layouts.front')

@section('title', 'Extracurricular')

@section('content')
    <section id="extracurricular" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <h2 class="font-bold text-[26px] leading-[39px]">
                Extrakulikuler SMP Kebangsaan
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-8 mt-8 lg:grid-cols-2">
            @forelse ($extracurriculars as $extracurricular)
                <div class="rounded-md hover:ring-2 hover:ring-blue-90">
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="{{ Storage::url($extracurricular->thumbnail1) }}" alt="">

                    <div
                        class="relative z-20 items-center max-w-lg p-4 mx-auto text-center bg-white rounded-md shadow -mt-[17px]">
                        <p href="#" class="items-center font-semibold text-center text-gray-800">
                            {{ $extracurricular->name }}
                        </p>

                        <p class="mt-3 text-sm text-center text-gray-500 md:text-sm">
                            Jadwal Latihan : {{ $extracurricular->jadwal }}
                        </p>

                        <p class="mt-3 text-sm text-center text-gray-500 md:text-sm">
                            Pembina : {{ $extracurricular->coach }}
                        </p>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </section>
@endsection
