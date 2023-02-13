@extends('layouts.app')
@section('title', 'Track Records')
@section('content')

<div class="container mt-2" >
  <div class="d-flex  align-items-center justify-content-center">
    <div class="me-auto">
      <h1 class="p-0">Track Records</h1>
    </div>
    <div class="mt-3 me-2">
      <p>Search Employee</p>
    </div>
    <div class="">
        <select class="form-select" aria-label="Default select example" id="select2" style="width:200px">
          {{-- <option selected="" >--- Select employee ---</option> --}}
          @foreach($employees as $employee)
            <option value="{{$employee->id}}">{{ $employee->getFullname() }}</option>
          @endforeach
        </select>
    </div>
  </div>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-2">
            <div class="card-body">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                      src="{{url('/images/male-avatar-profile-picture-vector.webp')}}"
                      alt="User profile picture"/>
              </div>
              @if (count($employees) > 0)
              <h3 class="profile-username text-center">{{ $employees->first()->getFullname()  }}</h3>
              
              <p class="text-muted text-center">{{ $employees->first()->Job_Title  }}</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <p>Employment Date</p>
                  <p class="text-center">{{ $employees->first()->date_hire }}</p>
                </li>
                {{-- <li class="list-group-item">
                </li>
                <li class="list-group-item">
                </li> --}}
              </ul>
              @endif
            </div>
            
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-9 p-0">
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-records-tab" data-bs-toggle="pill" data-bs-target="#pills-records" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Clearance</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-memo-tab" data-bs-toggle="pill" data-bs-target="#pills-memo" type="button" role="tab" aria-controls="pills-memo" aria-selected="false">Memo</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-certificate-tab" data-bs-toggle="pill" data-bs-target="#pills-certificate" type="button" role="tab" aria-controls="pills-certificate" aria-selected="false">Certificate</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contract-tab" data-bs-toggle="pill" data-bs-target="#pills-contract" type="button" role="tab" aria-controls="pills-contract" aria-selected="false">Contract</button>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-records" role="tabpanel" aria-labelledby="pills-records-tab" tabindex="0">
                  <form method="POST" action="{{ route('upload-image') }}" class="row mb-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" value="1" class="form-control">
                   
                    <div class="col-md-5">
                      <label for="validationDefault01" class="form-label" >Upload clearance</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png" required>
                    </div>
                    <div class="col-md-3">
                      <label for="validationDefault04" class="form-label">Type</label>
                      <select class="form-select" id="validationDefault04" name="type" required>
                        <option selected>Choose...</option>
                        <option value="Police Clearance">Police Clearnce</option>
                        <option value="NBI Clearance">NBI Clearance</option>
                        <option value="Brgy. Clearance">Brgy. Clearance</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="validationDefault02" class="form-label">Expiration</label>
                      <input type="date" class="form-control" id="validationDefault02" value="" name="expiration" required>
                    </div>
                    <div class="col-md-1 bg-success">
                      <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($clearances) > 0 )
                    @foreach($clearances as $clearance)
                    @if ($clearance != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class=" col-5">{{ $clearance->image_type }}</h5>
                        <p class=" col-5">Valid until: {{$clearance->expiration}}</p>
                        <p class="text-warning col-2"><small>{{$clearance->getStatus()}}</small></p>
                      </div>
                    
                      <div class="">
                        <a href="{{ Storage::url('public/images/'.$clearance->image_path) }}" target="_blank" class="text-decoration-none text-dark">
                          Show document.
                        </a> 
                      </div> 
                    </div>
                    @endif
                    @endforeach
                    @else 
                    <p class="text-center">No documents found.</p>
                    @endif
                  </div>
                </div>
                <div class="tab-pane fade show" id="pills-memo" role="tabpanel" aria-labelledby="pills-memo-tab" tabindex="0">
                  <form method="POST" action="{{ route('upload-image') }}" class="row mb-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" value="1" class="form-control">
                    <input type="hidden" name="type" value="Memo" class="form-control">

                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label" >Upload memo</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png,.pdf" required>
                    </div>
                    <div class="col-md-5">
                      <label for="validationDefault02" class="form-label">Title</label>
                      <input type="text" class="form-control" id="validationDefault02" value="" name="image_name" placeholder="MO no. 1: Salary increase." required>
                    </div>
                    <div class="col-md-1 bg-success">
                      <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($memos) > 0 )
                    @foreach($memos as $memo)
                    @if ($memo != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class=" col-5">{{ $memo->image_name }}</h5>
                        {{-- <p class=" col-5">Valid until: {{$memo->expiration}}</p>
                        <p class="text-warning col-2"><small>{{$memo->getStatus()}}</small></p> --}}
                      </div>
                    
                      <div class="">
                        <a href="{{ Storage::url('public/images/'.$memo->image_path) }}" target="_blank" class="text-decoration-none text-dark">
                          Show document.
                        </a> 
                      </div> 
                    </div>
                    @endif
                    @endforeach
                    @else 
                    <p class="text-center">No documents found.</p>
                    @endif
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-certificate" role="tabpanel" aria-labelledby="pills-certificate-tab" tabindex="0">
                  <form method="POST" action="{{ route('upload-image') }}" class="row mb-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" value="1" class="form-control">
                    <input type="hidden" name="type" value="Cert" class="form-control">

                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label" >Upload Certificate</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png,.pdf" required>
                    </div>
                    <div class="col-md-5">
                      <label for="validationDefault02" class="form-label">Title</label>
                      <input type="text" class="form-control" id="validationDefault02" value="" name="image_name" placeholder="OOP Intoduction" required>
                    </div>
                    <div class="col-md-1 bg-success">
                      <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($certs) > 0 )
                    @foreach($certs as $cert)
                    @if ($cert != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class=" col-5">{{ $cert->image_type }}</h5>
                        <a href="{{ route('view-image', $cert->id)}}" class="btn btn-primary btn-small">View</a>
                        {{-- <p class="text-warning col-2"><small>{{$cert->getStatus()}}</small></p> --}}
                      </div>
                    
                    
                      <div class="">
                        <a href="{{ Storage::url('public/images/'.$cert->image_path) }}" target="_blank" class="text-decoration-none text-dark">
                          Show document
                        </a> 
                      </div> 

                      {{-- <div class="card">
                        <a href="{{ Storage::url('public/images/'.$cert->image_path) }}" class="" alt="image">Show doucment</a> 
                      </div> --}}

                    </div>
                    @endif
                    @endforeach
                    @else 
                    <p class="text-center">No document found.</p>
                    @endif
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-contract" role="tabpanel" aria-labelledby="pills-contract-tab" tabindex="0">
                  <form method="POST" action="{{ route('upload-image') }}" class="row mb-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" value="1" class="form-control">
                    <input type="hidden" name="type" value="Contract" class="form-control">

                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label" >Upload contract</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png" required>
                    </div>
                    <div class="col-md-4">
                      <label for="validationDefault02" class="form-label">Expiration</label>
                      <input type="date" class="form-control" id="validationDefault02" value="" name="expiration" required>
                    </div>
                    <div class="col-md-2 bg-success">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                  
                  @if ($contract != NULL) 
                  <div class="card">
                    <img src="{{ Storage::url('public/images/'.$contract->image_path) }}" class="rounded mx-auto img-fluid" style="height:800px" alt="image">  
                  </div>
                  @else
                  <p class="text-center">No documents found.</p>                  
                  @endif
                 
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#select2').select2({
        placeholder:"Select employee",
        // ajax:{
        //   url:"",
        //   type:"POST",
          // dataType:"json",
          // delay:250,
          // data:function(params)
        // }
      });
    });
  </script>
@endsection
