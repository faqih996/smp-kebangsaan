<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.meta')

    <title>@yield('title') | SMP Kebangsaan</title>

    @stack('before-style')

    @include('includes.admin.style')

    @stack('after-style')

</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-90 dark:hidden min-h-75"></div>

    @include('components.dashboard.sidebar')

    {{-- @include('sweetalert::alert') --}}

    @yield('content')

    {{-- @include('includes.landing.footer') --}}

    @stack('before-script')

    @include('includes.admin.script')

    @stack('after-script')

    </div>
</body>

</html>
