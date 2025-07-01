<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials.head-css')
</head>

<body class="bg-white">
    @yield('topbar')
    @yield('content')

    <!-- App js-->
    @vite(['resources/js/app.js'])
</body>

</html>
