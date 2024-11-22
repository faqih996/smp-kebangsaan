@extends('layouts.front')

@section('title', ' About')

@section('content')
    <section id="about-school"
        class="lg:max-w-[1130px] px-4 lg:px-0 bg-white mx-auto flex flex-col gap-[10px] lg:mt-[70px] mt-[20px] justify-between items-center">
        <!-- Container -->
        <div class="w-full px-5 py-12 mx-auto max-w-7xl md:px-10 md:py-16 lg:py-20">
            <!-- Component -->
            <div class="grid gap-20 sm:gap-20 lg:grid-cols-2">

                <!-- Content -->
                <div class="flex flex-col items-start gap-2">

                    <!-- Title -->
                    <h1 class="mb-6 text-4xl font-bold md:text-6xl lg:mb-8"> Profil Sekolah </h1>
                    <p class="text-sm text-justify text-gray-500 sm:text-xl"> Consectetur adipiscing elit duis tristique
                        sollicitudin nibh. Augue mauris augue neque gravida in fermentum. Sapien pellentesque habitant morbi
                        tristique pellentesque. </p>

                    <!-- Divider -->
                    <div class="w-full h-px mt-8 mb-8 bg-black"></div>
                    <div class="flex flex-col gap-2 mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">
                        <div class="items-center justify-between pb-3">
                            <div class="">
                                <p class="font-semibold">Alamat</p>
                            </div>
                            <p class="text-justify">Jalan Raya Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusamus ullam unde molestiae explicabo dolorum aspernatur deserunt consectetur distinctio!
                                Quibusdam deserunt corporis officiis qui dicta distinctio? Aliquam labore error ipsa velit?
                            </p>
                        </div>
                        <div class="grid justify-between grid-cols-2 gap-x-5">
                            <div class="flex flex-col pb-3 ">
                                <p class="font-semibold">NPSN</p>
                                <p>20603255</p>
                            </div>

                            <div class="flex flex-col pb-3">
                                <p class="font-semibold">Akreditasi</p>
                                <p>A</p>
                            </div>

                            <div class="flex flex-col pb-3">
                                <p class="font-semibold">No SK Akreditasi</p>
                                <p>410/FLYMOTION/1993</p>
                            </div>

                            <div class="flex flex-col pb-3">
                                <p class="font-semibold">Status</p>
                                <p>20603255</p>
                            </div>

                            <div class="flex flex-col pb-3">
                                <div class="">
                                    <p class="font-semibold ">Jenjang Pendidikan</p>
                                    <p>SMP</p>
                                </div>
                            </div>

                            <div class="flex flex-col pb-3">
                                <div class="">
                                    <p class="font-semibold ">SK Pendirian</p>
                                    <p>035/102/KEP/</p>
                                </div>
                            </div>

                            <div class="flex flex-col pb-3">
                                <div class="">
                                    <p class="font-semibold ">Tanggal SK Pendirian</p>
                                    <p>1991-07-06</p>
                                </div>
                            </div>

                            <div class="flex flex-col pb-3">
                                <div class="two-lines">
                                    <p class="font-semibold">SK Ijin Operasional</p>
                                    <p class="two-lines">570/15/PIOSmk/</p>
                                </div>
                            </div>

                            <div class="flex flex-col pb-3 two-lines">
                                <div class="two-lines ">
                                    <p class="font-semibold">Tanggal Ijin SK Operasional</p>
                                    <p class="two-lines">570/15/PIOSmk/DPMPTS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Image -->
                <div class="min-h-[530px] overflow-hidden items-center rounded-md">
                    <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[10px]">
        <img src="assets/images/icons/Star 1.svg" alt="" />
        <h1 class="text-4xl leading-[45px] font-bold text-center">
            Visi
        </h1>
        <p class="text-xl leading-[24px] text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis
            consectetur orci, ac viverra nunc laoreet in. Nullam vel neque vel felis
            finibus consectetur. Nulla facilisi.
        </p>

        <h1 class="text-4xl leading-[45px] font-bold text-center mt-16">
            Misi
        </h1>

        <ol class="space-y-6">
            <li class="flex text-base text-body-color">
                <span
                    class=" bg-blue-90 mr-2.5 flex h-[26px] w-full max-w-[26px] items-center justify-center rounded text-base text-white">
                    1
                </span>
                <div class="two-lines">
                    Lorem ipsum dolor sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, optio!
                </div>
            </li>
            <li class="flex text-base text-body-color">
                <span
                    class="bg-blue-90 mr-2.5 flex h-[26px] w-full max-w-[26px] items-center justify-center rounded text-base text-white">
                    2
                </span>
                It is a long established fact reader
            </li>
            <li class="flex text-base text-body-color">
                <span
                    class="bg-blue-90 mr-2.5 flex h-[26px] w-full max-w-[26px] items-center justify-center rounded text-base text-white">
                    3
                </span>
                The point of using Lorem Ipsum
            </li>
            <li class="flex text-base text-body-color">
                <span
                    class="bg-blue-90 mr-2.5 flex h-[26px] w-full max-w-[26px] items-center justify-center rounded text-base text-white">
                    4
                </span>
                There are many variations of passages
            </li>
            <li class="flex text-base text-body-color">
                <span
                    class="bg-blue-90 mr-2.5 flex h-[26px] w-full max-w-[26px] items-center justify-center rounded text-base text-white">
                    5
                </span>
                If you are going to use a of Lorem
            </li>
        </ol>
    </section>
@endsection
