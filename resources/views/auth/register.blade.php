@extends('layouts.authlayout')
@section('auth-content')
    <div class="auth-page">
        <div class="auth-body">
            <form action="{{ route('register') }}" method="post">
            <div class="form-body">
                <h2 class="login-text">REGISTER WITH REWARDY</h2>
                @csrf
                <input type="text" class="inp-body @error('name') is-invalid @enderror" placeholder="Enter Name..." name="name" value="" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" class="inp-body @error('email') is-invalid @enderror" placeholder="Enter Email..." name="email" value="" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class="inp-body @error('password') is-invalid @enderror" placeholder="Enter Password..." required autocomplete="new_password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class="inp-body" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password...">
                <button class="btnx" type="submit">REGISTER HERE</button>
            </div>
        </form>
        </div>
    </div>
    @endsection
