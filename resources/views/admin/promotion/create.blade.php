@extends('layouts.app')

@section('title', 'Create Promotion')

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
                                <p class="text-sm leading-normal uppercase">Create Promotion</p>
                                <form method="POST" action="{{ route('admin.promotion.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="title"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Judul</label>
                                                <input type="text" name="title" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="subtitle"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Sub
                                                    Judul</label>
                                                <input type="text" name="subtitle" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="link"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Link</label>
                                                <input type="text" name="link" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="path_video"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Path
                                                    Video</label>
                                                <input type="text" name="path_video" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <input type="file" name="thumbnail" required autofocus
                                                    class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="flex flex-col py-2 mb-4">
                                                <label for="name"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Benefit</label>
                                                <input type="text" name="benefit[]" required autofocus
                                                    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                                <div class="flex flex-col" id="newBenefitRow"></div>
                                            </div>
                                            <button type="button"
                                                class="px-3 py-2 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                                id="addBenefitRow">
                                                Tambahkan +
                                            </button>
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
