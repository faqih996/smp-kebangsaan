@extends('layouts.app')

@section('title', 'Show Mail')

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

                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Subject
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->subject }}
                                            </h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Kategori
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->category }}
                                            </h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Pengirim
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->name }}
                                            </h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Telephone
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->phone }}
                                            </h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Email
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->email }}
                                            </h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6
                                                class="flex inline-block mb-2 ml-1 font-normal text-heading-10 text-slate-700">
                                                Pesan
                                            </h6>
                                            <h5 class="inline-block mb-2 ml-1 text-heading-9 text-md text-slate-700">
                                                {{ $mail->description }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end mt-4 z-200">
                                    <a href="{{ route('admin.mail.index') }}"
                                        class="px-6 py-4 font-bold text-gray-100 rounded-md">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
