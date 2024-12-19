@extends('layouts.front')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    <section id="Hero" class="mt-[1px]">
        <div class="w-full main-carousel">
            @forelse ($carousels as $carousel)
                <div class="featured-news-card relative w-full h-[750px] flex shrink-0 overflow-hidden">
                    <img src="{{ Storage::url($carousel->thumbnail) }}" class="absolute object-cover w-full h-full thumbnail"
                        alt="icon" />

                    <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(37,89,187,0.9)] absolute z-10">
                    </div>

                    <div class="card-detail max-w-[1130px] w-full mx-auto flex flex-cols justify-end pb-10 relative z-20">
                        <div class="relative z-10 w-full text-center lg:mt-[250px] mt-[150px]">
                            <h1
                                class="items-center gap-4 font-bold text-center text-white lg:text-heading-1 text-heading-3">
                                SMP Kebangsaan
                            </h1>
                            <p class="text-center text-white text-heading-8">
                                Pondok Aren - Tangerang Selatan
                            </p>
                            <p class="mt-10 font-semibold text-center text-white text-heading-7">
                                {{ $carousel->name }}
                            </p>
                            <p class="text-center text-white text-heading-8">
                                {{ $carousel->description }}
                            </p>
                        </div>

                        <div class="prevNextButtons flex items-end lg:gap-4 gap-2 lg:mb-[60px] mb-[30px] px-4 lg:px-0">
                            <button
                                class="button--previous appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                            </button>
                            <button
                                class="button--next appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-blue-90 transition-all duration-300 rotate-180">
                                <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada data Terbaru.</p>
            @endforelse

        </div>

    </section>

    <!-- counter Section -->
    <section id="counter"
        class="lg:max-w-[1130px] px-4 lg:px-0 bg-white mx-auto flex flex-col gap-[10px] lg:mt-[70px] mt-[20px] justify-between items-center">
        <div class="grid lg:grid-cols-6 grid-cols-3 lg:gap-[30px] gap-[10px] justify-between lg:items-center">
            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $facilities }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Pengajar
                    </p>
                </div>
            </div>

            <div class="p-[28px_20px] flex flex-col items-center lg:trans gap-2ition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $facilities }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Perstasi
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $about->jumlah_siswa }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Siswa
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $about->jumlah_kelas }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Ruang Kelas
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $facilities }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Fasilitas
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8 text-blue-90">
                        {{ $extracurriculars }}
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Extrakulikuler
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- category Section -->
    <section id="services" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <p
                class="badge-orange rounded-full p-[8px_18px] bg-blue-5 font-bold text-sheading-12 lg:text-heading-9 text-heading-12 leading-[21px] text-blue-90 w-fit">
                The Best Services
            </p>
            <h2 class="font-bold lg:text-heading-6 text-heading-8 leading-[39px]">
                Layanan unggulan SMP Kebangsaan
            </h2>
        </div>
        <div class="grid lg:grid-cols-6 grid-cols-2 gap-[10px] lg:gap-[30px]">
            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/star.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Visi & Misi</p>
                    </div>
                </div>
            </a>

            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/chat.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Sambutan</p>
                    </div>
                </div>
            </a>

            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/teacher.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Guru dan Staff</p>
                    </div>
                </div>
            </a>

            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[60px] h-[60px] flex shrink-0">
                        <img src="assets/icons/notifications.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Pengumuman</p>
                    </div>
                </div>
            </a>

            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[60px] h-[60px] flex shrink-0">
                        <img src="assets/icons/success.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Extrakulikuler</p>
                    </div>
                </div>
            </a>

            <a href="author.html" class="card-authors">
                <div
                    class="rounded-[20px] border-2 border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                    <div class="w-[60px] h-[60px] flex shrink-0">
                        <img src="assets/icons/blogging.svg" class="object-cover w-full h-full" alt="avatar" />
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-semibold">Artikel</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    {{-- information --}}
    <section class="w-full mt-28 lg:mt-[70px] x-announcement">
        <div class="container pb-16 pt-9 max-w-[1130px] mx-auto flex flex-col gap-[30px] px-4 lg:px-0">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h3 class="text-xl font-semibold text-white sm:text-2xl">
                        Pengumuman
                    </h3>
                    <p class="text-sm font-semibold text-white sm:text-base">
                        Informasi Kegiatan SMP Kebangsaan
                    </p>
                </div>
                {{-- <div class="prevNextButtons flex items-end lg:gap-4 gap-2 lg:mb-[60px] mb-[30px] px-4 lg:px-0">
                    <button
                        class="button-previous appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-white transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                    </button>
                    <button
                        class="button-next appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-white transition-all duration-300 rotate-180">
                        <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                    </button>
                </div> --}}
            </div>


            <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                @forelse ($informations as $information)
                    <div class="py-[18px] px-7 rounded-[20px] border border-xneutral-100 bg-white shadow-md">
                        <p class="mb-4 text-xs font-semibold sm:text-sm text-xneutral-200">
                            {{ $information->category }}
                        </p>

                        <a href="" class="mb-4 text-base font-semibold sm:text-lg text-xneutral-400 line-clamp-2">
                            {{ $information->name }}
                        </a>
                        <p class=" text-xs sm:text-sm font-normal text-xneutral-200 mb-1.5">
                            {{ $information->description }}
                        </p>
                        <p class="text-xs font-semibold text-xneutral-200">
                            {{ $information->pelaksanaan }}
                        </p>
                    </div>
                @empty
                    <p>Belum ada data</p>
                @endforelse ($informations as $information)

            </div>

        </div>
    </section>

    <section id="about-us" class="lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="relative z-0 overflow-hidden">

            <div>
                <img src="{{ asset('/assets/images/education/hero_shape2.png') }}"
                    class="absolute right-[16%] top-[60%] md:right-[31px] md:top-[70%] lg:right-[16%] lg:top-[60%] animate-move-var z-10"
                    alt="">
                <img src="{{ asset('/assets/images/education/hero_shape3.png') }}"
                    class="absolute right-[9%] top-[58%] md:right-[12%] lg:right-[9%] animate-move-hor z-10"
                    alt="">
                <img src="{{ asset('/assets/images/education/hero_shape4.png') }}"
                    class="absolute left-1/2 bottom-[15%] md:left-[4%] lg:left-1/2 animate-spin-slow" alt="">
                <img src="{{ asset('/assets/images/education/hero_shape5.png') }}"
                    class="absolute left-[53%] top-[41%] md:left-[9%] md:top-[43%] lg:left-[53%] animate-spin-slow"
                    alt="">
            </div>

            <div class="max-w-[1130px] mx-auto flex flex-col gap-[30px] container relative pt-12 lg:pt-130px pb-175px">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-12 md:gap-15 lg:gap-30px">

                    <!-- banner Left -->
                    <div class="lg:col-start-1 lg:col-span-7" data-aos="fade-up">
                        <span
                            class="inline-block px-6 py-2 mb-5 text-sm font-semibold rounded-full text-blue-90 bg-blue-5">
                            Education
                        </span>
                        <h1
                            class="font-bold leading-relaxed text-black text-size-40 lg:text-size-50 2xl:text-6xl md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half mb-10px dark:text-blackColor-dark">
                            Cloud-based LMS Trusted by 1000+
                        </h1>
                        <p
                            class="mt-5 leading-relaxed two-lines text-size-15 lg:text-base 2xl:text-lg text-contentColor 2xl:mb-30px dark:text-contentColor-dark">
                            Lorem Ipsum is simply dummy text of the printing
                            typesetting industry. Lorem Ipsum has been
                        </p>
                    </div>

                    <!-- banner right -->
                    <div class="lg:col-start-8 lg:col-span-5" data-aos="fade-up">
                        <div class="relative z-0 tilt">
                            <!-- bannar image -->
                            <div class="flex flex-col items-center lg:items-end">
                                <img class="text-center" src="{{ Storage::url($about->thumbnail) }}" alt="">

                                <img class="absolute left-0 bottom-[-290px] md:left-[30px] lg:left-0"
                                    src="{{ asset('/assets/images/education/education__13.png') }}" alt="">

                                <img src="{{ asset('/assets/images/education/education__11.png') }}"
                                    class="absolute left-5 top-10 md:left-[30px] lg:left-0 -z-10" alt="">

                                <img src="{{ asset('/assets/images/education/education__3.png') }}"
                                    class="absolute -right-4 top-[-22px] md:right-[155px] lg:-right-3 z-[-1] animate-move-hor"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bannaer section -->
    </section>

    <section id="ppdb"
        class="flex lg:max-w-[1130px] mx-auto md:flex items-center lg:p-[60px_100px] lg:mt-[30px] mt-[30px] px-4 lg:px-0">
        @forelse ($promotions as $promotion)
            <div class="grid items-center gap-12 grid-col-2 lg:grid-cols-2 md:gap-15 lg:gap-30px">
                <div class="items-center">
                    <div class="lg:w-[455px] lg:h-[588px] w-[255px] h-[288px] items-center mx-auto lg:mx-0">
                        <img src="{{ Storage::url($promotion->thumbnail) }}" alt="icon" />
                    </div>
                </div>

                <div class="relative mr-10" data-aos="fade-up">
                    <h1
                        class="font-bold leading-relaxed text-black text-size-40 lg:text-size-50 2xl:text-6xl md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half mb-10px dark:text-blackColor-dark">
                        {{ $promotion->title }}
                    </h1>
                    <p
                        class="my-10 leading-relaxed two-lines text-size-15 lg:text-base 2xl:text-lg text-contentColor 2xl:mb-30px dark:text-contentColor-dark">
                        {{ $promotion->subtitle }}
                    </p>
                    <a href="{{ url($promotion->link) }}" target="blank"
                        class="mt-10 text-white text-heading-10 p-3 font-semibold rounded-md bg-blue-50 transition-all duration-300 hover:shadow-[0_10px_20px_0_#bbdefb] w-fit">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        @empty
        @endforelse
    </section>

    <!-- article section -->
    <section id="Latest-news" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[50px] mt-[30px] px-4 lg:px-0">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-bold lg:text-heading-6 text-heading-8 leading-[39px]">
                    Arikel dan Berita
                </h2>
                <span class="flex flex-col font-normal lg:text-heading-9 text-heading-10">
                    Berita & Aktivitas terbaru SMP Kebangsaan
                </span>
            </div>

            <a href="{{ route('front.article') }}"
                class="lg:text-heading-8 text-heading-11 rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-blue-90">
                Selengkapnya
            </a>
        </div>

        <div class="flex flex-col items-start justify-between gap-5 lg:flex-row h-fit">
            @forelse ($featured_articles as $article)
                <div
                    class="featured-news-card relative w-full lg:h-[424px] h-[624px] flex flex-1 rounded-[20px] overflow-hidden">
                    <img src="{{ Storage::url($article->thumbnail1) }}"
                        class="absolute object-cover w-full h-full thumbnail" alt="thumbnail" />
                    <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                    </div>

                    <div class="card-detail w-full flex items-end lg:p-[30px] p-[50px] relative z-20">
                        <div class="flex flex-col gap-[10px]">
                            <p class="text-white">{{ $article->is_featured }}</p>
                            <a href="details.html"
                                class="font-bold lg:text-heading-4 text-heading-9 lg:leading-[31px] leading-[22px] text-white transition-all duration-300">
                                {{ $article->name }}
                            </a>
                            <p class="text-white">{{ $article->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

            <div
                class="lg:h-[424px] h-[324px] w-fit lg:px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
                <div class="lg:w-[455px] px-2 w-auto flex flex-col gap-5 shrink-0">

                    @forelse ($articles as $article)
                        <a href="" class="card py-[2px]">
                            <div
                                class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ Storage::url($article->thumbnail1) }}"
                                        class="object-cover w-full h-full" alt="thumbnail" />
                                </div>
                                <div class="flex flex-col justify-center-center gap-[6px]">
                                    <h3 class="font-bold text-lg leading-[27px]">
                                        {{ subStr($article->name, 0, 50) }}{{ Strlen($article->name) > 50 ? '...' : '' }}
                                    </h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                        {{ $article->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>Belum ada artikel terbaru</p>
                    @endforelse

                </div>
                <div
                    class="sticky z-10 bottom-0 w-full lg:h-[100px] h-[80px] bg-gradient-to-b from-[rgba(255,255,255,0.19)] to-[rgba(255,255,255,1)]">
                </div>
            </div>
        </div>
    </section>

    <!-- our activities -->
    <section id="our-activities"
        class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <p
                class="badge-orange rounded-full p-[8px_18px] bg-blue-5 font-bold text-sm leading-[21px] text-blue-90 w-fit">
                Our Galleries
            </p>
            <h2 class="font-bold text-[26px] leading-[39px]">
                Galeri Kegiatan SMP Kebangsaan
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-12 xl:gap-4 lg:grid-cols-3">

            @forelse ($galleries as $gallery)
                <!-- card 1 -->
                <div class="group">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                        <div class="p-4 bg-white rounded-md shadow-md">
                            <!-- card image -->
                            <div class="relative mb-4 overflow-hidden">

                                <img src="{{ storage::url($gallery->thumbnail) }}" alt=""
                                    class="w-full transition-all duration-300 rounded-md group-hover:scale-110">

                            </div>
                            <!-- card content -->
                            <div class="items-center">
                                <p class="text-lg font-semibold text-center mb-10px font-hind">
                                    {{ $gallery->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada data.</p>
            @endforelse

        </div>
    </section>
@endsection
