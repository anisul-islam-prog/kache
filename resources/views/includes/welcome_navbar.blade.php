<nav class="navbar navbar-expand-lg sticky navbar-light sticky-dark">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="/">
            <img src="{{ URL::asset('images/logo_sample.png')}}" alt="logo" class="logo-dark logo-welcome-size"  />
            {{-- <img src="{{URL::asset('images/logo-light.png')}}" alt="" class="logo-light" height="35" /> --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="" data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <!--                        <li class="nav-item active">-->
                <!--                            <a href="#home" class="nav-link">Home</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a href="#services" class="nav-link">Services</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a href="#features" class="nav-link">Features</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a href="#pricing" class="nav-link">Pricing</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a href="#team" class="nav-link">Team</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a href="#blog" class="nav-link">Blog</a>-->
                <!--                        </li>-->
                @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
            </ul>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-sm rounded-pill nav-btn ml-lg-3">Signup</a>
            @endif
            @endif
            @endif
        </div>
    </div>
</nav>