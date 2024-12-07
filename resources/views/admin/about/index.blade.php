@extends('layouts.app')

@section('title', 'About School')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl">
                    <div
                        class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 lg:p-8 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">About School</h6>
                        @if ($about)
                            <!-- Cek apakah sudah ada data about -->
                            <a href="{{ route('admin.about.edit', $about->id) }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Edit Tentang Sekolah
                            </a>
                        @else
                            <a href="{{ route('admin.about.create') }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Buat Tentang Sekolah
                            </a>
                        @endif
                    </div>

                    <div class="flex-auto px-6 pt-6 pb-2">
                        <div class="w-full p-8 overflow-hidden text-center">

                            @if ($about)
                                <img src="{{ Storage::url($about->thumbnail) }}" alt="thumbnail"
                                    class="rounded-md object-cover w-[160px] h-[90px] mb-2">
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
