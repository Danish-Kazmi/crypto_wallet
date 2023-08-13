@extends('layout.auth')

@section('css')
    <style>
        .text-white {
            color: white !important;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf
        <div class="form-group">
            <label class="control-label" for="username">Email Address</label>
            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required="" autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback help-block small" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required="">
            @error('password')
                <span class="invalid-feedback help-block small" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        {{-- <div class="checkbox login-checkbox">
            <label>
                <input type="checkbox" class="i-checks" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            </label>
            <p class="help-block small">(if this is a private computer)</p>
        </div> --}}
        <div class="flex justify-content-between">
            <button type="submit" class="btn btn-success btn-block text-white loginbtn btn-50">Login</button>
            <a class="btn btn-default btn-block btn-50" href="{{ route('register') }}" style="margin: 0px;">Create New Account</a>
        </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        @endif
    </form>
@endsection

@section('script')
@endsection
