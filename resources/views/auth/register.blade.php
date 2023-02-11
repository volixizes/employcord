@extends('layouts.loginandreg')
@section('content')

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-outline form-white mb-3">
                        <h1 class="mb-3 fw-bold" style="color: #5865F2">Register</h1>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                        </div>

                        <div class="form-outline form-white mb-3">
                            <!-- <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline form-white mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline form-white mb-3">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                            <div class="d-grid col-4 mx-auto  ">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <a class="btn btn-link mt-3" style="text-decoration: none;" href="{{ route('login') }}">⬅️ Back to Log in</a>
                    </form>
                @endsection

