@extends('layouts.loginpage')

@section('login')
                                <form method="POST" action="{{ route('login') }}">
                                    
                                    @csrf
            
                                    
                                        
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                                        <div class="form-outline form-white mb-4">
                                        <p class="text-center fs-5">Sign in</p>
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
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                            <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                                {{ __('Login') }}
                                            </button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                                Don't have an account? 
                                                <a href="#!" class="link-danger">
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </p>
                                        </div>
                                        </form>
 @endsection                        