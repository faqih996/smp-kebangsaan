<header id="Navbar" class="sticky top-0 z-50 w-full p-2 bg-white shadow-md">
    <!-- Social Media Navbar -->
    <nav id="social-media"
        class="xl:max-w-[1200px] mx-auto flex justify-between items-center xl:mt-[10px] mt-[5px] lg:px-4 px-2">
        <div class="logo-container flex lg:gap-[10px] gap-[8px] items-center">
            @if ($about)
                <div class="flex w-4 h-4 lg:w-6 lg:h-6 shrink-0">
                    <img src="assets/icons/phone-call.svg" alt="icon" />
                </div>
                <p class="text-heading-12 lg:text-heading-8">{{ $about->phone }}</p>

                <div class="flex w-4 h-4 lg:w-6 lg:h-6 shrink-0">
                    <img src="assets/icons/email.svg" alt="icon" />
                </div>
                <p class="text-heading-12 lg:text-heading-8">{{ $about->email }}</p>
            @else
                <div class="flex w-4 h-4 lg:w-6 lg:h-6 shrink-0">
                    <img src="assets/icons/phone-call.svg" alt="icon" />
                </div>
                <p class="text-heading-12 lg:text-heading-8">-</p>

                <div class="flex w-4 h-4 lg:w-6 lg:h-6 shrink-0">
                    <img src="assets/icons/email.svg" alt="icon" />
                </div>
                <p class="text-heading-12 lg:text-heading-8">-</p>
            @endif
        </div>

        <div class="flex items-center gap-2 md:flex">
            @forelse ($socmeds as $socmed)
                <a href="{{ url($socmed->link) }}" target="blank" class="flex w-4 h-4 lg:w-6 lg:h-6">
                    <img src="{{ Storage::url($socmed->icon) }}" alt="icon" />
                </a>
            @empty
                <a href="#" target="blank" class="flex w-4 h-4 lg:w-6 lg:h-6">
                    <img src="assets/icons/social.svg" alt="icon" />
                </a>
                <a href="#" target="blank" class="flex w-4 h-4 lg:w-6 lg:h-6">
                    <img src="assets/icons/tiktok.svg" alt="icon" />
                </a>
                <a href="#" target="blank" class="flex w-4 h-4 lg:w-6 lg:h-6">
                    <img src="assets/icons/youtube.svg" alt="icon" />
                </a>
            @endforelse
        </div>
    </nav>

    <!-- ====== Mega Menu Start -->
    <nav x-data="{
        navbarOpen: false,
        showMegaMenu: true
    }">
        <div class="bg-white">
            <div class="container mx-auto xl:max-w-[1200px] px-2 xl:px-4 mt-2">
                <div class="relative flex items-center justify-between -mx-4">
                    <div class="max-w-full px-4 w-80">
                        <a href="{{ route('front.index') }}" class="block w-full py-5">
                            <img src="{{ asset('assets/images/logos/logo-text3.svg') }}" alt="logo" />
                        </a>
                    </div>
                    <div class="flex items-center justify-between w-full px-4">
                        <div>
                            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                                id="navbarToggler"
                                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg py-[6px] lg:hidden">
                                <span class="relative my-[6px] block w-6 h-0.5 bg-gray-100"></span>
                                <span class="relative my-[6px] block w-6 h-0.5 bg-gray-100"></span>
                                <span class="relative my-[6px] block w-6 h-0.5 bg-gray-100"></span>
                            </button>
                            <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                                class="absolute right-4 top-full w-full max-w-[300px] rounded-lg bg-white px-6 py-5 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                                <ul class="block lg:flex">
                                    <li>
                                        <a href="{{ route('front.index') }}"
                                            class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex">
                                            Beranda
                                        </a>
                                    </li>

                                    <li class="relative" @click.outside="showMegaMenu = true">
                                        <button @click="showMegaMenu = !showMegaMenu"
                                            class="flex items-center justify-between w-full gap-2 py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex lg:w-auto lg:justify-center">
                                            Profile
                                            <span :class="showMegaMenu ? '-scale-y-100' : ''" class="duration-200">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 14.25C9.8125 14.25 9.65625 14.1875 9.5 14.0625L2.3125 7C2.03125 6.71875 2.03125 6.28125 2.3125 6C2.59375 5.71875 3.03125 5.71875 3.3125 6L10 12.5312L16.6875 5.9375C16.9688 5.65625 17.4062 5.65625 17.6875 5.9375C17.9688 6.21875 17.9688 6.65625 17.6875 6.9375L10.5 14C10.3437 14.1562 10.1875 14.25 10 14.25Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </button>

                                        <div :class="showMegaMenu ? 'hidden' : 'block'"
                                            class="w-full rounded-xl bg-white p-2 lg:absolute lg:left-0 lg:top-full lg:w-[400px] lg:p-8 lg:shadow-lg">
                                            <div class="grid gap-5">
                                                <div>
                                                    <div class="space-y-2">
                                                        <a href="{{ route('front.about') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_2436_4206)">
                                                                        <path
                                                                            d="M12 23.325C9.11255 23.325 6.18755 22.2375 3.97505 20.025C1.83755 17.8875 0.675049 15.0375 0.675049 12C0.675049 8.9625 1.83755 6.1125 4.01255 3.975C6.11255 1.8375 8.96255 0.675003 12 0.675003C15.0375 0.675003 17.8876 1.8375 20.025 4.0125C24.4501 8.4375 24.4501 15.6375 20.025 20.0625C17.8125 22.2375 14.8875 23.325 12 23.325ZM7.95005 20.775C10.5 21.9375 13.4625 21.9375 16.05 20.775L12 16.725L7.95005 20.775ZM4.08755 17.55C4.38755 18 4.76255 18.4125 5.17505 18.825C5.58755 19.2375 6.00005 19.575 6.45005 19.9125L10.5375 15.825C10.0125 15.6375 9.52505 15.3 9.11255 14.8875C8.70005 14.475 8.40005 13.9875 8.17505 13.4625L4.08755 17.55ZM13.4625 15.825L17.55 19.9125C18 19.6125 18.4125 19.2375 18.8251 18.825C19.2375 18.4125 19.575 18 19.9125 17.55L15.825 13.4625C15.6375 13.9875 15.3 14.475 14.8875 14.8875C14.475 15.3 13.9875 15.6 13.4625 15.825ZM3.22505 7.95C2.66255 9.1875 2.32505 10.575 2.32505 12C2.32505 13.425 2.62505 14.775 3.22505 16.05L7.27505 12L3.22505 7.95ZM16.725 12L20.775 16.05C21.9375 13.5 21.9375 10.5375 20.775 7.95L16.725 12ZM12 9.6C11.3625 9.6 10.7625 9.8625 10.3125 10.3125C9.86255 10.7625 9.60005 11.3625 9.60005 12C9.60005 12.6375 9.86255 13.2375 10.3125 13.6875C10.7625 14.1375 11.3625 14.4 12 14.4C12.6375 14.4 13.2375 14.1375 13.6875 13.6875C14.1375 13.2375 14.4 12.6375 14.4 12C14.4 11.3625 14.1375 10.7625 13.6875 10.3125C13.2375 9.8625 12.6375 9.6 12 9.6ZM4.08755 6.45L8.17505 10.5375C8.36255 10.0125 8.70005 9.525 9.11255 9.1125C9.52505 8.7 10.0125 8.4 10.5375 8.175L6.45005 4.0875C6.00005 4.3875 5.58755 4.7625 5.17505 5.175C4.76255 5.5875 4.42505 6 4.08755 6.45ZM14.8875 9.1125C15.3 9.525 15.6 10.0125 15.825 10.5375L19.9125 6.45C19.6125 6 19.2375 5.5875 18.8251 5.175C18.4125 4.7625 18 4.425 17.55 4.0875L13.4625 8.175C13.9875 8.4 14.475 8.7 14.8875 9.1125ZM7.95005 3.225L12 7.275L16.05 3.225C14.8125 2.6625 13.425 2.325 12 2.325C10.575 2.325 9.22505 2.6625 7.95005 3.225Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_2436_4206">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Tentang Sekolah
                                                                </h3>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('front.vision-mission') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_2436_4206)">
                                                                        <path
                                                                            d="M12 23.325C9.11255 23.325 6.18755 22.2375 3.97505 20.025C1.83755 17.8875 0.675049 15.0375 0.675049 12C0.675049 8.9625 1.83755 6.1125 4.01255 3.975C6.11255 1.8375 8.96255 0.675003 12 0.675003C15.0375 0.675003 17.8876 1.8375 20.025 4.0125C24.4501 8.4375 24.4501 15.6375 20.025 20.0625C17.8125 22.2375 14.8875 23.325 12 23.325ZM7.95005 20.775C10.5 21.9375 13.4625 21.9375 16.05 20.775L12 16.725L7.95005 20.775ZM4.08755 17.55C4.38755 18 4.76255 18.4125 5.17505 18.825C5.58755 19.2375 6.00005 19.575 6.45005 19.9125L10.5375 15.825C10.0125 15.6375 9.52505 15.3 9.11255 14.8875C8.70005 14.475 8.40005 13.9875 8.17505 13.4625L4.08755 17.55ZM13.4625 15.825L17.55 19.9125C18 19.6125 18.4125 19.2375 18.8251 18.825C19.2375 18.4125 19.575 18 19.9125 17.55L15.825 13.4625C15.6375 13.9875 15.3 14.475 14.8875 14.8875C14.475 15.3 13.9875 15.6 13.4625 15.825ZM3.22505 7.95C2.66255 9.1875 2.32505 10.575 2.32505 12C2.32505 13.425 2.62505 14.775 3.22505 16.05L7.27505 12L3.22505 7.95ZM16.725 12L20.775 16.05C21.9375 13.5 21.9375 10.5375 20.775 7.95L16.725 12ZM12 9.6C11.3625 9.6 10.7625 9.8625 10.3125 10.3125C9.86255 10.7625 9.60005 11.3625 9.60005 12C9.60005 12.6375 9.86255 13.2375 10.3125 13.6875C10.7625 14.1375 11.3625 14.4 12 14.4C12.6375 14.4 13.2375 14.1375 13.6875 13.6875C14.1375 13.2375 14.4 12.6375 14.4 12C14.4 11.3625 14.1375 10.7625 13.6875 10.3125C13.2375 9.8625 12.6375 9.6 12 9.6ZM4.08755 6.45L8.17505 10.5375C8.36255 10.0125 8.70005 9.525 9.11255 9.1125C9.52505 8.7 10.0125 8.4 10.5375 8.175L6.45005 4.0875C6.00005 4.3875 5.58755 4.7625 5.17505 5.175C4.76255 5.5875 4.42505 6 4.08755 6.45ZM14.8875 9.1125C15.3 9.525 15.6 10.0125 15.825 10.5375L19.9125 6.45C19.6125 6 19.2375 5.5875 18.8251 5.175C18.4125 4.7625 18 4.425 17.55 4.0875L13.4625 8.175C13.9875 8.4 14.475 8.7 14.8875 9.1125ZM7.95005 3.225L12 7.275L16.05 3.225C14.8125 2.6625 13.425 2.325 12 2.325C10.575 2.325 9.22505 2.6625 7.95005 3.225Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_2436_4206">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Visi & Misi
                                                                </h3>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('front.greeting') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_2436_4206)">
                                                                        <path
                                                                            d="M12 23.325C9.11255 23.325 6.18755 22.2375 3.97505 20.025C1.83755 17.8875 0.675049 15.0375 0.675049 12C0.675049 8.9625 1.83755 6.1125 4.01255 3.975C6.11255 1.8375 8.96255 0.675003 12 0.675003C15.0375 0.675003 17.8876 1.8375 20.025 4.0125C24.4501 8.4375 24.4501 15.6375 20.025 20.0625C17.8125 22.2375 14.8875 23.325 12 23.325ZM7.95005 20.775C10.5 21.9375 13.4625 21.9375 16.05 20.775L12 16.725L7.95005 20.775ZM4.08755 17.55C4.38755 18 4.76255 18.4125 5.17505 18.825C5.58755 19.2375 6.00005 19.575 6.45005 19.9125L10.5375 15.825C10.0125 15.6375 9.52505 15.3 9.11255 14.8875C8.70005 14.475 8.40005 13.9875 8.17505 13.4625L4.08755 17.55ZM13.4625 15.825L17.55 19.9125C18 19.6125 18.4125 19.2375 18.8251 18.825C19.2375 18.4125 19.575 18 19.9125 17.55L15.825 13.4625C15.6375 13.9875 15.3 14.475 14.8875 14.8875C14.475 15.3 13.9875 15.6 13.4625 15.825ZM3.22505 7.95C2.66255 9.1875 2.32505 10.575 2.32505 12C2.32505 13.425 2.62505 14.775 3.22505 16.05L7.27505 12L3.22505 7.95ZM16.725 12L20.775 16.05C21.9375 13.5 21.9375 10.5375 20.775 7.95L16.725 12ZM12 9.6C11.3625 9.6 10.7625 9.8625 10.3125 10.3125C9.86255 10.7625 9.60005 11.3625 9.60005 12C9.60005 12.6375 9.86255 13.2375 10.3125 13.6875C10.7625 14.1375 11.3625 14.4 12 14.4C12.6375 14.4 13.2375 14.1375 13.6875 13.6875C14.1375 13.2375 14.4 12.6375 14.4 12C14.4 11.3625 14.1375 10.7625 13.6875 10.3125C13.2375 9.8625 12.6375 9.6 12 9.6ZM4.08755 6.45L8.17505 10.5375C8.36255 10.0125 8.70005 9.525 9.11255 9.1125C9.52505 8.7 10.0125 8.4 10.5375 8.175L6.45005 4.0875C6.00005 4.3875 5.58755 4.7625 5.17505 5.175C4.76255 5.5875 4.42505 6 4.08755 6.45ZM14.8875 9.1125C15.3 9.525 15.6 10.0125 15.825 10.5375L19.9125 6.45C19.6125 6 19.2375 5.5875 18.8251 5.175C18.4125 4.7625 18 4.425 17.55 4.0875L13.4625 8.175C13.9875 8.4 14.475 8.7 14.8875 9.1125ZM7.95005 3.225L12 7.275L16.05 3.225C14.8125 2.6625 13.425 2.325 12 2.325C10.575 2.325 9.22505 2.6625 7.95005 3.225Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_2436_4206">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Sambutan Kepala Sekolah
                                                                </h3>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('front.teacher') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.9374 23.3625H7.4999C5.7749 23.3625 4.3124 22.05 4.1249 20.3625C4.1249 20.2875 4.0874 20.25 4.0874 20.175V2.96249C4.0874 1.68749 5.0999 0.674988 6.3749 0.674988H17.5499C18.8249 0.674988 19.8374 1.68749 19.8374 2.96249V16.0125C19.8374 17.2875 18.8249 18.3 17.5499 18.3H7.4999C7.0499 18.3 6.5999 18.4875 6.2999 18.7875C5.9624 19.0875 5.8124 19.5375 5.8124 19.9875C5.8124 20.925 6.5624 21.675 7.4999 21.675H18.9374C19.3874 21.675 19.7999 22.05 19.7999 22.5375C19.7999 23.025 19.4249 23.3625 18.9374 23.3625ZM6.4124 2.36249C6.0749 2.36249 5.8124 2.62499 5.8124 2.96249V17.0625C6.3374 16.7625 6.8999 16.6125 7.4999 16.6125H17.5874C17.9249 16.6125 18.1874 16.35 18.1874 16.0125V2.96249C18.1874 2.62499 17.9249 2.36249 17.5874 2.36249H6.4124Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M14.6997 6.6H9.37471C8.92471 6.6 8.51221 6.225 8.51221 5.7375C8.51221 5.25 8.88721 4.875 9.37471 4.875H14.6997C15.1497 4.875 15.5622 5.25 15.5622 5.7375C15.5622 6.225 15.1872 6.6 14.6997 6.6Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Guru
                                                                </h3>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('front.facility') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.9374 23.3625H7.4999C5.7749 23.3625 4.3124 22.05 4.1249 20.3625C4.1249 20.2875 4.0874 20.25 4.0874 20.175V2.96249C4.0874 1.68749 5.0999 0.674988 6.3749 0.674988H17.5499C18.8249 0.674988 19.8374 1.68749 19.8374 2.96249V16.0125C19.8374 17.2875 18.8249 18.3 17.5499 18.3H7.4999C7.0499 18.3 6.5999 18.4875 6.2999 18.7875C5.9624 19.0875 5.8124 19.5375 5.8124 19.9875C5.8124 20.925 6.5624 21.675 7.4999 21.675H18.9374C19.3874 21.675 19.7999 22.05 19.7999 22.5375C19.7999 23.025 19.4249 23.3625 18.9374 23.3625ZM6.4124 2.36249C6.0749 2.36249 5.8124 2.62499 5.8124 2.96249V17.0625C6.3374 16.7625 6.8999 16.6125 7.4999 16.6125H17.5874C17.9249 16.6125 18.1874 16.35 18.1874 16.0125V2.96249C18.1874 2.62499 17.9249 2.36249 17.5874 2.36249H6.4124Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M14.6997 6.6H9.37471C8.92471 6.6 8.51221 6.225 8.51221 5.7375C8.51221 5.25 8.88721 4.875 9.37471 4.875H14.6997C15.1497 4.875 15.5622 5.25 15.5622 5.7375C15.5622 6.225 15.1872 6.6 14.6997 6.6Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Fasilitas
                                                                </h3>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('front.extracurricular') }}"
                                                            class="flex flex-col gap-4 p-4 duration-200 rounded-lg group hover:bg-gray-1 lg:flex-row">
                                                            <div class="text-primary">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.9374 23.3625H7.4999C5.7749 23.3625 4.3124 22.05 4.1249 20.3625C4.1249 20.2875 4.0874 20.25 4.0874 20.175V2.96249C4.0874 1.68749 5.0999 0.674988 6.3749 0.674988H17.5499C18.8249 0.674988 19.8374 1.68749 19.8374 2.96249V16.0125C19.8374 17.2875 18.8249 18.3 17.5499 18.3H7.4999C7.0499 18.3 6.5999 18.4875 6.2999 18.7875C5.9624 19.0875 5.8124 19.5375 5.8124 19.9875C5.8124 20.925 6.5624 21.675 7.4999 21.675H18.9374C19.3874 21.675 19.7999 22.05 19.7999 22.5375C19.7999 23.025 19.4249 23.3625 18.9374 23.3625ZM6.4124 2.36249C6.0749 2.36249 5.8124 2.62499 5.8124 2.96249V17.0625C6.3374 16.7625 6.8999 16.6125 7.4999 16.6125H17.5874C17.9249 16.6125 18.1874 16.35 18.1874 16.0125V2.96249C18.1874 2.62499 17.9249 2.36249 17.5874 2.36249H6.4124Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M14.6997 6.6H9.37471C8.92471 6.6 8.51221 6.225 8.51221 5.7375C8.51221 5.25 8.88721 4.875 9.37471 4.875H14.6997C15.1497 4.875 15.5622 5.25 15.5622 5.7375C15.5622 6.225 15.1872 6.6 14.6997 6.6Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3
                                                                    class="mb-1 text-base font-semibold duration-200 text-dark group-hover:text-primary">
                                                                    Extrakulikuler
                                                                </h3>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="{{ route('front.information') }}"
                                            class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex">
                                            Informasi
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('front.gallery') }}"
                                            class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex">
                                            Galeri
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('front.article') }}"
                                            class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex">
                                            Artikel
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="justify-end hidden gap-3 pr-16 sm:flex lg:pr-0">
                            <a href="{{ route('login') }}"
                                class="rounded-lg bg-blue-90 px-5 py-2.5 text-base font-medium text-white">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== Mega Menu End -->
</header>
