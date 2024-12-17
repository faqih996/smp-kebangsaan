@extends('layouts.app')

@section('title', 'Edit About School')

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
                                <p class="text-sm leading-normal uppercase">Edit About Sekolah</p>
                                <form method="POST" action="{{ route('admin.about.update', $about) }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                            <div class="mb-4">
                                                <label for="npsn"
                                                    class="block text-sm font-bold text-slate-700">NPSN</label>
                                                <input type="text" id="npsn" name="npsn"
                                                    value="{{ $about->npsn }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="akreditasi"
                                                    class="block text-sm font-bold text-slate-700">Akreditasi</label>
                                                <input type="text" id="akreditasi" name="akreditasi"
                                                    value="{{ $about->akreditasi }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="no_sk_akreditasi"
                                                    class="block text-sm font-bold text-slate-700">Nomor SK
                                                    Akreditasi</label>
                                                <input type="text" id="no_sk_akreditasi" name="no_sk_akreditasi"
                                                    value="{{ $about->no_sk_akreditasi }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="status_sk_akreditasi"
                                                    class="block text-sm font-bold text-slate-700">Status SK
                                                    Akreditasi</label>
                                                <input type="text" id="status_sk_akreditasi" name="status_sk_akreditasi"
                                                    value="{{ $about->status_sk_akreditasi }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="jenjang_pendidikan"
                                                    class="block text-sm font-bold text-slate-700">Jenjang
                                                    Pendidikan</label>
                                                <input type="text" id="jenjang_pendidikan" name="jenjang_pendidikan"
                                                    value="{{ $about->jenjang_pendidikan }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="sk_pendirian" class="block text-sm font-bold text-slate-700">SK
                                                    Pendirian</label>
                                                <input type="text" id="sk_pendirian" name="sk_pendirian"
                                                    value="{{ $about->sk_pendirian }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="tgl_sk_pendirian"
                                                    class="block text-sm font-bold text-slate-700">Tanggal SK
                                                    Pendirian</label>
                                                <input type="date" id="tgl_sk_pendirian" name="tgl_sk_pendirian"
                                                    value="{{ $about->tgl_sk_pendirian }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="sk_operasional"
                                                    class="block text-sm font-bold text-slate-700">SK Operasional</label>
                                                <input type="text" id="sk_operasional" name="sk_operasional"
                                                    value="{{ $about->sk_operasional }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="tgl_sk_operasional"
                                                    class="block text-sm font-bold text-slate-700">Tanggal SK
                                                    Operasional</label>
                                                <input type="date" id="tgl_sk_operasional" name="tgl_sk_operasional"
                                                    value="{{ $about->tgl_sk_operasional }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="description"
                                                    class="block text-sm font-bold text-slate-700">Deskripsi</label>
                                                <input type="text" id="description" name="description"
                                                    value="{{ $about->description }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="address"
                                                    class="block text-sm font-bold text-slate-700">Address</label>
                                                <input type="text" id="address" name="address"
                                                    value="{{ $about->address }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="maps"
                                                    class="block text-sm font-bold text-slate-700">Maps</label>
                                                <input type="text" id="maps" name="maps"
                                                    value="{{ $about->maps }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="jumlah_siswa"
                                                    class="block text-sm font-bold text-slate-700">Jumlah Siswa</label>
                                                <input type="number" id="jumlah_siswa" name="jumlah_siswa"
                                                    value="{{ $about->jumlah_siswa }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="jumlah_kelas"
                                                    class="block text-sm font-bold text-slate-700">Jumlah Kelas</label>
                                                <input type="number" id="jumlah_kelas" name="jumlah_kelas"
                                                    value="{{ $about->jumlah_kelas }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="phone" class="block text-sm font-bold text-slate-700">Nomor
                                                    Telephone</label>
                                                <input type="number" id="phone" name="phone"
                                                    value="{{ $about->phone }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="email"
                                                    class="block text-sm font-bold text-slate-700">Email</label>
                                                <input type="email" id="email" name="email"
                                                    value="{{ $about->email }}"
                                                    class="block w-full px-3 py-2 text-black border border-gray-300 rounded-lg focus:ring-blue-500">
                                            </div>

                                            <div class="mb-4">
                                                <label for="thumbnail"
                                                    class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Logo
                                                    Sekolah
                                                </label>
                                                <div class="items-center gap-10">
                                                    <img src="{{ Storage::url($about->thumbnail) }}" alt="thumbnail"
                                                        class="mb-2 w-30">
                                                    <input type="file" name="thumbnail"
                                                        class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-end mt-4 z-200">
                                        <button type="submit"
                                            class="px-3 py-3 font-bold text-white bg-green-600 rounded-md">
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
