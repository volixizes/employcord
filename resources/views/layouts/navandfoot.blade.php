<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
        <!-- Styles -->
        <style>

            body {
                font-family: 'Sofia Sans', sans-serif;
            };

            

            
        </style>
    </head>
    <body>
        {{-- nav bar --}}
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #285430;">
            <div class="container-fluid">


                {{-- navbar logo --}}
                <div class="navbar-brand d-flex">
                    <img src="/images/logoicon.png" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 3em;">
                    <a class="navbar-brand mt-3" href="#" style="color: #A4BE7B;">EmployCord</a> 
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                            
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" > 
                    <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0 fs-5" style="text-shadow: 0 0 5px #A4BE7B; color: white;">
                            {{-- just add a route in the href --}}
                            <li class="nav-item" >
                                <a class="nav-link {{ Request::is('home') ? 'active':'' }}" href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('employees') ? 'active':'' }}" href="{{ route('employees') }}">Employees</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('trackrecords') ? 'active':'' }}" href="{{ route('trackrecords') }}">Track Records</a>
                            </li>
                    </ul>
                </div>
                            <button type="button" class="btn position-relative">🔔
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <h5 class="nav ms-2"><a class="nav-link" href="#">Logout</a></h5>
                    
            </div>
                            
        </nav>


       <main>
        {{-- yield your content here --}}
            @yield('content')
       </main>

       <footer style="background-color: #285430;">
            <div class="m-5">
                <p class="text-center" style="color: #A4BE7B;">Copyright © 2023 Group 9. All Rights Reserved.</p>
            </div>
       </footer>
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
