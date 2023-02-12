
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
                <div class="card-header fs-5 fw-bold" style="color: #285430;">
                    📢 Announcements
                </div>
                
                <div class="card-body">
                @if(Auth::user()->employee_id)
                    
                <p class="fw-bold text-muted">Announcements</p>
                    <style>
                        .admin{
                            display: none;
                        }
                    </style>
                    @else
                    <p class="fw-bold text-muted admin">Create an announcement</p>
                    <form action="{{ route('create-announcement') }}" method="POST" class="admin">
                    @csrf
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="form-control" placeholder="Type an announcement here..." type="text" name="message" required>
                            <button type="submit" class="btn btn-primary me-md-2"> Post </button>
                        </div>
                    </form>
                    @endif
                    <!-- Announcement display -->
                    @foreach($announcements as $announcement)
                    <div class="card mt-2" style="border-radius: 20px;">
                        <div class="card-body"> 
                            <h6>👨 {{$announcement->user->name}} </h6> <small class="text-muted  float-end">{{ $announcement->created_at->diffForHumans() }}</small>
                            <p style="color: blue">
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
        
        @if(Auth::user()->employee_id)
                  <!--Who's On Leave?-->
         <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: auto;">
            <div class="card-header fs-5 fw-bold" style="color: #285430;">
                🗓️ Who's On Leave
            </div>
            <div class="card-body">
                    <form action="">
                    <div class="row">
                        <div class="col">
                            <label for="date-leave">Leave Date</label>
                            <input type="date" class="form-control" placeholder="mm/dd/yy">
                        </div>
                        <div class="col">
                            <label for="date-leave">Date of return</label>
                            <input type="date" class="form-control" placeholder="mm/dd/yy">
                        </div>
                        </div>
                        <div class="col-12 mt-3 form-floating">
                        <textarea type="text" class="form-control" id="reason" style="height: 80px"></textarea>
                        <label for="reason">Reason</label>
                        </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                    <hr>
                        <p class="fw-bold text-muted">Approved Leaves</p>

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
        @else
               <!--Who's On Leave?-->
         <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: auto;">
            <div class="card-header fs-5 fw-bold" style="color: #285430;">
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
        @endif
        
        
        

        <!--Birthday Corner-->
        <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
            <div class="card-header fs-5 fw-bold" style="color: #285430;">
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
            <div class="card-header fs-5 fw-bold " style="color: #285430;">
                👨‍💼 Headcount
            </div>
            <div class="card-body">
                        <p class="fw-bold text-muted">Create an announcement</p>
                        <form action="#">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input class="form-control" placeholder="Type an announcement here..." type="text">
                                    <button class="btn btn-primary me-md-2" type="button">Post</button>
                                    </div>
                        </form>
                        <p class="fw-bold mt-4 text-muted">Recent Announcements</p>
                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                                <h6>👨 Patrick Angeles</h6> <small class="text-muted">5 minutes ago</small>
                                <p style="color: blue">General Assembly for the month of February 2023</p>
                                
                            </div>
                        </div>
                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                                <h6>👨 Val Everson Sienes</h6> <small class="text-muted">1h ago</small>
                                <p style="color: blue">ISO Surveillance Audit</p>
                                
                            </div>
                        </div>
                        
            </div>
        </div>
        </div>

        
    </div>
    
</div>

@endsection

