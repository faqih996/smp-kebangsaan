@extends('layouts.app')

@section('title', 'Sambutan')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl">
                    <div
                        class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 lg:p-8 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">Sambutan</h6>
                        @if ($speach)
                            <!-- Cek apakah sudah ada data about -->
                            <a href="{{ route('admin.speach.edit', $speach->id) }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Edit Sambutan
                            </a>
                        @else
                            <a href="{{ route('admin.speach.create') }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Buat Tentang Sekolah
                            </a>
                        @endif
                    </div>

                    <div class="items-center flex-auto w-full px-6 pt-6 pb-2 overflow-hidden ">

                        @if ($speach)
                            {{-- creATE TWO COLUMN --}}
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full p-3 lg:w-1/4 xl:w-1/4">
                                    <img src="{{ Storage::url($speach->thumbnail) }}" alt="thumbnail"
                                        class="rounded-md object-cover w-[240px] h-[240px] mb-2 items-center">
                                </div>

                                <div class="w-full p-3 lg:w-1/2 xl:w-1/2">
                                    <h2 class="font-bold lg:text-heading-7 text-heading-8">{{ $speach->speaker_name }}</h2>
                                    <p class="lg:text-heading-9 text-heading-10">{{ $speach->jabatan }}</p>

                                    <h3 class="font-bold lg:text-heading-7 text-heading-8">Kata sambutan</h3>
                                    <p class="lg:text-heading-9 text-heading-10 ">{{ $speach->description }}</p>

                                </div>
                            </div>
                        @else
                            <p>Belum ada data</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
