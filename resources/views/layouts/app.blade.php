<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EmployCord - @yield('title')</title>

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

            body {
                font-family: 'Inter', sans-serif;
                font-family: 'Quicksand', sans-serif;
            };
  
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #285430;">

            <div class="container-fluid">
            {{-- navbar logo --}}
                <div class="navbar-brand d-flex">
                        <img src="/images/logoicon.png" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 3em;">
                    <a class="navbar-brand mt-3" href="{{ url('home') }}" style="color: #A4BE7B; font-family: 'Sofia Sans', sans-serif;">EmployCord</a> 
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0 fs-5" style="text-shadow: 0 0 5px #A4BE7B; color: white;">
                            {{-- just add a route in the href --}}
                            <li class="nav-item" >
                                <a class="nav-link {{ Request::is('home') ? 'active':'' }} fw-bold" href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('employees') ? 'active':'' }} fw-bold" href="{{ route('employees') }}">Employees</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('trackrecords') ? 'active':'' }} fw-bold" href="{{ route('trackrecords') }}">Track Records</a>
                            </li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                
                                
                                
                            </li>
                            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-light btn-sm">← Logout</button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @endguest
                    </ul>
                
            </div>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="d-fixed" style="background-color: #285430; height:100%;">
            <div class="m-5">
                <p class="text-center" style="color: #A4BE7B;">Copyright © 2023 Group 9. All Rights Reserved.</p>
            </div>
       </footer>
    </div>

   
</body>
<script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            let forms = document.getElementsByClassName('needs-validation');
            let validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);

                let submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.onclick = function() {
                // code nung verification mamaya sa DB
                console.log('Submit button clicked!');
                };
            });
            }, false);
        })();
        
    $(document).ready(function() {
        $('.datebtn').click(function() {
            $('#datepicker').datepicker('show');
        });
        $('#datepicker').datepicker({
            dateFormat: 'mm/dd/yy'
        });
        $('.hirebtn').click(function(){
            $('#hirepicker').datepicker('show');
        });
        $('#hirepicker').datepicker({
            dateFormat: 'mm/dd/yy'
        });
    });
    document.getElementById("showPasswordBtn").addEventListener("click", function() {
    let passwordInput = document.getElementById("empPassword");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        this.innerHTML = "<i class='fa fa-eye'></i>";
    } else {
        passwordInput.type = "password";
        this.innerHTML = "<i class='fa fa-eye-slash'></i>";
    }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>

