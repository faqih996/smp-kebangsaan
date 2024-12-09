@extends('layouts.app')

@section('title', 'About School')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl">
                    <div
                        class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 lg:p-8 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">About School</h6>
                        @if ($about)
                            <!-- Cek apakah sudah ada data about -->
                            <a href="{{ route('admin.about.edit', $about->id) }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Edit Tentang Sekolah
                            </a>
                        @else
                            <a href="{{ route('admin.about.create') }}"
                                class="bg-blue-70 hover:bg-blue-90 px-3 text-xs rounded-1.8 py-3 lg:mr-10 inline-block whitespace-nowrap
            text-center align-baseline font-bold uppercase leading-none text-white">
                                Buat Tentang Sekolah
                            </a>
                        @endif
                    </div>

                    <div class="flex-auto px-6 pt-6 pb-2">
                        <div class="w-full p-8 overflow-hidden text-center">

                            @if ($about)
                                <div class="px-6">
                                    <img src="{{ Storage::url($about->thumbnail) }}" alt="thumbnail"
                                        class="rounded-md object-cover w-[240px] h-[240px] mb-2 ">
                                </div>

                                {{-- create view table --}}
                                <div class="w-1/2 p-6 overflow-hidden text-center">
                                    <table class="w-full text-sm text-left text-gray-500 table-auto">
                                        <thead class="text-xs text-gray-700 uppercase">
                                            <tr>
                                                <th scope="col" class="w-1/2 px-6 py-3">Detail Sekolah</th>
                                                <th scope="col" class="px-6 py-3">SMP Kebangsaan</th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="text-gray-700 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray dark:text-gray-400">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Deskripsi</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->description }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Maps</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->maps }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Jumlah Siswa</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->jumlah_siswa }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Alamat</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->address }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Nomor
                                                    Telephone</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Email</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->email }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">NPSN</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->npsn }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Akreditasi</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->akreditasi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Nomor SK
                                                    Akreditasi</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->no_sk_akreditasi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Status SK
                                                    Akreditasi</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->status_sk_akreditasi }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Jenjang
                                                    Pendidikan</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->jenjang_pendidikan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">SK
                                                    Pendirian</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->sk_pendirian }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Tanggal SK
                                                    Pendirian</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->sk_pendirian }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">SK Operasional</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->sk_operasional }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Tanggal SK
                                                    Operasional</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $about->tgl_sk_operasional }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>Belum ada data</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
