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
                                <form method="POST" action="{{ route('admin.promotion.update', $promotion->slug) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="name"
                                                    class="block text-sm font-bold text-slate-700">Visi</label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ $promotion->name }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>
                                        </div>

                                        <!-- Input tersembunyi untuk menampung ID misi yang akan dihapus -->
                                        <input type="hidden" name="delete_missions" id="delete_missions" value="">

                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="flex flex-col py-2 mb-4">
                                                <label for="name"
                                                    class="block text-sm font-bold text-slate-700">Misi</label>
                                                @forelse ($benefits as $benefit)
                                                    <div class="flex">
                                                        <input placeholder="benefits" type="text"
                                                            name="{{ 'benefits[' . $benefit->id . ']' }}                                                       id="missions"
                                                            autocomplete="benefits"
                                                            class="block w-7/12 w-full mt-1 border-gray-300 rounded-lg focus:ring-blue-500 sm:text-sm"
                                                            value="{{ $benefit->name ?? '' }}" required>

                                                        <!-- Tombol Hapus -->
                                                        {{-- <button type="button" class="ml-2 text-red-500 hover:text-red-700"
                                                            onclick="confirmDelete({{ $mission_item->id }}, event)">
                                                            Hapus
                                                        </button> --}}

                                                    </div>

                                                @empty
                                                    {{-- empty --}}
                                                @endforelse

                                                <div id="newMissionRow"></div>

                                            </div>

                                            <button type="button"
                                                class="items-center px-3 py-2 mt-2 text-xs font-medium text-gray-700"
                                                id="addMisionRow">
                                                Tambahkan Misi +
                                            </button>

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

@push('after-script')
    <script type="text/javascript">
        // add row
        $("#addMisionRow").click(function() {
            var html = '';
            html +=
                '<div id="inputFormMissionRow" class="flex"><input type="text" name="mission[]" class="mt-2 w-7/12 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" /><button type="button" id="removeMissionRow" class="ml-2 text-red-500 hover:text-red-700">Hapus</button></div>';

            $('#newMissionRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeMissionRow', function() {
            $(this).closest('#inputFormMissionRow').remove();
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
