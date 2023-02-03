@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #97cc04">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary p-5" style="border-radius:100%">Profile</button>
                    <div class="col-md-12">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="float: right">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                             <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Center Side Of Navbar -->
                                    <ul class="navbar-nav ms-center">
                                        <li class="nav-item ms-1 me-1">
                                         <a class="nav-link" href="">{{ __('Personal Information') }}</a>
                                        </li>
                                        <li class="nav-item ms-1 me-1">
                                         <a class="nav-link" href="">{{ __('Documents') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection