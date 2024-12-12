<!-- sidenav  -->
<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 text-black opacity-50 cursor-pointer fas fa-times xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('front.index') }}"
            target="_blank">
            <img src="{{ asset('assets/images/logos/logo-text3.svg') }}"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-10" alt="main_logo" />
            <img src="{{ asset('assets/images/logos/logo-text3.svg') }}"
                class="hidden h-full max-w-full transition-all duration-200 ease-nav-brand max-h-10" alt="main_logo" />
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.dashboard.index') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.dashboard.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.about.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.about.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tentang Sekolah</span>
                </a>
            </li>


            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.vision-mission.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.vision-mission.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Visi Misi</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.speach.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.speach.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sambutan</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.teacher.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.teacher.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Guru</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.facility.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.facility.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Fasilitas</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.extracurricular.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.extracurricular.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Extrakulikuler</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.socialmedia.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.socialmedia.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Social Media</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.mail.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.mail.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Email</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Pages
                </h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.carousel.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.carousel.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Carousel</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.category.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.category.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Kategori</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.information.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.information.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Informasi</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.promotion.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.promotion.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Promosi</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.article.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.article.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Artikel</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.gallery.*') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.gallery.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Galeri Kegiatan</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('admin.dashboard.profile') ? 'bg-blue-5 font-bold text-blue-80' : 'text-slate-700' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors"
                    href="{{ route('admin.dashboard.profile') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>

            <li class="mt-0.5 w-full ">
                <a class="py-2.7 rounded-md text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div
                        class=" mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none text-red-100 ease">Log out</span>
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>

        </ul>
    </div>

</aside>
<!-- end sidenav -->

@push('after-script')
    <script type="text/javascript">
        // add row
        document.querySelectorAll('a[onclick]').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        });
    </script>
@endpush
