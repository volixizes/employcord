@extends('layouts.app')
@section('title', 'Masterlist')
@section('content')

<div class="container">

<a href="{{route('addemployee')}}" type="button" class="btn btn-primary float-end">➕ Add Employee</a>
<h1 class="fw-bold" style="background: #5404C4; background: linear-gradient(to top right, #5404C4 37%, #5865F2 58%)-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Employees' Masterlist</h1>

<div class="card" style="border-radius: 15px;">
  <div class="card-body">

  <table class="table table-hover table-bordered mt-4" id="masterlist">
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
    @foreach($employees as $employee)
    <tr>
      <td style="vertical-align: middle;">{{ $employee->id }}</td>
      <td style="vertical-align: middle;">{{ $employee->last_name }}</td>
      <td style="vertical-align: middle;">{{ $employee->first_name }}</td>
      <td style="vertical-align: middle;">{{ $employee->date_hire }}</td>
      <td style="vertical-align: middle;">{{ $employee->Job_Title }}</td></td>
      <td style="vertical-align: middle;">{{ $employee->employment_status }}</td>
      <td style="vertical-align: middle;">{{ $employee->department }}</td>
      <td style="text-align: center;">
        <a href="{{ route('generatepdf', $employee->id) }}" target="_blank" type="button" class="btn btn-success me-2"><i class="fa fa-eye"></i></a>
        <a href="{{ route('edit', $employee->id) }}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
   @endforeach
    
   
</table>


  </div>
</div>


</div>


@endsection

