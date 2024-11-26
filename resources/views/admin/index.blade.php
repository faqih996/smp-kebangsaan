@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- statistic -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">
                                        Today's Money
                                    </p>
                                    <h5 class="mb-2 font-bold">$53,000</h5>
                                    <p class="mb-0">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">
                                            +55%
                                        </span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">
                                        Today's Money
                                    </p>
                                    <h5 class="mb-2 font-bold">$53,000</h5>
                                    <p class="mb-0">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">
                                            +55%
                                        </span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">
                                        Today's Money
                                    </p>
                                    <h5 class="mb-2 font-bold">$53,000</h5>
                                    <p class="mb-0">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">
                                            +55%
                                        </span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">
                                        Today's Money
                                    </p>
                                    <h5 class="mb-2 font-bold">$53,000</h5>
                                    <p class="mb-0">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">
                                            +55%
                                        </span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- article -->
        <div class="flex flex-wrap mt-6 -mx-3 ">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2">Article</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Title</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Created At</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-t">
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}"
                                                    class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                    alt="thumbnails" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-normal">
                                            $2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight">Kegiatan Sosial</span>
                                    </td>

                                    <td
                                        class="items-center p-2 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </button>
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Delete</p>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}"
                                                    class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                    alt="thumbnails" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-normal">
                                            $2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight">Kegiatan Sosial</span>
                                    </td>

                                    <td
                                        class="items-center p-2 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </button>
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Delete</p>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}"
                                                    class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                    alt="thumbnails" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-normal">
                                            $2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight">Kegiatan Sosial</span>
                                    </td>

                                    <td
                                        class="items-center p-2 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </button>
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Delete</p>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}"
                                                    class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                    alt="thumbnails" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-normal">
                                            $2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight">Kegiatan Sosial</span>
                                    </td>

                                    <td
                                        class="items-center p-2 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </button>
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Delete</p>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="{{ asset('assets/images/thumbnails/th-sunbathe.png') }}"
                                                    class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                    alt="thumbnails" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm font-semibold leading-normal">
                                            $2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight">Kegiatan Sosial</span>
                                    </td>

                                    <td
                                        class="items-center p-2 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </button>
                                        <button
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Delete</p>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 ">Article Categories</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- email --}}
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2">Mail</h6>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Sender</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Subject</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td
                                        class="p-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    John Michael
                                                </h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                    john@creative-tim.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            Manager
                                        </p>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <a href="javascript:;"
                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                            gini loh pak sebenernya aku
                                        </a>
                                    </td>

                                    <td
                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <button
                                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200">
                                            Open
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 ">Social Media</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/icons/alarm.svg') }}"
                                        class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                    </img>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                            Devices
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Edit</p>
                                    </button>
                                    <button
                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true">Delete</p>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cards -->
@endsection
