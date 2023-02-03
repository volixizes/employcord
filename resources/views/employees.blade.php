@extends('layouts.app')
@section('title', 'Employees')
@section('content')
<div class="container mt-5" >
<h1 class="mt-2 mb-4"> Basic Information </h1>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-12">
    <label for="firstname" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
    <div class="invalid-feedback">
      First name is required
    </div>
  </div>
  <div class="col-md-12">
    <label for="middlename" class="form-label">Middle Name</label>
    <input type="text" class="form-control" id="middlename" placeholder="Middle Name" required>
    <div class="invalid-feedback">
      Middle name is required
    </div>
  </div>
  <div class="col-md-12">
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
    <div class="invalid-feedback">
      Last name is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="birthdate" class="form-label">Birthday</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="mm/dd/yy" id="datepicker">
       <button type="button" class="btn btn-success datebtn" data-toggle="#datepicker">🗓</button>
    </div>
    <div class="invalid-feedback">
      Birthday is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left:18%">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-select" id="gender" required>
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
    <select class="form-select" id="maritalStatus" required>
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
  <div class="col-md-5" style="margin-left:18%">
    <label for="contactNo" class="form-label">Contact No.</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="contactStart" value="+639">+639</span>
      <input type="text" class="form-control" id="contactNo" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Contact No. is required
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="street" class="form-label">Street</label>
    <input type="text" class="form-control" id="street" placeholder="Street" required>
    <div class="invalid-feedback">
      Street is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left:18%">
    <label for="brgyVillage" class="form-label">Barangay / Village</label>
    <input type="text" class="form-control" id="brgyVillage" placeholder="Barangay / Village" required>
    <div class="invalid-feedback">
      Barangay / Village is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="municipalityCity" class="form-label">Municipality / City</label>
    <input type="text" class="form-control" id="municipalityCity" placeholder="Municipality / City" required>
    <div class="invalid-feedback">
      Municipality / City is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left:18%">
    <label for="province" class="form-label">Province</label>
    <input type="text" class="form-control" id="province" placeholder="Province" required>
    <div class="invalid-feedback">
      Province is required
    </div>
  </div>
  <hr>
  <h1 class="mt-2"> Employment Record </h1>
  <div class="col-md-4" style="margin-right: 40%">
    <label for="datehire" class="form-label">Date Hire</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="mm/dd/yy" id="hirepicker">
        <button type="button" class="btn btn-success hirebtn" data-toggle="#hirepicker">🗓</button>
    </div>
    <div class="invalid-feedback">
      Date Hire is required
    </div>
  </div>
  <div class="col-md-4">
    <label for="employmentStatus" class="form-label">Employment Status</label>
    <select class="form-select" id="employmentStatus" required>
      <option selected disabled value="">...</option>
      <option value="Regular">Regular</option>
      <option value="Probationary">Probationary</option>
      <option value="Contractual">Contractual</option>
    </select>
    <div class="invalid-feedback">
      Employment Status is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left:18%">
    <label for="activeResigned" class="form-label">Active / Resigned</label>
    <select class="form-select" id="activeResigned" required>
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
    <input type="text" class="form-control" id="jobTitle" required>
    <div class="invalid-feedback">
      Job Title is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left: 18%">
    <label for="dateResign" class="form-label">If resigned, specify the separation date:</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="mm/dd/yy" id="resignpicker">
       <button type="button" class="btn btn-success hirebtn" data-toggle="#resignpicker">🗓</button>
    </div>
    <div class="invalid-feedback">
      Please provide resignation date, if you have chosen "Resigned"
    </div>
  </div>
  <div class="col-md-4">
    <label for="rank" class="form-label">Rank</label>
    <input type="text" class="form-control" id="rank" required>
    <div class="invalid-feedback">
      Rank is required
    </div>
  </div>
  <div class="col-md-4" style="margin-left: 18%">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" id="department" required>
    <div class="invalid-feedback">
      Department is required
    </div>
  </div>
  <hr>
  <h1 class="mt-2"> EmployCord Account </h1>
  <div class="col-md-4" style="margin-right: 40%">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" required>
    <div class="invalid-feedback">
      Email Address is required
    </div>
  </div>
  <div class="col-md-4" style="margin-right: 40%">
    <label for="empPassword" class="form-label">Password</label>
      <div class="input-group">
      <input type="password" class="form-control" id="empPassword" required>
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
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

</div>
@endsection
