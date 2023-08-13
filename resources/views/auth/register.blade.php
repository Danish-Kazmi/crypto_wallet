@extends('layout.auth')

@section('css')
@endsection

@section('content')
    <form action="{{ route('register') }}" method="POST" id="loginForm">
        @csrf
        <div class="row">
            <div class="form-group col-lg-12">
                <label>Username</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Email Address</label>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Telegram Username</label>
                <input class="form-control" id="telegram" type="test" name="telegram" class="form-control @error('telegram') is-invalid @enderror" value="{{ old('telegram') }}" required autocomplete="telegram">
            </div>
            <div class="form-group col-lg-6">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label>Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            {{-- <div class="checkbox col-lg-12">
                <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
            </div> --}}
        </div>
        <div class="flex justify-content-between">
            <button type="submit" class="btn btn-success btn-block text-white loginbtn">Register</button>
        </div>
        <a class="btn btn-link" href="{{ route('login') }}">
            Already have an account?
        </a>
    </form>
@endsection

@section('script')
    <script>
    </script>
@endsection
