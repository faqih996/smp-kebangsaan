@extends('layouts.app')

@section('title', 'Edit Sambutan')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-2 overflow-x-auto">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="w-full py-3 text-white bg-red-500 rounded-3xl">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            <div class="flex-auto p-6">
                                <p class="text-sm leading-normal uppercase">Edit Sambutan</p>
                                <form method="POST" action="{{ route('admin.speach.update', $speach) }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">

                                            <div class="mb-4">
                                                <label for="speaker_name"
                                                    class="block text-sm font-bold text-slate-700">Pemberi Sambutan</label>
                                                <input type="text" id="address" name="speaker_name"
                                                    value="{{ $speach->speaker_name }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="jabatan"
                                                    class="block text-sm font-bold text-slate-700">Jabatan</label>
                                                <input type="text" id="address" name="jabatan"
                                                    value="{{ $speach->jabatan }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Logo
                                                    Sekolah
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($speach->thumbnail) }}" alt="thumbnail"
                                                        class="mb-2 w-30">
                                                    <input type="file" name="thumbnail"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="description"
                                                    class="block text-sm font-bold text-slate-700">Sambutan</label>
                                                <input type="text" id="description" name="description"
                                                    value="{{ $speach->description }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="flex items-end mt-4 z-200">
                                        <button type="submit"
                                            class="px-6 py-4 font-bold text-green-100 rounded-md bg-blue-70">
                                            Simpan
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
