@extends('layout.auth')

@section('css')
@endsection

@section('content')
    <form method="POST" action="{{ route('password.email') }}" id="loginForm">
        @csrf
        <div class="form-group">
            <label class="control-label" for="username">Reset Password</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="" autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback help-block small" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="flex justify-content-between">
            <button type="submit" class="btn btn-success btn-block text-white loginbtn">
                Send Password Reset Link
            </button>
        </div>
        @if (Route::has('login'))
            <a class="btn btn-link" href="{{ route('login') }}">
                Back to Login Page!
            </a>
        @endif
    </form>
@endsection

@section('script')
@endsection
