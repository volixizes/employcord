@extends('layouts.loginandreg')
@section('content')
<form method="POST" action="{{ route('login') }}">   
    @csrf
    <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
    <div class="form-outline form-white mb-4">
    <h1 class="mb-3 fw-bold" style="color: #5865F2">Sign in</h1>
    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" />
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
            
    <div class="form-outline form-white mb-4">
        <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->                
            <input type="password" id="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
            
    <div class="mb-3">
        <div class="">
            <div class="form-check">
                <label class="form-check-label" for="remember">
                <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>                                
    <div class="d-grid col-4 mx-auto ">
            <button type="submit" class="btn btn-primary btn-lg px-5">
                {{ __('Login') }}
            </button>
    </div>

    <a class="btn btn-link float-end mt-2" style="text-decoration: none;" href="{{ route('register') }}">Admin account register here</a>
    <!-- @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #E5D9B6">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif -->
    </form>
 @endsection                        

