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
    <body>
        {{-- nav bar --}}
        <nav class="navbar" style="background-color: #285430;">
            <div class="container-fluid">


                {{-- navbar logo --}}
                <div class="navbar-brand d-flex">
                    <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/Capture-removebg-preview-removebg-preview.png?alt=media&token=ba71d366-bfb6-4af4-91ab-76db49a0da72" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 3em;">
                    <h3 class="mt-3" style="color: #A4BE7B;">EmployCord</h3>
                </div>
                    <ul class="nav nav-pills justify-content-center">
                        {{-- just add a route in the href --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('employees') }}">Employees</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Track Records</a></li>
                    </ul>
                    <h5 class="nav"><a class="nav-link" href="#">Logout</a></h5>
            </div>
        </nav>
       <main>
        {{-- yield your content here --}}
            @yield('content')
       </main>

       <footer style="background-color: #285430;">
            <div class="m-5">
                <p class="text-center" style="color: #A4BE7B;">Copyright © 2023 Group 9. All Rights reserved</p>
            </div>
       </footer>
    </body>
</html>
