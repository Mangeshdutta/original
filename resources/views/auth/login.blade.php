@extends('layouts.auth')

@section('content')
<div class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-200">
        <div>
            <a href="/">
                <img src="/img/logo.png" alt="Keklik" class="h-24">
            </a>
        </div>
        <div class="w-full max-w-sm mt-6 px-6 py-4 bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email" class="block">
                    <span class="form-label">{{ __('Email') }}</span>
                    <input id="email" type="email" class="form-input mt-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </label>

                <div class="col-md-6">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="password" class="block mt-4">
                    <span class="form-label">{{ __('Password') }}</span>
                    <input id="password" type="password" class="form-input mt-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </label>

                <div class="col-md-6">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="form-label" class="block mt-4">
                    <div class="flex items-center">
                        <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2 form-label">{{ __('Remember Me') }}</span>
                    </div>
                </label>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-black">
                        {{ __('SIGN IN') }}
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
