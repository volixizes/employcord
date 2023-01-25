<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employcord</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
        <!-- Styles -->
        <style>

            body {
                font-family: 'Sofia Sans', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
             {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif  --}}

                <section class="vh-100 gradient-custom">
                    <div class="container-fluid py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-5">
                          <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        
                        <div class="card-body p-5 text-center m-auto">
                            <div class="mb-md-5 mt-md-4 pb-5">
                            <div class="d-flex justify-content-center m-5">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/Capture-removebg-preview.png?alt=media&token=aa0cd770-6435-4623-81ec-db460156f961" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 5em;">
                                    <h1 class="mt-3" style="color: #205295;">EmployCord</h1>
                                </div>
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
                                    </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </section>
            </div>
    </body>
</html>
