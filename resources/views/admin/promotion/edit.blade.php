@extends('layouts.app')

@section('title', 'Edit Promotion')

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
                                <p class="text-sm leading-normal uppercase">Edit Promotion Sekolah</p>
                                <form method="POST" action="{{ route('admin.promotion.update', $promotion->slug) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="title"
                                                    class="block text-sm font-bold text-slate-700">Judul</label>
                                                <input type="text" id="title" name="title"
                                                    value="{{ $promotion->title }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="subtitle" class="block text-sm font-bold text-slate-700">Sub
                                                    Judul</label>
                                                <input type="text" id="subtitle" name="subtitle"
                                                    value="{{ $promotion->subtitle }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="link"
                                                    class="block text-sm font-bold text-slate-700">Link</label>
                                                <input type="text" id="link" name="link"
                                                    value="{{ $promotion->link }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="path_video" class="block text-sm font-bold text-slate-700">Path
                                                    Video</label>
                                                <input type="text" id="path_video" name="path_video"
                                                    value="{{ $promotion->path_video }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Thumbnail
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($promotion->thumbnail) }}" alt="thumbnail"
                                                        class="rounded-md object-cover w-[160px] h-[90px] mb-2">
                                                    <input type="file" name="thumbnail"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Input tersembunyi untuk menampung ID misi yang akan dihapus -->
                                        <input type="hidden" name="delete_missions" id="delete_missions" value="">

                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="flex flex-col py-2 mb-4">
                                                <label for="name"
                                                    class="block text-sm font-bold text-slate-700">Benefit</label>
                                                @forelse ($benefits as $benefit)
                                                    <div class="flex">
                                                        <input placeholder="benefits" type="text"
                                                            name="{{ 'benefits[' . $benefit->id . ']' }}                                                       id="missions"
                                                            autocomplete="benefits"
                                                            class="block w-7/12 w-full mt-1 border-gray-300 rounded-lg focus:ring-blue-500 sm:text-sm"
                                                            value="{{ $benefit->name ?? '' }}" required>

                                                        <!-- Tombol Hapus -->
                                                        {{-- <button type="button" class="ml-2 text-red-500 hover:text-red-700"
                                                            onclick="confirmDelete({{ $benefit->id }}, event)">
                                                            Hapus
                                                        </button> --}}

                                                    </div>

                                                @empty
                                                    {{-- empty --}}
                                                @endforelse

                                                <div id="newBenefitRow"></div>

                                            </div>

                                            <button type="button"
                                                class="items-center px-3 py-2 mt-2 text-xs font-medium text-gray-700"
                                                id="addBenefitRow">
                                                Tambahkan +
                                            </button>

                                        </div>

                                    </div>
                                    <div class="flex items-end mt-4 z-200">
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
                '<div id="inputFormBenefitRow" class="flex"><input type="text" name="benefit[]" class="mt-2 w-7/12 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" /><button type="button" id="removeBenefitRow" class="ml-2 text-red-500 hover:text-red-700">Hapus</button></div>';

            $('#newBenefitRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeBenefitRow', function() {
            $(this).closest('#inputFormBenefitRow').remove();
        });

        function confirmDelete(missionId, event) {
            if (confirm('Apakah Anda yakin ingin menghapus misi ini?')) {
                // Pastikan elemen dengan id 'delete_missions' ada di DOM
                let deleteInput = document.getElementById('delete_missions');

                // Cek jika deleteInput tidak null
                if (deleteInput) {
                    let currentValue = deleteInput.value;
                    console.log('Current value of delete_missions:', currentValue); // Debugging
                    deleteInput.value = currentValue ? currentValue + ',' + missionId : missionId;

                    console.log('Updated delete_missions:', deleteInput.value); // Debugging

                    // Menghapus baris misi dari DOM
                    let missionRow = event.currentTarget.closest('.flex');
                    missionRow.remove();
                } else {
                    console.error('Input dengan ID "delete_missions" tidak ditemukan.');
                }
            }
        }
    </script>
@endpush
