@extends('layouts.app')

@section('title', 'Carousel')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div
                        class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">Carousel table</h6>
                        <a href="{{ route('admin.carousel.create') }}"
                            class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 mr-10 inline-block whitespace-nowrap
                            text-center align-baseline font-bold uppercase leading-none text-white">
                            Tambah Baru
                        </a>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-2 overflow-x-auto">
                            @forelse ($carousels as $carousel)
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Title
                                            </th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status
                                            </th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center gap-2 px-2 py-1">
                                                    <div>
                                                        <img src="{{ Storage::url($carousel->thumbnail) }}"
                                                            class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-md w-30"
                                                            alt="thumbnails" />
                                                    </div>

                                                    <h6 class="mb-0 text-sm leading-normal ">
                                                        {{ $carousel->name }}
                                                    </h6>

                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                                    {{ $carousel->is_active }}
                                                </span>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <a href="{{ route('admin.carousel.edit', $carousel) }}"
                                                    class="inline-block my-auto text-xs text-center align-middle ease-in border-0 shadow-none cursor-pointer group leading-pro bg-yellow-400 lg:py-2 font-bold lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200">
                                                    Edit
                                                </a>
                                                <a
                                                    class="inline-block my-auto text-xs text-center align-middle ease-in border-0 shadow-none cursor-pointer group leading-pro bg-red-100 font-bold lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @empty
                                <p class="items-center p-2 text-center">
                                    Belum ada data
                                </p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
