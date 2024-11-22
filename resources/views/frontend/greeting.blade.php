@extends('layouts.front')

@section('title', 'Greeting')

@section('content')
    <section class="xl:max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:flex">
                <div class="lg:w-[455px] lg:h-[588px] w-[255px] h-[288px] mx-auto lg:mx-0">
                    <img src="assets/images/thumbnails/image1.png" alt="icon" />
                </div>

                <div class="mt-12 lg:w-1/2 lg:px-6 lg:mt-0">
                    <p class="text-5xl font-semibold text-blue-90 ">“</p>

                    <h1 class="text-2xl font-semibold text-blue-90 lg:text-3xl lg:w-96">
                        Help us improve our productivity
                    </h1>

                    <p class="max-w-lg mt-6">
                        “ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                        tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                        aperiam dolorum, obcaecati corrupti aspernatur a.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                        tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                        aperiam dolorum, obcaecati corrupti aspernatur a.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                        tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                        aperiam dolorum, obcaecati corrupti aspernatur a. ”
                    </p>

                    <h3 class="mt-6 text-lg font-medium text-blue-90">Mia Brown</h3>
                    <p class="text-gray-600 ">Marketing Manager at Stech</p>

                </div>
            </div>
        </div>
    </section>
@endsection
