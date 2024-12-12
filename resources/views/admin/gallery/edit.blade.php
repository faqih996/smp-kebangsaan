@extends('layouts.app')

@section('title', 'Edit Gallery')

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
                                <p class="text-sm leading-normal uppercase">Edit Image</p>
                                <form method="POST" action="{{ route('admin.gallery.update', $gallery->slug) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="name"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Title</label>
                                                <input type="text" name="name" value="{{ $gallery->name }}" required
                                                    autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="type"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Type</label>
                                                <select id="type" name="type" required
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-700 focus:outline-none">
                                                    <option value="banner"
                                                        {{ old('type', $gallery->type) === 'banner' ? 'selected' : '' }}>
                                                        Banner</option>
                                                    <option value="square"
                                                        {{ old('type', $gallery->type) === 'square' ? 'selected' : '' }}>
                                                        Square</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="is_active"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Status</label>
                                                <select id="is_active" name="is_active" required
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-700 focus:outline-none">
                                                    <option value="active"
                                                        {{ old('is_active', $gallery->is_active) === 'active' ? 'selected' : '' }}>
                                                        Active</option>
                                                    <option value="not_active"
                                                        {{ old('is_active', $gallery->is_active) === 'not_active' ? 'selected' : '' }}>
                                                        Not Active</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($gallery->thumbnail) }}"
                                                        alt="gallery thumbnail"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="flex items-center justify-end mt-4 z-200">
                                        <button type="submit"
                                            class="px-3 py-3 font-bold text-white rounded-md bg-green-600">
                                            Update
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
