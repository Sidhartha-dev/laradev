@extends('layouts.authlayout')
@section('auth-content')
    <div class="auth-page">
        <div class="auth-body">
            <form action="{{ route('login') }}" method="post">
            <div class="form-body">
                <h2 class="login-text">LOGIN WITH REWARDY</h2>
                @csrf
                <input type="text" class="inp-body @error('email') is-invalid @enderror" placeholder="Enter Email..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class="inp-body @error('password') is-invalid @enderror" placeholder="Enter Password..." name="password" autocomplete="current-password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="pl-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button class="btnx" type="submit">LOGIN HERE</button>
                <a href="{{ route('register') }}" class="btnr">Register Here</a>
                @if (Route::has('password.request'))
                    <a class="btn btn-link hhj" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
        </div>
    </div>
@endsection

