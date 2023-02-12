@extends('layouts.app')
@section('title', 'Masterlist')
@section('content')

<div class="container">

<a href="{{route('addemployee')}}" type="button" class="btn btn-primary float-end">+ Add Employee</a>
<h1 class="fw-bold" >Employees' Masterlist</h1>

<div class="card" style="border-radius: 15px;">
  <div class="card-body">

  <table class="table table-hover table-bordered mt-4" >
  <thead class="fw-bold" style="background-color: #5404c4; text-align: center; color: white">
    <tr>
      <th>ID</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Date Employed</th>
      <th>Position</th>
      <th>Employment Status</th>
      <th>Department</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="vertical-align: middle;">0001</td>
      <td style="vertical-align: middle;">Angeles</td>
      <td style="vertical-align: middle;">Patrick Jerowin</td>
      <td style="vertical-align: middle;">February 13, 2023</td>
      <td style="vertical-align: middle;">Associate Software Engineer</td></td>
      <td style="vertical-align: middle;">Regular</td>
      <td style="vertical-align: middle;">Accenture Department</td>
      <td style="text-align: center;">
        <a href="#" type="button" class="btn btn-success me-2"><i class="fa fa-eye"></i></a>
        <a href="#" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
   
    
</table>
  </div>
</div>


</div>


@endsection

