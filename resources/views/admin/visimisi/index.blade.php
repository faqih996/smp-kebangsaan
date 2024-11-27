@extends('layouts.app')

@section('title', 'Vision Mission')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl">
                    <div
                        class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 lg:p-8 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">Vision Mission</h6>
                        @if ($vision)
                            <!-- Cek apakah sudah ada data Vision -->
                            <a href="{{ route('admin.vision-mission.edit', $vision->id) }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Edit Visi & Misi
                            </a>
                        @else
                            <a href="{{ route('admin.vision-mission.create') }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Tambah Baru
                            </a>
                        @endif
                    </div>

                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="overflow-x-auto text-center lg:p-6">
                            <h3 class="text-heading-5">Visi</h3>
                            <p class="text-heading-7">{{ $vision->name }}</p>
                            <h3 class="text-heading-5">Misi</h3>

                            @forelse ($missions as $index => $mission)
                                <div class="flex flex-row gap-2 mb-2 ">
                                    <p class="text-heading-7">{{ $index + 1 }}.</p>
                                    <p class="text-justify text-heading-7">{{ $mission->name }}</p>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
