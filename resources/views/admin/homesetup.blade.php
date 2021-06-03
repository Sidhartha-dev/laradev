<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home height</title>
    <link rel="stylesheet" href="{{asset("css/dash.css")}}">
</head>
<body>

    {{-- <div class="mobile-menu">
        <img src="{{ asset('img/Group 1.png') }}" alt="" class="menu-itm">
    </div> --}}
    <nav class="nav-types">
        <div class="logo-dash">
            <a href="" class="dash-point">
            <img src="{{asset('img/logo.png')}}" alt="" style="height: 50px; width: 170px;">
            </a>
        </div>
        <div class="other-links">
            <a href="{{ route('home') }}" class="dash-point">Points-table</a>
            <a href="{{ route('point.complete')}}" class="dash-point" >Completed</a>
            <a href="{{ route('earn.money')}}" class="dash-point">Total score</a>
        </div>

        <div class="profile-details">
            @guest
                    <a class="dash-point" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="dash-point" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                            <a id="navbarDropdown" class="dash-color dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <a class="btn-lgout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            @endguest
        </div>
    </nav>
    @yield('homepager')
    <script src="{{asset("js/cardshow.js")}}"></script>
</body>
</html>