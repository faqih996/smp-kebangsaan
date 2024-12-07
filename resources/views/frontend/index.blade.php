@extends('layouts.front')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    <section id="Hero" class="mt-[2px]">
        <div class="absolute z-10 w-full text-center lg:mt-[250px] mt-[150px]">
            <h1 class="items-center gap-4 font-bold text-center text-white lg:text-heading-1 text-heading-3">
                SMP Kebangsaan
            </h1>
            <p class="text-center text-white text-heading-8">
                Pondok Aren - Tangerang Selatan
            </p>
        </div>
        <div class="w-full main-carousel">
            <div class="featured-news-card relative w-full lg:h-[750px] h-[450px] flex shrink-0 overflow-hidden">
                <img src="assets/images/thumbnails/th-featured-1.png" class="absolute object-cover w-full h-full thumbnail"
                    alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10"></div>
                <div class="card-detail max-w-[1130px] w-full mx-auto flex items-end justify-between pb-10 relative z-20">
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-bold text-4xl leading-[45px] text-white two-lines transition-all duration-300">
                            Generation Z Prefer Remote Working Than Big Salary
                        </p>
                    </div>
                    <div class="prevNextButtons flex items-center gap-4 mb-[60px]">
                        <button
                            class="button--previous appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                            <img src="assets/images/icons/arrow.svg" alt="arrow" />
                        </button>
                        <button
                            class="button--next appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 rotate-180">
                            <img src="assets/images/icons/arrow.svg" alt="arrow" />
                        </button>
                    </div>
                </div>
            </div>

            <div class="featured-news-card relative w-full lg:h-[750px] h-[450px] flex shrink-0 overflow-hidden">
                <img src="assets/images/thumbnails/th-cyclist.png" class="absolute object-cover w-full h-full thumbnail"
                    alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10"></div>
                <div class="card-detail max-w-[1130px] w-full mx-auto flex justify-end pb-10 relative z-20">
                    <div class="prevNextButtons flex items-end lg:gap-4 gap-2 lg:mb-[60px] mb-[30px] px-4 lg:px-0">
                        <button
                            class="button--previous appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <img src="assets/images/icons/arrow.svg" alt="arrow" />
                        </button>
                        <button
                            class="button--next appearance-none lg:w-[38px] lg:h-[38px] w-[24px] h-[24px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-blue-90 transition-all duration-300 rotate-180">
                            <img src="assets/images/icons/arrow.svg" alt="arrow" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- counter Section -->
    <section id="counter"
        class="lg:max-w-[1130px] px-4 lg:px-0 bg-white mx-auto flex flex-col gap-[10px] lg:mt-[70px] mt-[20px] justify-between items-center">
        <div class="grid lg:grid-cols-6 grid-cols-3 lg:gap-[30px] gap-[10px] justify-between lg:items-center">
            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        35
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Pengajar
                    </p>
                </div>
            </div>

            <div class="p-[28px_20px] flex flex-col items-center lg:trans gap-2ition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        4
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Staff
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        365
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Siswa
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        17
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Ruang Kelas
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        10
                    </p>
                    <p class="lg:text-heading-9 text-heading-12 text-[#A3A6AE]">
                        Fasilitas
                    </p>
                </div>
            </div>

            <div class="p-[26px_20px] flex flex-col items-center lg:gap-4 gap-2 transition-all duration-300">
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold counter lg:text-heading-2 text-heading-8">
                        7
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

    <!-- pengumuman section -->
    <section id="Up-to-date" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-bold lg:text-heading-6 text-heading-8 leading-[39px]">
                    Pengumuman
                </h2>
                <span class="flex flex-col font-normal lg:text-heading-9 text-heading-10">
                    Informasi Kegiatan SMP Kebangsaan
                </span>
            </div>

            <a href="categoryPage.html"
                class="lg:text-heading-8 text-heading-11 rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-blue-90">
                Selengkapnya
            </a>
        </div>

        <div class="grid lg:grid-cols-3 lg:gap-[30px] gap-[10px]">
            <a href="details.html" class="card-news">
                <div
                    class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300 bg-white">
                    <div
                        class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                        <p
                            class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">
                            SPORT
                        </p>
                        <img src="assets/images/thumbnails/th-cyclist.png" class="object-cover w-full h-full"
                            alt="thumbnail" />
                    </div>
                    <div class="card-info flex flex-col gap-[6px]">
                        <h3 class="font-bold text-lg leading-[27px]">
                            Bersepeda dapat membuat diri menjadi lebih baik lagi
                        </h3>
                        <p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card-news">
                <div
                    class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300 bg-white">
                    <div
                        class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                        <p
                            class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">
                            ENTERTAINMENT
                        </p>
                        <img src="assets/images/thumbnails/camp.png" class="object-cover w-full h-full"
                            alt="thumbnail" />
                    </div>
                    <div class="card-info flex flex-col gap-[6px]">
                        <h3 class="font-bold text-lg leading-[27px]">
                            Beberapa artis ini merayakan ultah di tengah hutan raya
                        </h3>
                        <p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card-news">
                <div
                    class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300 bg-white">
                    <div
                        class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                        <p
                            class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">
                            POLITIC
                        </p>
                        <img src="assets/images/thumbnails/th-demonstration.png" class="object-cover w-full h-full"
                            alt="thumbnail" />
                    </div>
                    <div class="card-info flex flex-col gap-[6px]">
                        <h3 class="font-bold text-lg leading-[27px]">
                            Terjadi demo pada ibu kota jakarta membuat macet parah
                        </h3>
                        <p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- about us -->
    <section id="about-us"
        class="lg:max-w-[1200px] mx-auto md:flex lg:justify-between items-center lg:p-[60px_100px] lg:mt-[50px] mt-[30px] px-4 lg:px-0">
        <div class="relative lg:mr-10">
            <div class="lg:w-[355px] lg:h-[488px] w-[255px] h-[288px] items-center mx-auto lg:mx-0">
                <img src="assets/images/thumbnails/image1.png" alt="icon" />
            </div>

            <div
                class="lg:absolute lg:w-[250px] transform lg:-translate-y-1/2 lg:top-[70%] lg:left-[200px] border bg-white lg:z-10 rounded-[20px] gap-4 p-4 flex flex-col shadow-md">
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Gedung milik sendiri</p>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Laboratorium</p>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Ruang kelas ber-AC</p>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Wi-fi Gratis</p>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Lapangan olahraga</p>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="assets/icons/ic_check.svg" alt="icon" />
                    </div>
                    <p class="font-medium">Diawasi CCTV</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col text-center items-center gap-[30px] lg:pl-[90px] py-[50px] lg:py-0 lg:mt-4">
            <h2 class="font-bold lg:text-heading-4 text-heading-5 two-lines">
                Prima dalam berprestasi berlandaskan iman & taqwa
            </h2>
            <a href=""
                class="text-white text-heading-10 font-semibold rounded-[30px] lg:p-[16px_32px] p-[14px_26px] bg-blue-50 transition-all duration-300 hover:shadow-[0_10px_20px_0_#bbdefb] w-fit">
                Daftar Sekarang
            </a>
        </div>
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

            <a href="categoryPage.html"
                class="lg:text-heading-8 text-heading-11 rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-blue-90">
                Selengkapnya
            </a>
        </div>

        <div class="flex flex-col items-start justify-between gap-5 lg:flex-row h-fit">
            <div
                class="featured-news-card relative w-full lg:h-[424px] h-[624px] flex flex-1 rounded-[20px] overflow-hidden">
                <img src="assets/images/thumbnails/th-featured-1.png"
                    class="absolute object-cover w-full h-full thumbnail" alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10"></div>

                <div class="card-detail w-full flex items-end lg:p-[30px] p-[50px] relative z-20">
                    <div class="flex flex-col gap-[10px]">
                        <p class="text-white">Featured</p>
                        <a href="details.html"
                            class="font-bold lg:text-heading-4 text-heading-9 lg:leading-[31px] leading-[22px] text-white transition-all duration-300">
                            Rela Tampil Menarik Depan Wanita, Pria Ini Jadi Bahan Bicaraan
                        </a>
                        <p class="text-white">12 Jun, 2024</p>
                    </div>
                </div>
            </div>

            <div
                class="lg:h-[424px] h-[324px] w-fit lg:px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
                <div class="lg:w-[455px] px-2 w-auto flex flex-col gap-5 shrink-0">
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/th-building.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Angga telah launching office space special edition
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/th-key.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Pembelian rumah saat ini tanpa perlu down payment
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/camp.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Tips trading ala generation Z bikin kita sukses untung
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/camp.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Bikin house party tanpa biaya mahal, begini tipsnya!
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/camp.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Bikin house party tanpa biaya mahal, begini tipsnya!
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="details.html" class="card py-[2px]">
                        <div
                            class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-blue-90 transition-all duration-300">
                            <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/images/thumbnails/camp.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center-center gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">
                                    Bikin house party tanpa biaya mahal, begini tipsnya!
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    12 Jun, 2024
                                </p>
                            </div>
                        </div>
                    </a>
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
            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="
            background-image: url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80');
          ">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-gray-800/60">
                    <h2 class="mt-4 text-xl font-semibold text-white">
                        Best website collections
                    </h2>
                    <p class="mt-1 text-lg text-white">
                        Website
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
