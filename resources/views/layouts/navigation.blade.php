<div class="nav-pc">
    <div class="logor">
        <div class="logo">
            <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png')}}" alt="" style="height: 50px; width:154px;">
        </a>
            <span>Save Money On Shopping Online</span>
        </div>
        <div class="contact-details">
            <div class="wa">
                <i class="bi bi-whatsapp" data-sign="1"></i>
                <div class="popup1">
                    <h5>+91-99534987665</h5>
                </div>
            </div>
            <div class="contact-no">
                <i class="bi bi-telephone-fill" data-sign="1"></i>
                <div class="popup2">
                    <h5>+91-99534987665</h5>
                </div>
            </div>
            <div class="scripll">
                <a href="{{ route('products.index') }}">
                <i class="bi bi-card-checklist"></i>
                <div class="popup" data-sign="3">
                    <h5>checklist</h5>
                </div>
                </a>
            </div>
            <div class="youtube show13">
                <a href="">
                <i class="bi bi-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="navigation-bar">
        <div class="reward">
            <a href="{{ route('earn.money')}}">
                <img src="{{ asset('img/rewardbox.jpg')}}" alt="" style="height: 40px; width:40px;">
            </a>
        </div>
        <div class="search">
            <div class="serach-section">
                <input type="text" class="search-bar" placeholder="Search...">
                <div class="sech-ico">
                    <i class="bi bi-search"></i>
                </div>
            </div>
        </div>
        <div class="other-links">
            {{-- <a href="" style="font-size: 16px;"><i class="bi bi-lock-fill"></i> Login</a> --}}
            @guest
                    {{-- <a class="dash-point" href="{{ route('login') }}"><i class="bi bi-lock-fill"></i> {{ __('Login') }}</a> --}}
                    @if (Route::has('login'))
                        <a class="dash-point" href="{{ route('login') }}"><i class="bi bi-lock-fill"></i>{{ __('Login') }}</a>
                    @endif
                    @else
                            <a id="navbarDropdown" class="dash-color dropdown-toggle" href="{{route("home")}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
            @endguest
            <img src="{{asset('img/qr.jpg')}}" alt="" style="height: 40px; width:40px;">
            <a href=""><i class="bi bi-cart-plus-fill"></i></a>
        </div>
    </nav>
</div>
<div class="nav-mob">
    <div class="logos">
        <div class="logo">
            <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png')}}" alt="" style="height: 54px; width:84px; padding-top:17px;">
        </a>
            <p>Save Money On Shopping Online</p>
        </div>
        <div class="navimg">
            <img src="{{ asset('img/Group 1.png') }}" alt="">
        </div>
    </div>
    <div class="info-search">
        <div class="serach-section">
            <input type="text" class="search-bar" placeholder="Search...">
            <div class="sech-ico">
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div class="youtube">
            <a href="">
            <i class="bi bi-youtube"></i>
            </a>
        </div>
        <div class="add-cart">
            <i class="bi bi-cart-plus-fill"></i>
        </div>
        <div class="reward-box">
            <i class="bi bi-archive-fill"></i>
        </div>
    </div>
</div>
<div class="nav-screen">
    <div class="nav-items">
    <div class="closebar">
        <img src="{{ asset('img/Group 2.png') }}" alt="">
    </div>
    <li>
        <i class="bi bi-whatsapp"></i>
        <a href="" class="navlinks">WhatsUp Id</a>
    </li>
    <hr class="lin1">
    <li>
        <i class="bi bi-telephone-fill"></i>
        <a href="" class="navlinks">Phone Id</a>
    </li>
    <hr class="lin1">
    <li>
        <i class="bi bi-card-checklist"></i>
        <a href="" class="navlinks">Checklist</a>
    </li>
    <hr class="lin1">
    <li>
        <i class="bi bi-bullseye"></i>
        <a href="" class="navlinks">Customer Id</a>
    </li>
    <hr class="lin1">
    <li>
        @guest
                    {{-- <a class="dash-point" href="{{ route('login') }}"><i class="bi bi-lock-fill"></i> {{ __('Login') }}</a> --}}
                    @if (Route::has('login'))
                        <a class="navlinks" href="{{ route('login') }}"><i class="bi bi-lock-fill"></i>{{ __('Login') }}</a>
                    @endif
                    @else
                            <a id="navbarDropdown" class="dash-color dropdown-toggle" href="{{route("home")}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
            @endguest
    </li>
    <hr class="lin1">
</div>
</div>