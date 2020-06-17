    <ul id="dropdown1" class="dropdown-content">
        <li class="divider"></li>
        @if (Route::has('login'))

            @auth
            <li><a href="{{ url('/home') }}">{{ __('Home') }}</a></li>
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
                <img class="logo" alt="logo" src="/img/{{$logo}}.png">
            </a>
            <ul class="right hide-on-med-and-down">
                @if ($logo=='smallIcon')
                    <li><a class="waves-effect waves-light btn btn-one">{{ __('Search for your place')}}</a></li>
                @endif
                <li><a class="waves-effect waves-light btn btn-one">{{ __('Post your place') }}</a></li>
                <li>
                    @auth
                        @if($logo=="smallIcon")
                            <a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">
                            {{__('Hello ')}}{{Auth::user()->name }}<i class="large material-icons black-text left">face</i></a>
                        @else
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            {{__('Hello ')}}{{Auth::user()->name }}<i class="large material-icons left">face</i></a>
                        @endif
                    @else
                        @if($logo=="smallIcon")
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
    </nav>
