@extends('layouts.front')

@section('title', 'Facility')

@section('content')
    <section id="extracurricular" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] lg:mt-[70px] mt-[30px] px-4 lg:px-0">
        <div class="flex flex-col text-center gap-[14px] items-center">
            <h2 class="font-bold text-[26px] leading-[39px]">
                Fasilitas SMP Kebangsaan
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-8 mt-8 lg:grid-cols-2">
            <div class="rounded-md hover:ring-2 hover:ring-blue-90">
                <img class="relative z-10 object-cover w-full rounded-md h-96"
                    src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div
                    class="relative z-20 items-center max-w-lg p-4 mx-auto text-center rounded-md shadow -mt-14 backdrop-blur-sm bg-blue-70/60">
                    <a href="#" class="items-center font-semibold text-center text-white">
                        Ruang Osis
                    </a>
                </div>
            </div>

            <div class="rounded-md hover:ring-2 hover:ring-blue-90">
                <img class="relative z-10 object-cover w-full rounded-md h-96"
                    src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div
                    class="relative z-20 items-center max-w-lg p-4 mx-auto text-center rounded-md shadow -mt-14 backdrop-blur-sm bg-blue-70/60">
                    <a href="#" class="items-center font-semibold text-center text-white">
                        Ruang Osis
                    </a>
                </div>
            </div>

            <div class="rounded-md hover:ring-2 hover:ring-blue-90">
                <img class="relative z-10 object-cover w-full rounded-md h-96"
                    src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div
                    class="relative z-20 items-center max-w-lg p-4 mx-auto text-center rounded-md shadow -mt-14 backdrop-blur-sm bg-blue-70/60">
                    <a href="#" class="items-center font-semibold text-center text-white">
                        Ruang Osis
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
