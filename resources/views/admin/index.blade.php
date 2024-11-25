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
                            <tbody>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/US.png" alt="thumbnail" />
                                            </div>
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Country:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Sales:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Value:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Bounce:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/DE.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    Germany
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                3.900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                $440,000
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                40.22%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/GB.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    Great Britain
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                1.400
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                $190,700
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                23.44%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/BR.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    Brasil
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                562
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                $143,960
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                32.14%
                                            </h6>
                                        </div>
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
                            <tbody>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Name:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Email:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Category:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Subject:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Name:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Email:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Category:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Subject:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Name:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Email:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Category:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Subject:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Name:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Email:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Category:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Subject:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <p class="mb-0 text-xs font-semibold leading-tight">
                                                    Name:
                                                </p>
                                                <h6 class="mb-0 text-sm leading-normal">
                                                    United States
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Email:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                2500
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Category:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                $230,900
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                Subject:
                                            </p>
                                            <h6 class="mb-0 text-sm leading-normal">
                                                29.9%
                                            </h6>
                                        </div>
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
