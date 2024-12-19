@extends('layouts.front')

@section('title', 'About')

@section('content')
    <section id="about-school"
        class="lg:max-w-[1130px] px-4 lg:px-0 bg-white mx-auto flex flex-col gap-[10px] lg:mt-[70px] mt-[20px] justify-between items-center">
        <!-- Container -->

        <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo-sekolah" class="w-[130px]" />

        <div class="w-full px-5 py-10 mx-auto max-w-7xl md:px-10 md:py-16 lg:py-20">
            <!-- Component -->
            <div class="grid gap-20 sm:gap-20 lg:grid-cols-2">

                @if ($about)
                    <!-- Content -->
                    <div class="flex flex-col items-start gap-2">

                        <!-- Title -->
                        <h1 class="mb-6 font-bold text-heading-7 md:text-heading-5 lg:mb-8"> Profil Sekolah </h1>
                        <p class="text-sm text-justify text-gray-500 sm:text-xl"> {{ $about->description }} </p>

                        <!-- Divider -->
                        <div class="w-full h-px mt-8 mb-8 bg-black"></div>

                        {{-- detail dokumen --}}
                        <div class="flex flex-col gap-2 mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">
                            <div class="items-center justify-between pb-3">
                                <div class="">
                                    <p class="font-semibold">Alamat</p>
                                </div>
                                <p class="text-justify">{{ $about->address }}
                                </p>
                            </div>
                            <div class="grid justify-between grid-cols-2 gap-x-5">
                                <div class="flex flex-col pb-3 ">
                                    <p class="font-semibold">NPSN</p>
                                    <p>{{ $about->npsn }}</p>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <p class="font-semibold">Akreditasi</p>
                                    <p>{{ $about->akreditasi }}</p>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <p class="font-semibold">No SK Akreditasi</p>
                                    <p>{{ $about->no_sk_akreditasi }}</p>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <p class="font-semibold">Status</p>
                                    <p>{{ $about->status_sk_akreditasi }}</p>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <div class="">
                                        <p class="font-semibold ">Jenjang Pendidikan</p>
                                        <p>{{ $about->jenjang_pendidikan }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <div class="">
                                        <p class="font-semibold ">SK Pendirian</p>
                                        <p>{{ $about->sk_pendirian }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <div class="">
                                        <p class="font-semibold ">Tanggal SK Pendirian</p>
                                        <p>{{ $about->tgl_sk_pendirian }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <div class="">
                                        <p class="font-semibold">SK Ijin Operasional</p>
                                        <p class="two-lines">{{ $about->sk_operasional }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-col pb-3">
                                    <div class="">
                                        <p class="font-semibold">Tanggal Ijin SK Operasional</p>
                                        <p class="two-lines">{{ $about->tgl_sk_operasional }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Image -->
                    <div class="min-h-[430px] ml-5 overflow-hidden items-center rounded-md">
                        <div class="lg:col-start-8 lg:col-span-5" data-aos="fade-up">
                            <div class="relative z-0 tilt">
                                <!-- bannar image -->
                                <div class="flex flex-col w-[450px] items-center lg:items-end">
                                    <img class="text-center" src="{{ Storage::url($about->thumbnail) }}" alt="">

                                    <img class="absolute left-0 bottom-[-290px] md:left-[30px] lg:left-0"
                                        src="{{ asset('/assets/images/education/education__13.png') }}" alt="">

                                    <img src="{{ asset('/assets/images/education/education__11.png') }}"
                                        class="absolute left-5 top-10 md:left-[30px] lg:left-0 -z-10" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <p>Belum ada data</p>
                @endif

            </div>
        </div>
    </section>
@endsection
