<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EmployCord - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/empicon.png">
    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
        
        
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> --}}
    <style>
        body {
        font-family: 'Inter', sans-serif;
        font-family: 'Quicksand', sans-serif;
        };
        #dateResign {
            display: none;
        }

        .navbar-dark {
            background: rgb(84,4,196);
            background: linear-gradient(167deg, rgba(84,4,196,1) 0%, rgba(84,4,196,1) 26%, rgba(88,101,242,1) 83%);
        }

        .footer {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        bottom:0;
        position: relative;
        width: 100%;
        color: #5404c4;
        font-weight: bold;
        }

        .user-pic {
            width: 60px;
            border-radius: 50%;
            cursor: pointer;
            margin-left: 10px;
        }

        .profilepic {
            height: 250px;
            width: 250px;
            position: relative;
            border: 5px solid #fff;
            border-radius: 50%;
            background-size: 100% 100%;
            margin: 20px auto;
            overflow: hidden;
        }

        .my_file{
            position: absolute;
            bottom: 0;
            outline: none;
            color: transparent;
            width: 100%;
            box-sizing: border-box;
            padding: 15px 120px;
            transition: 0.5s;
            background: rgba(0,0,0,0.5);
            text-align: center;
        }

        .my_file::-webkit-file-upload-button{
            visibility: hidden;
        }
        
        .my_file::before{
            content: '';
            font-family: arial;
            font-size: 15px;
            color: #fff;
            display: inline-block;
            -webkit-user-select:none;

        }

        .my_file::after{
            content: 'Update';
            font-family: 'arial';
            font-weight: bold;
            color: #fff;
            display: block;
            top: 70px;
            font-size: 14px;
            position: absolute;
        }

       

        /* ===== Scrollbar CSS ===== */

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 16px;
        }

        *::-webkit-scrollbar-track {
            background: #bfbfbf;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #5661f5;
            border-radius: 5px;
            border: 0px solid #5865f2;
        }

    </style>
    
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm " style="background-color: #5404C4;">

            <div class="container-fluid">
                {{-- navbar logo --}}
                <div class="navbar-brand d-flex">
                    <img src="/images/logowhite.png" alt="Logo" class="img-fluid d-none d-xxl-block d-xl-none" style="width: auto; height: 2.5em;">
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
                            @if(Auth::user()->isAdmin == 1)
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('employees') ? 'active':'' }} fw-bold" href="{{ route('employees') }}">Employees</a>
                            </li>
                           @endif
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('track-records') ? 'active':'' }} fw-bold" href="{{ route('track-records') }}">Track Records</a>
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
                                
                                
                           @endguest 
                            
                            <li class="nav-item dropdown">
                                    <a  class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    
                                    @if(Auth::user()->isAdmin == 1)
                                    <span>Hi, Admin: </span> 
                                    @else
                                    <span>Hi, User: </span> 
                                    @endif
                                    <strong>{{ Auth::user()->name }}</strong>
                                        <img src="/images/male-avatar-profile-picture-vector.webp" class="user-pic">
                                        
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" type="button" class="dropdown-item">Logout</a></li>
                                    </ul>
                            </li>
                    </ul>             
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer">
                <p class="fs-6">&copy; 2023 Copyright. All Rights Reserved. Designed by: Mick ??? Patrick ??? Fin ??? Mike </p>
        </footer>
    </div>

   
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

      const firstname = document.getElementById("firstname");
      const middlename = document.getElementById("middlename");
      const lastname = document.getElementById("lastname");
      const submitBtn = form.querySelector('button[type="submit"]');

      firstname.addEventListener("input", function(e) {
        const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;
        
        if (inputValue.length === 0) {
            firstname.setCustomValidity("First name is required");  
            firstname.classList.remove("is-valid");
            firstname.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
            firstname.setCustomValidity("First name must not contain letters and special characters");
            firstname.classList.remove("is-valid");
            firstname.classList.add("is-invalid");
        }
        else {
            firstname.setCustomValidity("");
            firstname.classList.remove("is-invalid");
            firstname.classList.add("is-valid");
        }
        
        document.querySelector("#firstname_error").innerText = firstname.validationMessage;
        validateForm();
      });

      middlename.addEventListener("input", function(e) {
        const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;

        if (inputValue.length === 0) {
          middlename.setCustomValidity("Middle name is required");  
          middlename.classList.remove("is-valid");
          middlename.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
          middlename.setCustomValidity("Middle name must not contain letters and special characters");
          middlename.classList.remove("is-valid");
          middlename.classList.add("is-invalid");
        }
        else {
            middlename.setCustomValidity("");
            middlename.classList.remove("is-invalid");
            middlename.classList.add("is-valid");
        }
        
        document.querySelector("#middlename_error").innerText = middlename.validationMessage;
        validateForm()
    });
    
    lastname.addEventListener("input", function(e) {
        const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;

        if (inputValue.length === 0) {
          lastname.setCustomValidity("Last name is required");  
          lastname.classList.remove("is-valid");
          lastname.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
          lastname.setCustomValidity("Last name must not contain letters and special characters");
          lastname.classList.remove("is-valid");
          lastname.classList.add("is-invalid");
        }
        else {
            lastname.setCustomValidity("");
            lastname.classList.remove("is-invalid");
            lastname.classList.add("is-valid");
        }

        document.querySelector("#lastname_error").innerText = lastname.validationMessage;
        validateForm();
        });

        let birthday = document.querySelector("input[name='birthday']");
        birthday.addEventListener("input", function(e) {
        const inputValue = e.target.value;

        if (inputValue === "") {
            birthday.setCustomValidity("Birthday is required");
            birthday.classList.remove("is-valid");
            birthday.classList.add("is-invalid");
        } else {
            const today = new Date();
            const inputDate = new Date(inputValue);
            const age = today.getFullYear() - inputDate.getFullYear();
            if (age >= 18) {
            birthday.setCustomValidity("");
            birthday.classList.remove("is-invalid");
            birthday.classList.add("is-valid");
            } else {
            birthday.setCustomValidity("You must be at least 18 years old");
            birthday.classList.remove("is-valid");
            birthday.classList.add("is-invalid");
            }
        }

        if (birthday.validationMessage !== "") {
            alert(birthday.validationMessage);
        }   
        validateForm();
        });

        contactNo.addEventListener("input", function(e) {
        const inputValue = e.target.value;
        const numbersOnly = /^[0-9]+$/;
        if (inputValue === "") {
            contactNo.setCustomValidity("Contact No. is required");
            contactNo.classList.remove("is-valid");
            contactNo.classList.add("is-invalid");
        } else if (inputValue[0] !== '9') {
        contactNo.setCustomValidity("Contact No. must start with 9");
        contactNo.classList.remove("is-valid");
        contactNo.classList.add("is-invalid");
         } else if (inputValue.length !== 10 || isNaN(inputValue)){
            contactNo.setCustomValidity("Contact No. must be 10 characters long");
            contactNo.classList.remove("is-valid");
            contactNo.classList.add("is-invalid");
        } else if (!inputValue.match(numbersOnly)){
            contactNo.setCustomValidity("Contact No. must only be numbers");
            contactNo.classList.remove("is-valid");
            contactNo.classList.add("is-invalid");
        } else {
            contactNo.setCustomValidity("");
            contactNo.classList.remove("is-invalid");
            contactNo.classList.add("is-valid");
        }

        const fullContactNo = contactStart + inputValue;

 
        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "full_contact_no";
        hiddenInput.value = fullContactNo;
        contactNo.after(hiddenInput);

        document.querySelector("#contactno_error").innerText = contactNo.validationMessage;
        validateForm();
        });

        let datehire = document.querySelector("input[name='date_hire']");
        datehire.addEventListener("input", function(e) {
        const inputValue = e.target.value;

        if (inputValue === "") {
            datehire.setCustomValidity("Date Hire is required");
            datehire.classList.remove("is-valid");
            datehire.classList.add("is-invalid");
        }
        if (datehire.validationMessage !== "") {
            alert(datehire.validationMessage);
        }   
        validateForm();
        });

        jobTitle.addEventListener("input", function(e) {
        const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;

        if (inputValue.length === 0) {
          jobTitle.setCustomValidity("Job Title is required");  
          jobTitle.classList.remove("is-valid");
          jobTitle.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
          jobTitle.setCustomValidity("Job Title must not contain letters and special characters");
          jobTitle.classList.remove("is-valid");
          jobTitle.classList.add("is-invalid");
        }
        else {
            jobTitle.setCustomValidity("");
            jobTitle.classList.remove("is-invalid");
            jobTitle.classList.add("is-valid");
        }
        
        document.querySelector("#jobtitle_error").innerText = jobTitle.validationMessage;
        validateForm();
      });

      rank.addEventListener("input", function(e) {
          const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;

        if (inputValue.length === 0) {
            rank.setCustomValidity("Rank is required");  
          rank.classList.remove("is-valid");
          rank.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
          rank.setCustomValidity("Rank must not contain letters and special characters");
          rank.classList.remove("is-valid");
          rank.classList.add("is-invalid");
        }
        else {
            rank.setCustomValidity("");
            rank.classList.remove("is-invalid");
            rank.classList.add("is-valid");
        }
        
        document.querySelector("#rank_error").innerText = rank.validationMessage;
        validateForm();
    });

    department.addEventListener("input", function(e) {
        const inputValue = e.target.value.trim();
        const lettersOnly = /^[a-zA-Z\s]+$/;

        if (inputValue.length === 0) {
          department.setCustomValidity("Department is required");  
          department.classList.remove("is-valid");
          department.classList.add("is-invalid");
        } else if (!inputValue.match(lettersOnly)) {
            department.setCustomValidity("Department must not contain letters and special characters");
          department.classList.remove("is-valid");
          department.classList.add("is-invalid");
        }
        else {
            department.setCustomValidity("");
            department.classList.remove("is-invalid");
            department.classList.add("is-valid");
        }
        
        document.querySelector("#department_error").innerText = department.validationMessage;
        validateForm();
        });

        document.getElementById("activeResigned").addEventListener("change", function() {
            const selectedValue = this.value;
            const dateResignField = document.getElementById("dateResign");
            const dateResigned = document.getElementById("dateResigned");
            if (selectedValue === "Resigned") {
                dateResignField.style.display = "block";
                dateResigned.required = true;
            } else {
                dateResignField.style.display = "none";
                dateResigned.value = "";
                dateResigned.required = false;
            }
        });
        
        function validateForm() {
            if (firstname.classList.contains("is-valid") && middlename.classList.contains("is-valid") && lastname.classList.contains("is-valid") 
             && contactNo.classList.contains("is-valid")  
            && jobTitle.classList.contains("is-valid") && rank.classList.contains("is-valid") 
            && department.classList.contains("is-valid")) {
            submitBtn.removeAttribute("disabled");
            } else {
            submitBtn.setAttribute("disabled", "true");
            }
        }
    });
        }, false);
    })();

        function updateResigned() {
        var activeResigned = document.getElementById("activeResigned");
        var dateResigned = document.getElementById("dateResigned");

        if (activeResigned.value === "Active") {
        dateResigned.placeholder = "N/A";
        dateResigned.value = "N/A";
        } else {
        dateResigned.placeholder = "";
        dateResigned.value = "";
        }
    }
    
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

    <script>
        $(document).ready( function () {
    $('#masterlist').DataTable();
} );
    </script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>