@extends('layouts.front')

@section('title', 'Teacher')

@section('content')

    <section class="xl:max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[30px]">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="font-semibold text-center text-heading-1">
                Guru dan Tenaga Pendidik
            </h1>

            <p class="max-w-2xl mx-auto my-4 text-center text-gray-500">
                Jarajan Guru dan Tenaga Pendidik SMP Kebangsaan
            </p>

            <div class="grid grid-cols-1 gap-3 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
                @forelse ($teachers as $teacher)
                    <div
                        class="flex flex-col items-center p-4 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-70">
                        <img class="object-cover w-64 h-[290px] ring-4 ring-gray-300 rounded-lg"
                            src="{{ Storage::url($teacher->thumbnail) }}" alt="" />

                        <h1 class="mt-4 text-2xl font-semibold text-gray-700 group-hover:text-white">
                            {{ $teacher->name }}
                        </h1>

                        <p class="mt-2 text-gray-500 group-hover:text-gray-300">
                            {{ $teacher->mapel }}
                        </p>
                    </div>
                @empty
                    <p>Belum ada data.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
