@extends('layouts.front')

@section('title', ' About')

@section('content')

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
