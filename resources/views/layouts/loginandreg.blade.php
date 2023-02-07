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
    <!-- Scripts -->


    <style>

            html, body {
                font-family: 'Inter', sans-serif;
                font-family: 'Quicksand', sans-serif;
                background: linear-gradient(360deg, rgba(255,255,255,1) 90%, rgba(84,4,196,1) 100%) no-repeat;
                
             }

            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 450px;
                height: auto;
                }

            * {
                margin: 0;
                padding: 0;
            }



            #wrap {
            min-height: 100%;
            }

            #main {
            overflow: auto;
            padding-bottom: 180px;
            /* must be same height as the footer */
            }

            .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            bottom:0;
            position: fixed;
            width: 100%;
            color: #5404c4;
            font-weight: bold;
            }

            .col-lg-7 {
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .centered-div {
                width: 50%;
                height: 100px;
                background-color: lightgray;
            }

            .btn-primary {
            background-color: #5865F2;
            border-color: #5865F2;
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

                <section clss="form">
                    
                    <div class="container mt-5">
                    <div class="row mt-5">
                    <div class="col-lg-7" >
                                <div class="image-container">
                                <img src="/images/logo.png" alt="Logo">
                                </div>
                    </div>
                    
                      
                        <div class="col-lg-5 mt-5">
                            <div class="card shadow p-4" style="border-radius: 1rem;">
                                <div class="card-body">
                                    @yield('login')
                                    @yield('register')
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                  </section>
                 
                  
            </div>

            <footer class="footer">
                <p>&copy; 2023 Copyright. All Rights Reserved. Designed by: Group no. 9.</p>
             </footer>
    </body>
</html>
