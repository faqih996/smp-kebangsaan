@extends('layouts.app')

@section('title', 'Edit Article')

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
                                <p class="text-sm leading-normal uppercase">Edit Article</p>
                                <form method="POST" action="{{ route('admin.article.update', $article->slug) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="name"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Title</label>
                                                <input type="text" name="name" value="{{ $article->name }}" required
                                                    autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mt-4">
                                                <label for="category"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Category</label>
                                                <select name="category_id" id="category_id"
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                                    <option value="">Choose Category</option>
                                                    @forelse($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if (old('category_id', $article->category_id) == $category->id) selected @endif>
                                                            {{ $category->name }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="is_featured"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Status</label>
                                                <select type="text" name="is_featured" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                                <option value="featured" @if (old('is_featured', $article->is_featured) == 'featured') selected @endif>
                                                    Featured</option>
                                                <option value="not_featured"
                                                    @if (old('is_featured', $article->is_featured) == 'not_featured') selected @endif>Not Featured</option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="path_video"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Path
                                                    Video</label>
                                                <input type="text" name="path_video" value="{{ $article->path_video }}"
                                                    required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="description"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Description</label>
                                                <textarea type="text" name="description" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease h-36 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">{{ $article->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($article->thumbnail1) }}" alt="thumbnail"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail1"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($article->thumbnail2) }}" alt="thumbnail2"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail2"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($article->thumbnail3) }}" alt="thumbnail3"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail3"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($article->thumbnail4) }}" alt="thumbnail"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail4"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($article->thumbnail5) }}" alt="thumbnail"
                                                        class="rounded-2xl object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail5"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="flex items-center justify-end mt-4 z-200">
                                        <button type="submit"
                                            class="px-6 py-4 font-bold text-green-100 rounded-md bg-blue-70">
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
