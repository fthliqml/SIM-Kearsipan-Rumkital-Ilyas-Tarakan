<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials.head-css')
</head>

<body>
    @include('layouts.partials/sidebar')
    <div class="main-content" id="mainContent">
        @yield('topbar')

        <!-- Content Area -->
        <div class="content-area">
            @yield('content')
        </div>
    </div>

    <!-- App js-->
    @vite(['resources/js/app.js'])
</body>

</html>
