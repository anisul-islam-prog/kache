<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.welcome_head')
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> -->
    @if (Request::is('/'))
        @include('includes.welcome_navbar')
    @endif


    @yield('content')

    @if (Request::is('/'))
        @include('includes.welcome_footer')
    @endif

    @include('includes.welcome_scripts')

</body>

</html>
