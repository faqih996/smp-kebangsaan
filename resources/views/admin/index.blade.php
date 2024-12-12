@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- statistic -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 bg-white shadow-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none max-w-full px-3">
                                <div>
                                    <h3 class="item-center mb-2 text-heading-3 font-bold">{{ $teachers }}</h3>
                                    <p class="text-center mb-2 font-sans text-heading-5 font-normal leading-normal">
                                        Guru
                                    </p>
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
                                    @if ($about)
                                        <h3 class="item-center mb-2 text-heading-3 font-bold">{{ $about->jumlah_siswa }}
                                        </h3>
                                    @else
                                        <h3 class="item-center mb-2 text-heading-3 font-bold">0</h3>
                                    @endif

                                    <p class="mb-2 font-sans text-heading-5 font-normal leading-normal">
                                        Siswa
                                    </p>
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
                                    <h3 class="mb-2 text-heading-3 font-bold">{{ $contact }}</h3>
                                    <p class="mb-2 font-sans text-heading-5 font-normal leading-normal">
                                        Pesan
                                    </p>
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
                                    <h3 class="mb-2 text-heading-3 font-bold">{{ $article }}</h3>
                                    <p class="mb-2 font-sans text-heading-5 font-normal leading-normal">
                                        Artikel
                                    </p>
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
                            <h6 class="mb-2">Artikel</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Title</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Created At</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-t">
                                @forelse ($articles as $article)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="{{ Storage::url($article->thumbnail1) }}"
                                                        class="inline-flex items-center justify-center h-20 mr-2 text-sm text-white transition-all duration-200 ease-in-out w-30"
                                                        alt="thumbnails" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">{{ $article->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">
                                                {{ $article->category->name }}</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight">{{ $article->created_at->format('d M Y') }}</span>
                                        </td>

                                        <td
                                            class="items-center p-1 bg-transparent border-b-0 align-center whitespace-nowrap shadow-transparent">
                                            <div class="flex gap-2">
                                                <a href="{{ route('admin.article.edit', $article->slug) }}"
                                                    class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                                    <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                        aria-hidden="true">Edit</p>
                                                </a>
                                                <form action="{{ route('admin.article.destroy', $article->slug) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                                        <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                            aria-hidden="true">Delete</p>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td
                                            class="px-6 py-3 text-center text-xs font-bold text-gray-500 whitespace-nowrap border-b-0">
                                            No data found.
                                        </td>
                                    </tr>
                                @endforelse
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
                            @forelse ($socmeds as $socmed)
                                <li
                                    class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <img src="{{ Storage::url($socmed->icon) }}"
                                            class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                        </img>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                                {{ $socmed->name }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.socialmedia.edit', $socmed->slug) }}"
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </a>
                                        <form action="{{ route('admin.socialmedia.destroy', $socmed->slug) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                                <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true">Delete</p>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <tr>
                                    <td
                                        class="px-6 py-3 text-center text-xs font-bold text-gray-500 whitespace-nowrap border-b-0">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
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
                            <h6 class="mb-2">Pesan</h6>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Subject</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Kategori</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Pengirim</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none tracking-none whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @forelse ($contacts as $contact)
                                    <tr>
                                        <td
                                            class="p-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-heading-9 leading-normal">
                                                        {{ $contact->subject }}
                                                    </h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        {{ $contact->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-heading-10 font-semibold leading-tight">
                                                {{ $contact->category }}
                                            </p>
                                        </td>

                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-heading-10 font-semibold leading-tight">
                                                {{ $contact->name }}
                                            </p>
                                        </td>

                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="{{ route('admin.mail.show', $contact->slug) }}"
                                                class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                                <p class="bg-green-600 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true">Lihat</p>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td
                                            class="px-6 py-3 text-center text-xs font-bold text-gray-500 whitespace-nowrap border-b-0">
                                            No data found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 ">Informasi</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @forelse ($informations as $information)
                                <li
                                    class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <img src="{{ Storage::url($information->thumbnail) }}"
                                            class="items-center inline-block w-8 h-8 mr-4 text-center bg-center fill-current stroke-none rounded-xl">
                                        </img>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                                {{ $information->name }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.information.edit', $information->slug) }}"
                                            class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                            <p class="bg-yellow-400 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true">Edit</p>
                                        </a>
                                        <form action="{{ route('admin.information.destroy', $information->slug) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="inline-block my-auto text-xs font-bold text-center align-middle transition-all ease-in bg-transparent border-0 shadow-none cursor-pointer group leading-pro text-slate-700">
                                                <p class="bg-red-100 lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true">Delete</p>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <li
                                    class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700">
                                                No data found.
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cards -->
@endsection
