@extends('layouts.front')

@section('title', 'Facility')

@section('content')
    <section id="extracurricular" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <h2 class="font-bold text-[26px] leading-[39px]">
                Fasilitas SMP Kebangsaan
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-8 mt-8 lg:grid-cols-2">
            @forelse ($facilities as $facility)
                <div class="rounded-md hover:ring-2 hover:ring-blue-90">
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="{{ Storage::url($facility->thumbnail) }}" alt="">

                    <div
                        class="relative z-20 items-center max-w-lg p-4 mx-auto text-center rounded-md shadow -mt-14 backdrop-blur-sm bg-blue-70/60">
                        <p class="items-center font-semibold text-center text-white">
                            {{ $facility->thumbnail }}
                        </p>
                    </div>
                </div>
            @empty
                <p>Belum ada data.</p>
            @endforelse
        </div>
    </section>
@endsection
