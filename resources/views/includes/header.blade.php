<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent z-depth-0">
    <div class="nav-container transparent">
        <div class="topnav transparent">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" alt="logo" src="/img/assets/{{$logo}}.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="#">My account</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--/.Navbar -->



{{--
<ul id="dropdown1" class="dropdown-content">
        <li class="divider"></li>
        @if (Route::has('login'))

            @auth
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

                @if (Route::has('register'))
                <li>       <a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @endauth

        @endif
    </ul>
    <nav class="transparent z-depth-0">
        <div class="container">
        <div class="nav-wrapper transparent">
            <a class="brand-logo" href="{{ url('/') }}">
                <img class="logo" alt="logo" src="/img/assets/{{$logo}}.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li>
                    @auth
                        @if($logo=="logo")
                            <a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">
                            {{__('Hello ')}}{{Auth::user()->name }}<i class="large material-icons black-text left">face</i></a>
                        @else
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            {{__('Hello ')}}{{Auth::user()->name }}<i class="large material-icons left">face</i></a>
                        @endif
                    @else
                        @if($logo=="logo")
                            <a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">
                            <i class="large material-icons black-text">menu</i></a>
                        @else
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            <i class="large material-icons white-text">menu</i></a>
                        @endif
                    @endauth
                </li>
            </ul>
        </div>
        </div>
    </nav> --}}
