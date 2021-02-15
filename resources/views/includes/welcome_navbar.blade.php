<nav class="navbar navbar-expand-lg sticky navbar-light sticky-dark">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="/">
            <img src="{{ URL::asset('images/logo_sample.png') }}" alt="logo" class="logo-dark logo-welcome-size" />
            {{-- <img src="{{ URL::asset('images/logo-light.png') }}" alt=""
                class="logo-light" height="35" /> --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="" data-feather="menu"></i>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarCollapse">
            <ul class="nav navbar-nav ml-auto" id="mySidenav">
                @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                            <a href="{{ url('/dashboard') }}"><button class="nav-link" id="home">Home</a></button>
                        @else
                            <a href="{{ route('login') }}"><button class="btn btn-sm rounded-pill nav-btn ml-lg-3"
                                    id="login">Login</button></a>
                        </li>
                </ul>
                @if (Route::has('register'))
                    <a href="{{ route('userlogin.away') }}"><button class="btn btn-sm rounded-pill nav-btn ml-lg-3"
                            id="signup">Signup<button></a>
                @endif
                @endif
                @endif
            </div>
        </div>
    </nav>
