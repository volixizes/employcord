@extends('layouts.app')
@section('title', 'Confirm Employee Information')
@section('content')
<div class="container mt-5" >
<h1 class="mt-2 mb-4">Confirm Employee Information</h1>
<form class="row g-3 needs-validation" method="POST" action="{{ route('storeemployee') }}"  novalidate>
  @csrf
  <div class="col-md-12">
    <label for="firstname" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" readonly>
  </div>
  <div class="col-md-12">
    <label for="middlename" class="form-label">Middle Name</label>
    <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middle_name" value="{{ old('middle_name') }}" readonly>
  </div>
  <div class="col-md-12">
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" readonly>
  </div>
  <div class="col-md-4">
    <label for="birthday" class="form-label">Birthday</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="mm/dd/yy" id="birthday" name="birthday" value="{{ old('birthday') }}" readonly>
    </div>
  </div>
  <div class="col-md-4" style="margin-left:18%">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender') }}" readonly>
  </div>
  <div class="col-md-4">
    <label for="maritalStatus" class="form-label">Marital Status</label>
    <input type="text" class="form-control" id="maritalStatus" name="marital_status" value="{{ old('marital_status') }}" readonly>
  </div>
  <div class="col-md-5" style="margin-left:18%">
    <label for="contactNo" class="form-label">Contact No.</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="contactStart" value="+63">+63</span>
      <input type="text" class="form-control" id="contactNo" aria-describedby="inputGroupPrepend" name="contact_no" value="{{ old('contact_no') }}" readonly>
    </div>
    <div class="col-md-12 mt-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ old('address') }}" readonly>
  </div>
  <div class="col-md-12 mt-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" readonly>
  </div>
  <div class="col-md-12 mt-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" placeholder="Position" name="position" value="{{ old('position') }}" readonly>
  </div>
  <div class="col-md-12 mt-3">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" id="department" placeholder="Department" name="department" value="{{ old('department') }}" readonly>
  </div>
  <div class="col-md-12 mt-3">
    <label for="employment_status" class="form-label">Employment Status</label>
    <input type="text" class="form-control" id="employment_status" placeholder="Employment Status" name="employment_status" value="{{ old('employment_status') }}" readonly>
  </div>
  <div class="col-md-12 mt-3 mb-3">
    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
  </div>
</form>
</div>
@endsection