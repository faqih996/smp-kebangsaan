@extends('layouts.front')

@section('title', 'Greeting')

@section('content')
    <section class="xl:max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:flex">
                @if ($greeting)
                    <div class="lg:w-[455px] lg:h-[588px] w-[255px] h-[288px] mx-auto lg:mx-0">
                        <img src="{{ Storage::url($greeting->thumbnail) }}" alt="icon" />
                    </div>

                    <div class="mt-12 lg:w-1/2 lg:px-6 lg:mt-0">
                        <p class="text-5xl font-semibold text-blue-90 ">“</p>

                        <h1 class="text-2xl font-semibold text-blue-90 lg:text-3xl lg:w-96">
                            Help us improve our productivity
                        </h1>

                        <p class="max-w-lg mt-6">
                            "{{ $greeting->description }}"
                        </p>

                        <h3 class="mt-6 text-lg font-medium text-blue-90">{{ $greeting->speaker_name }}</h3>
                        <p class="text-gray-600 ">{{ $greeting->jabatan }}</p>
                    @else
                        <p>Belum ada data.</p>
                @endif

            </div>
        </div>
        </div>
    </section>
@endsection
