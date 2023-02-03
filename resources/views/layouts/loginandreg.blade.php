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
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>

            body {
                font-family: 'Inter', sans-serif;
                font-family: 'Quicksand', sans-serif;
            };

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
              {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                         <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif   --}}

                <section class="vh-75 gradient-custom">
                    <div class="container-fluid mt-3">
                      <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-5">

                          <div class="card text-white mt-5" style="border-radius: 1rem; background-color: #285430;">
                        
                        <div class="card-body m-auto">
                            <div class="mb-md-5 mt-md-5">
                            <div class="d-flex justify-content-center m-5">
                                    <img src="/images/logoicon.png" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 5em;">
                                    <h1 class="mt-3" style="color: #A4BE7B; font-family: 'Sofia Sans', sans-serif;">EmployCord</h1>
                                </div>
                                @yield('login')
                                @yield('register')
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
