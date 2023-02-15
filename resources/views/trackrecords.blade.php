@extends('layouts.app')
@section('title', 'Track Records')
@section('content')

<div class="container mt-2" >
  <div class="d-flex  align-items-center justify-content-center">
    <div class="me-auto">
      <h2 class="fw-bold ps-2">Track Employee Records</h2>
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
          <div class="card"  style="border-radius: 20px;">
            <div class="card-body">
              
            <!-- Upload Profile Pic -->
            
            <form action="{{ route('images.store', $employee->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="profilepic">

              
                <input type="file" name="image" accept=".gif,.jpg,.jpeg" required class="my_file"/></i>
              </div>
              <button type="submit">Upload</button>
            </form>     

              @if (count($employees) > 0)

              <h3 class="profile-username text-center fw-bold mb-3">{{ $employees->first()->getFullname()  }}</h3>
              
              <div class="card" style="width: 16.5rem; border-radius: 5px;">
                <ul class="list-group list-group-flush"> 
                  <li class="list-group-item">🖊️ <small class="text-muted fw-bold">{{ $employees->first()->Job_Title }}</small></li>
                  <li class="list-group-item">📧 <small class="text-muted fw-bold">{{ $employees->first()->email}}</small></li>
                  <li class="list-group-item">🤝 <small class="text-muted fw-bold">{{ $employees->first()->date_hire }}</small></li>
                  <li class="list-group-item">👨‍💼 <small class="text-muted fw-bold">{{ $employees->first()->employment_status }}</small></li>
                  <li class="list-group-item">🏬 <small class="text-muted fw-bold">{{ $employees->first()->department }}</small></li>
                </ul>
              </div>

              @endif

            </div>
            
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-9 p-0">
          <div class="card" style="border-radius: 10px;">
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
                      <label for="validationDefault01" class="form-label" >Upload Clearance</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png" required>
                    </div>
                    <div class="col-md-3">
                      <label for="validationDefault04" class="form-label">Type</label>
                      <select class="form-select" id="validationDefault04" name="type" required>
                        <option selected>Choose...</option>
                        <option value="Police Clearance">Police Clearance</option>
                        <option value="NBI Clearance">NBI Clearance</option>
                        <option value="Brgy. Clearance">Barangay Clearance</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="validationDefault02" class="form-label">Expiration</label>
                      <input type="date" class="form-control" id="validationDefault02" value="" name="expiration" required>
                    </div>
                    <div class="col-md-1" style="display: flex; align-items: flex-end; justify-content: center;">
                      <button class="btn btn-primary" type="submit">⬆️</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($clearances) > 0 )
                    @foreach($clearances as $clearance)
                    @if ($clearance != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <p class=" col-5 fw-bold">{{ $clearance->image_type }}</p>
                        <p class=" col-5">Valid until: <b>{{$clearance->expiration}}</b></p>
                        <p class="text-warning col-2 fw-bold"> <span class="badge text-bg-warning">{{$clearance->getStatus()}}</span></p>
                      </div>
                    
                      <div class="text-center">
                        <a href="{{ Storage::url('public/images/'.$clearance->image_path) }}" type="button" target="_blank" class="btn btn-light">
                          Show Document
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
                      <label for="validationDefault01" class="form-label" >Upload Memo</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png,.pdf" required>
                    </div>
                    <div class="col-md-5">
                      <label for="validationDefault02" class="form-label">Title</label>
                      <input type="text" class="form-control" id="validationDefault02" value="" name="image_name" placeholder="Type a memo title here..." required>
                    </div>
                    <div class="col-md-1" style="display: flex; align-items: flex-end; justify-content: center;">
                      <button class="btn btn-primary" type="submit">⬆️</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($memos) > 0 )
                    @foreach($memos as $memo)
                    @if ($memo != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class=" col-5">{{ $memo->image_name }}</h5>
                        {{-- <p class=" col-5">Valid until: <b>{{$memo->expiration}}</b></p>
                        <p class="col-2"> <span class="badge text-bg-warning">{{$memo->getStatus()}}</span></p> --}}
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
                      <input type="text" class="form-control" id="validationDefault02" value="" name="image_name" placeholder="Type a certificate title here.." required>
                    </div>
                    <div class="col-md-1" style="display: flex; align-items: flex-end; justify-content: center;">
                      <button class="btn btn-primary" type="submit">⬆️</button>
                    </div>
                  </form>
                  <div class="list-group">
                    @if (count($certs) > 0 )
                    @foreach($certs as $cert)
                    @if ($cert != NULL)
                    <div href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class=" col-5">{{ $cert->image_type }}</h5>
                        
                        {{-- <p class="text col-2"> <span class="badge text-bg-warning">{{$cert->getStatus()}}</span></p> --}}
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
                    <p class="text-center">No documents found.</p>
                    @endif
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-contract" role="tabpanel" aria-labelledby="pills-contract-tab" tabindex="0">
                  <form method="POST" action="{{ route('upload-image') }}" class="row mb-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" value="1" class="form-control">
                    <input type="hidden" name="type" value="Contract" class="form-control">

                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label" >Upload Contract</label>
                      <input type="file" class="form-control" id="validationDefault01" name="image" accept=".gif,.jpg,.jpeg,.png" required>
                    </div>
                    <div class="col-md-4">
                      <label for="validationDefault02" class="form-label">Expiration</label>
                      <input type="date" class="form-control" id="validationDefault02" value="" name="expiration" required>
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end; justify-content: center;">
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
