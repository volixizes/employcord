
@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row mx-3 my-3">

        <!--Announcements-->
        <div class="container mt-3">
            @if (session()->has('announcemet'))
                <div class="alert alert-success")>
                    {{ session('announcement') }}
                </div>
             @endif
        </div>
        <div class="col-md-6"> 
        <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
            <div class="card-header fs-5 fw-bold" style="color: #285430;">
                📢 Announcements
            </div>
            <div class="card-body">
                        <p class="fw-bold text-muted">Create an announcement</p>
                        <form action="{{ route('home') }}" method="POST">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input class="form-control" placeholder="Type an announcement here..." type="text">
                                    <button class="btn btn-primary me-md-2" type="button">Post</button>
                                    </div>
                        </form>
                        <p class="fw-bold mt-4 text-muted">Recent Announcements</p>
                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                                <h6>👨 {{  }}</h6> <small class="text-muted float-end">5 minutes ago</small>
                                <p class="fw-bold" style="color: blue">General Assembly for the month of February 2023</p>
                                
                            </div>
                        </div>
                        <div class="card mt-2" style="border-radius: 20px;">
                            <div class="card-body"> 
                                <h6>👨 Val Everson Sienes</h6> <small class="text-muted  float-end">1h ago</small>
                                <p style="color: blue">ISO Surveillance Audit</p>
                                
                            </div>
                        </div>
                        
                        
            </div>
        </div>
        </div>
        
         <!--Who's On Leave?-->
         <div class="col-md-6"> 
            <div class="card mt-4 shadow" style="border-radius: 20px; background-color: #F2F1F0; height: 33rem;">
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
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Birthday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bautista</td>
                                        <td>Mick</td>
                                        <td>Lopez</td>
                                        <td>Fabruary 5, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Bautista</td>
                                        <td>Mick</td>
                                        <td>Lopez</td>
                                        <td>Fabruary 5, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Bautista</td>
                                        <td>Mick</td>
                                        <td>Lopez</td>
                                        <td>Fabruary 5, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Bautista</td>
                                        <td>Mick</td>
                                        <td>Lopez</td>
                                        <td>Fabruary 5, 2023</td>
                                    </tr>
                                </tbody>
                               </table>
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

