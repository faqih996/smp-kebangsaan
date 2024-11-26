<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.meta')

    <title>@yield('title') | SMP Kebangsaan</title>

    @stack('before-style')

    @include('includes.admin.style')

    @stack('after-style')

</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-10 text-slate-500">
    <div class="absolute w-full bg-blue-90 min-h-75"></div>

    @include('components.dashboard.sidebar')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        @include('components.dashboard.navigation')

        {{-- @include('sweetalert::alert') --}}

        @yield('content')

        {{-- @include('includes.landing.footer') --}}

    </main>

    @stack('before-script')

    @include('includes.admin.script')

    @stack('after-script')

    </div>

    <script>
        @if ($message = session('succes_message'))
            Swal.fire(
                'Good job!',
                '{{ $message }}',
                'success'
            )
        @endif
    </script>
</body>

</html>
