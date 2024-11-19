<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.meta')

    <title>@yield('title') | SMP Kebangsaan</title>

    @stack('before-style')

    @include('includes.frontend.style')

    @stack('after-style')

</head>

<body class="antialiased font-[Poppins] pb-[72px]">
    <div class="relative">

        @include('components.frontend.navigation')

        {{-- @include('sweetalert::alert') --}}

        @yield('content')

        {{-- @include('includes.landing.footer') --}}

        @stack('before-script')

        @include('includes.frontend.script')

        @stack('after-script')

    </div>
</body>

</html>
