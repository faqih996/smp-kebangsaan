@extends('layouts.app')

@section('title', 'Extracurricular')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl">
                    <div
                        class="flex items-center justify-between p-3 pb-0 mb-0 border-b-0 lg:p-6 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">Extracurricular table</h6>
                        <a href="{{ route('admin.extracurricular.create') }}"
                            class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
                            text-center align-baseline font-bold uppercase leading-none text-white">
                            Tambah Baru
                        </a>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="overflow-x-auto lg:p-2">

                            <table class="items-center w-full mb-0 align-top border-collapse text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-4 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none lg:px-6 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Extrakulikuler
                                        </th>
                                        <th
                                            class="px-4 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none lg:px-6 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Pembina
                                        </th>
                                        <th
                                            class="px-4 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none lg:px-6 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Jadwal
                                        </th>
                                        <th
                                            class="px-4 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none lg:px-6 tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        </th>
                                    </tr>
                                </thead>

                                @forelse ($extracurriculars as $extracurricular)
                                    <tbody>
                                        <tr>
                                            <td
                                                class="align-middle bg-transparent lg:p-2 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center gap-2 px-2 py-1">
                                                    <div>
                                                        <img src="{{ Storage::url($extracurricular->thumbnail1) }}"
                                                            class="items-center justify-center hidden mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-md lg:h-20 lg:w-30 lg:block"
                                                            alt="thumbnails" />
                                                    </div>

                                                    <h6 class="mb-0 text-sm leading-normal ">
                                                        {{ $extracurricular->name }}
                                                    </h6>

                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                                <h6 class="mb-0 text-sm leading-normal ">
                                                    {{ $extracurricular->coach }}
                                                </h6>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                                <h6 class="mb-0 text-sm leading-normal ">
                                                    {{ $extracurricular->jadwal }}
                                                </h6>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                                <div class="flex gap-1 lg:gap-3">
                                                    <a href="{{ route('admin.extracurricular.edit', $extracurricular->slug) }}"
                                                        class="inline-block my-auto text-xs text-center align-middle ease-in border-0 shadow-none cursor-pointer group leading-pro bg-yellow-400 lg:py-2 font-bold lg:px-4 py-1 px-2 rounded-md text-black ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200">
                                                        Edit
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.extracurricular.destroy', $extracurricular->slug) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="inline-block my-auto text-xs text-center align-middle ease-in border-0 shadow-none cursor-pointer group leading-pro bg-red-100 font-bold lg:py-2 lg:px-4 py-1 px-2 rounded-md text-white ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @empty
                                    <tbody>
                                        <tr>
                                            <td class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                                colspan="3">
                                                Belum ada Data
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection