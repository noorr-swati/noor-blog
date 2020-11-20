@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="https://dashboard.meveto.com/oauth-client?client_id=6833&scope=default-client-access&response_type=code&redirect_uri=http://142.93.242.101/meveto/redirect&state=55V6WtTw9q4IgWUObj6D7ISKDhgoNeYV02kJrqknwO4tYmo4mWjLpuJYIDxZYSIMGaGbzl6LrmlTfrWuWNY5AtyS0yIRH5UlTQMl3QdgJbGuCf24Q8LXybFYZ1Pc8ygNZy9cebzoCDFkpx6zj903c6plkSm0ZafZ5eaRxIU1kQP0BGwYCUz8KtzhGQeu2Hc1n2aAt7D3mrPlbI6gvpwPLYcsJmMB1P29tjQjzpUzhGHOrokZX4shvdLpoJWfQOBI" target="_blank" style="background-color: #099404;
                                color: white;
                                padding: 7px 25px;
                                border-radius: 5px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;">Login with meveto</a>.
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
