<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
=======
@extends('layouts.navandfoot')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('This is Admin Dashboard') }}</div>
>>>>>>> 9105594d1bba8a14fd4b8a9ed456925eb5b658a4

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 9105594d1bba8a14fd4b8a9ed456925eb5b658a4
