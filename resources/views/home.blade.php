
@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row mx-3 my-3">

        <!--Announcements-->
        <div class="container mt-3">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif
        </div>
        <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
                <div class="card-header fs-3 fw-bold" style="color: #5865f2;">
                    📢 Announcements
                </div>
                <div class="card-body">
                    <p class="fw-bold text-muted">Create an announcement</p>
                    <form action="{{ route('create-announcement') }}" method="POST">
                    @csrf
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="form-control" placeholder="Type an announcement here..." type="text" name="message" required>
                            <button type="submit" class="btn btn-primary me-md-2"> Post </button>
                        </div>
                    </form>
                    
                    <!-- Announcement display -->
                    @foreach($announcements as $announcement)
                    <div class="card mt-2" style="border-radius: 20px;">
                        <div class="card-body"> 
                            <h6 class="fw-bold">👨 {{$announcement->user->name}} </h6> <small class="text-muted  float-end">{{ $announcement->created_at->diffForHumans() }}</small>
                            <p style="color: black" class="fs-5">
                            {{ $announcement->message }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center my-3">
                        {!! $announcements->links() !!}    
                    </div>    
                </div>
            </div>
        </div>
        
         <!--Who's On Leave?-->
         <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: auto;">
            <div class="card-header fs-3 fw-bold" style="color: #5865f2;">
                🗓️ Who's On Leave
            </div>
            <div class="card-body">
                        <p class="fw-bold text-muted">Leave Requests</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Date of Leave</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sienes</td>
                                    <td>Val Everson</td>
                                    <td>Cruz</td>
                                    <td>February 2, 2023</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">✔</button>
                                        <button type="button" class="btn btn-danger">✘</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Denum</td>
                                    <td>Mike</td>
                                    <td>Ibarra</td>
                                    <td>February 5, 2023</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">✔</button>
                                        <button type="button" class="btn btn-danger">✘</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <p class="fw-bold mt-4 text-muted">Approved Leaves</p>

                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                                <small class="text-muted float-end">TOMORROW (1)</small>
                                <p style="color: blue">👨 Patrick Angeles</p>
                            </div>
                        </div>
                        <div class="card mt-2" style="border-radius: 20px;">
                            
                            <div class="card-body"> 
                                <small class="text-muted float-end">February 7, 2023</small>
                                <p style="color: blue">👨 Mick Bautista</p>
                                
                            </div>
                        </div>
                        
            </div>
        </div>
        </div>
        

        <!--Birthday Corner-->
        <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
            <div class="card-header fs-3 fw-bold" style="color: #5404c4;">
                🎂 Birthday Corner
            </div>
            <div class="card-body">
                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                               <table class="table">
                                <thead>
                                <h1 class="text-center">Birthday List for {{ date('F') }}</h1>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Birthday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($birthdays))
                                    @foreach($birthdays as $birthday)
                                    <tr>
                                        <td>{{ $birthday->first_name }}</td>
                                        <td>{{ $birthday->last_name }}</td>
                                        <td>{{ $birthday->middle_name }}</td>
                                        <td>{{ $birthday->birthday->format('d-m-Y') }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>

                                </tr>
                                    

                               </table>
                               <h1 class="text-center justify-content-center">No employees found.</h1>
                               @endif
                            </div>
                        </div>
                        
            </div>
        </div>
        </div>
        
        <!--Headcount-->
        <div class="col-md-6"> 
        <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
            <div class="card-header fs-3 fw-bold " style="color: #5404c4;">
                👨‍💼 Headcount
            </div>
            <div class="card-body" style="display: flex; align-items: center; justify-content: center; ">
                        
            <p class="fw-bold" style="font-size: 80px; color: #5865f2">250</p>
            <br>
            <p class="fw-bold ms-4" style="font-size: 20px; color: #5865f2"> Active Employees </p>
                        
            </div>
        </div>
        </div>

        
    </div>
    
</div>

@endsection

