@extends('layouts.app')
@section('title', 'Confirm Employee Information')
@section('content')
<div class="container mt-3" >
<h1 class=" mb-4 fw-bold">Confirm Employee Information</h1>
<form class="row g-3 needs-validation" method="GET" action="{{ route('storeemployee') }}"  novalidate>
  @csrf
  @foreach($employees as $employee)
  <div class="col-md-12">
        <label for="firstname" class="form-label">First name</label>
        <input type="text" class="form-control" id="firstname" placeholder="{{ $employee->first_name }}" name="first_name" value="{{ $employee->first_name }}" readonly>
  </div>
  <div class="col-md-12">
        <label for="middlename" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="middlename" placeholder="{{ $employee->middle_name }}" name="middle_name" value="{{ $employee->middle_name }}" readonly>
  </div>
  <div class="col-md-12">
        <label for="lastname" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastname" placeholder="{{ $employee->last_name }}" name="last_name" value="{{ $employee->last_name }}" readonly>
  </div>
  <div class="col-md-4">
        <label for="birthday" class="form-label">Birthday</label>
        <div class="input-group mb-3">
            <input type="date" class="form-control" placeholder="{{ $employee->birthday }}" id="birthday" name="birthday" value="{{ $employee->birthday }}" readonly>
        </div>
  </div>
  <div class="col-md-4" style="">
        <label for="gender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" value="{{ $employee->gender }}" placeholder="{{ $employee->gender }}" readonly>
  </div>
  <div class="col-md-4">
        <label for="maritalStatus" class="form-label">Marital Status</label>
        <input type="text" class="form-control" id="maritalStatus" name="marital_status" value="{{ $employee->marital_status }}" placeholder ="{{ $employee->marital_status }}" readonly>
  </div>
      <div class="col" style="">
        <label for="contactNo" class="form-label">Contact No.</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="contactStart" value="+63">+63</span>
          <input type="text" class="form-control" id="contactNo" aria-describedby="inputGroupPrepend" name="contact_no" value="{{ $employee->contact_no }}" placeholder ="{{ $employee->contact_no }}" readonly>
      </div>

        <div class="row">
                  <div class="col" >
                        <label for="street" class="form-label mt-2">Street</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="{{ $employee->street }}" value="{{ $employee->street }}" readonly>
                  </div>
                  <div class="col">
                        <label for="brgyVillage" class="form-label mt-2">Barangay / Village</label>
                        <input type="text" class="form-control" id="brgyVillage" name="barangay" placeholder="{{ $employee->barangay }}" value="{{ $employee->barangay }}" readonly>
                  </div>
                  
        </div>
  
        <div class="row">
                  <div class="col" >
                                    <label for="municipalityCity" class="form-label mt-2">Municipality / City</label>
                                    <input type="text" class="form-control" id="municipalityCity" name="city" placeholder="{{ $employee->city }}" value="{{ $employee->city }}" readonly>
                  </div>
                  <div class="col mb-3" style="">
                                    <label for="province" class="form-label mt-2">Province</label>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="{{ $employee->province }}" value="{{ $employee->province }}" readonly>
                  </div>
        </div>
  
  <hr>
  <h1 class="mt-3 mb-2 fw-bold"> Employment Record </h1>

  <div class="row">
                  <div class="col" style="">
                        <label for="datehire" class="form-label">Date Hire</label>
                        <input type="text" class="form-control" id="datehire" name="date_hire" placeholder="{{ $employee->date_hire }}" value="{{ $employee->date_hire }}" readonly>
                  </div>
                  <div class="col">
                        <label for="employmentStatus" class="form-label">Employment Status</label>
                        <input type="text" class="form-control" id="employmentStatus" name="employment_status" placeholder="{{ $employee->employment_status }}" value="{{ $employee->employment_status }}" readonly>
                  </div>
                  <div class="col" style="">
                        <label for="activeResigned" class="form-label">Active / Resigned</label>
                        <input type="text" class="form-control" id="activeResigned" name="isActive" placeholder="{{ $employee->isActive }}" onchange="updateResigned()" value="{{ $employee->isActive }}" readonly>
                  </div>
                  <div class="col" style="">
                  <label for="dateResign" class="form-label">Resigned</label>
                  <input type="text" class="form-control" id="dateResigned" name="isResigned" placeholder="{{ $employee->isResigned }}" value="{{ $employee->isResigned }}" readonly>
                  </div>
  </div>

  <div class="row mb-5">
  <div class="col">
        <label for="jobTitle" class="form-label mt-2">Job Title</label>
        <input type="text" class="form-control" id="jobTitle" name="Job_Title" placeholder="{{ $employee->Job_Title }}" value="{{ $employee->Job_Title }}" readonly>
  </div>
  
  <div class="col">
    <label for="rank" class="form-label mt-2">Rank</label>
    <input type="text" class="form-control" id="rank" name="rank" placeholder="{{ $employee->rank }}" value="{{ $employee->rank }}" readonly>
  </div>
  <div class="col">
    <label for="department" class="form-label mt-2">Department</label>
    <input type="text" class="form-control" id="department" placeholder="{{ $employee->department }}" name="department" value="{{ $employee->rank }}" readonly>
  </div>
  </div>
  
  <hr>
  <h1 class="mt-3 mb-2 fw-bold"> EmployCord Account </h1>
  
  <div class="row">
  <div class="col-md-6" style="">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="{{ $employee->email }}" value="{{ $employee->email }}" readonly>
  </div>
  <div class="col-md-6" style="">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="{{ $employee->password }}" value="{{ $employee->password }}" readonly>
  </div>
  </div>
  
  @endforeach
  <div class="btn-group mt-5 " role="group" aria-label="Basic mixed styles example" style="display: flex;
    justify-content: center;">
      <a type="button" href="{{ route('updateemployee') }}" class="btn btn-primary">Previous</a>
      <a type="button" href="#" class="btn btn-secondary">Download PDF</a>
      <a type="button" href="#" class="btn btn-success">Proceed Registration</a>
</div>
</form>
</div>
@endsection