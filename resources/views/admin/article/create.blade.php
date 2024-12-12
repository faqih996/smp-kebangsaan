@extends('layouts.app')

@section('title', 'Create Article')

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
                                <p class="text-sm leading-normal uppercase">Create Article</p>
                                <form method="POST" action="{{ route('admin.article.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="name"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Judul</label>
                                                <input type="text" name="name" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mt-4">
                                                <label for="category"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Category</label>
                                                <select name="category_id" id="category_id"
                                                    class="w-full py-3 pl-3 border rounded-lg border-slate-300">
                                                    <option value="">Choose Category</option>
                                                    @forelse($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="is_featured"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Status</label>
                                                <select type="text" name="is_featured" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                                <option value="featured">Featured</option>
                                                <option value="not_featured">Not Featured</option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="path_video"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Path
                                                    Video</label>
                                                <input type="text" name="path_video" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="description"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Description</label>
                                                <textarea type="text" name="description" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease h-36 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none"></textarea>
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail1"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                    1
                                                </label>
                                                <input type="file" name="thumbnail1" required autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail2"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                    2
                                                </label>
                                                <input type="file" name="thumbnail2" autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail3"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                    3
                                                </label>
                                                <input type="file" name="thumbnail3" autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail4"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                    4
                                                </label>
                                                <input type="file" name="thumbnail4" autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail5"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                    5
                                                </label>
                                                <input type="file" name="thumbnail5" autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="flex items-center justify-end mt-4 z-200">
                                        <button type="submit"
                                            class="px-3 py-3 font-bold text-white rounded-md bg-green-600">
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

@push('after-script')
    <script type="text/javascript">
        // add row
        $("#addBenefitRow").click(function() {
            var html = '';
            html +=
                '<input type="text" name="benefit[]" class="mt-2 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />';

            $('#newBenefitRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>
@endpush
