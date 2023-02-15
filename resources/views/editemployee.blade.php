@extends('layouts.app')
@section('title', 'Update Employee')
@section('content')

<div style="position: absolute; top: 110; right: 110;">
  <a href="{{route('employees')}}" type="button" class="btn btn-primary">⬅️ Back to masterlist</a>
</div>

<div class="container mt-5" style="position: relative;" >

@if(session('success'))
<div class="alert alert-primary">
  {{ session('success') }}
</div>
@endif



  <div class="card p-5" style="border-radius: 20px;">
    <div class="card-body">
    <h3 class="card-title text-center fw-bold  mb-5">Update Employee Information</h3>
    <h4 class="card-subtitle mb-2 text-muted mb-3 fw-bold">Basic Information</h4>
    <form class="row g-3 needs-validation" method="POST" action="{{ route('update') }}"  novalidate>
  @csrf
  <div class="col-md-12">
    <label for="firstname" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="first_name" value="{{ $employee->first_name }}" required>
    <div class="invalid-feedback">
      <div id="firstname_error"></div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="middlename" class="form-label">Middle Name</label>
    <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middle_name" value="{{ $employee->middle_name }}" required>
    <div class="invalid-feedback">
      <div id="middlename_error"></div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="last_name"  value="{{ $employee->last_name }}" required>
    <div class="invalid-feedback">
      <div id="lastname_error"></div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="birthday" class="form-label">Birthday</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="mm/dd/yy" id="birthday" name="birthday"  value="{{ $employee->birthday }}" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-select" id="gender" name="gender"  value="{{ $employee->gender }}" required>
      <option selected disabled value="">...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <div class="invalid-feedback">
      Gender is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="maritalStatus" class="form-label">Marital Status</label>
    <select class="form-select" id="maritalStatus" name="marital_status"  value="{{ $employee->marital_status }}" required>
      <option selected disabled value="">...</option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Widowed">Widowed</option>
      <option value="Divorced">Divorced</option>
    </select>
    <div class="invalid-feedback">
      Marital Status is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="contactNo" class="form-label">Contact No.</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="contactStart" value="+63">+63</span>
      <input type="text" class="form-control" id="contactNo" aria-describedby="inputGroupPrepend" name="contact_no"  value="{{ $employee->contact_no }}" required>
      <div class="invalid-feedback">
        <div id="contactno_error"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="street" class="form-label">Street</label>
    <input type="text" class="form-control" id="street" placeholder="Street" name="street"  value="{{ $employee->street }}" required>
    <div class="invalid-feedback">
      Street is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="brgyVillage" class="form-label">Barangay / Village</label>
    <input type="text" class="form-control" id="brgyVillage" placeholder="Barangay / Village" name="barangay"  value="{{ $employee->barangay }}" required>
    <div class="invalid-feedback">
      Barangay / Village is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="municipalityCity" class="form-label">Municipality / City</label>
    <input type="text" class="form-control" id="municipalityCity" placeholder="Municipality / City" name="city" value="{{ $employee->city }}" required>
    <div class="invalid-feedback">
      Municipality / City is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="province" class="form-label">Province</label>
    <input type="text" class="form-control" id="province" placeholder="Province" name="province"  value="{{ $employee->province }}" required>
    <div class="invalid-feedback">
      Province is required
    </div>
  </div>
  <hr>
  <h4 class="card-subtitle mb-2 text-muted fw-bold">Employment Information</h4>
  <div class="col-md-4">
    <label for="datehire" class="form-label">Date Hire</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="mm/dd/yy" id="datehire" name="date_hire"  value="{{ $employee->date_hire }}" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="employmentStatus" class="form-label">Employment Status</label>
    <select class="form-select" id="employmentStatus" name="employment_status"  value="{{ $employee->employment_status }}" required>
      <option selected disabled value="">...</option>
      <option value="Regular">Regular</option>
      <option value="Probationary">Probationary</option>
      <option value="Contractual">Contractual</option>
    </select>
    <div class="invalid-feedback">
      Employment Status is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="activeResigned" class="form-label">Active / Resigned</label>
    <select class="form-select" id="activeResigned" name="isActive"  value="{{ $employee->isActive }}" required>
      <option selected disabled value="">...</option>
      <option value="Active">Active</option>
      <option value="Resigned">Resigned</option>
    </select>
    <div class="invalid-feedback">
      Active / Resigned is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="jobTitle" class="form-label">Job Title</label>
    <input type="text" class="form-control" id="jobTitle" name="Job_Title"  value="{{ $employee->Job_Title }}" required>
    <div class="invalid-feedback">
        <div id="jobtitle_error"></div>
    </div>
  </div>
  <div class="col-md-4" id="dateResign">
    <label for="dateResign" class="form-label">If resigned, specify the separation date:</label>
    <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="mm/dd/yy" id="dateResigned" name="isResigned" value="{{ $employee->isResigned }}" required>
    </div>
    <div class="invalid-feedback">
      Please provide resignation date, if you have chosen "Resigned"
    </div>
  </div>
  <div class="col-md-4">
    <label for="rank" class="form-label">Rank</label>
    <input type="text" class="form-control" id="rank" name="rank"  value="{{ $employee->rank }}" required>
    <div class="invalid-feedback">
        <div id="rank_error"></div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" id="department" name="department"  value="{{ $employee->department }}" required>
    <div class="invalid-feedback">
        <div id="department_error"></div>
    </div>
  </div>
  <hr>
  <h4 class="card-subtitle mb-2 text-muted fw-bold">EmployCord Account</h4>
  <div class="col-md-4" style="margin-right: 40%">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" name="email"  value="{{ $employee->email }}" required>
    <div class="invalid-feedback">
      Email Address is required
    </div>
    @if (session('error'))
        <div class="alert alert-danger mt-2">{{ session('error') }}</div>
    @endif
  </div>
  <div class="col-md-4" style="margin-right: 50%">
    <label for="empPassword" class="form-label">Password</label>
      <div class="input-group">
      <input type="password" class="form-control" id="empPassword" name="password"  value="{{ $employee->password }}" required>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" id="showPasswordBtn" type="button">
          <i class="fa fa-eye-slash"></i>
        </button>
      </div>
    </div>
    <div class="invalid-feedback">
      Password is required
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name=" "required>
      <label class="form-check-label" for="invalidCheck">
        <input type="hidden" name="id" value="{{ $employee->id }}">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Update Employee</button>
  </div>
</form>

</div>
@endsection
    </div>

</div>




