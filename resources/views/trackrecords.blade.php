@extends('layouts.navandfoot')
@section('title', 'Track Records')
@section('content')

<style>
  .nav-link > .active > a { 
    background-color: green ; 
}

 .nav .active a,.nav .active a:hover,.nav .active a:focus {
    background-color: green;
    color: #FFFFFF;
} 
</style>

<div class="container mt-2" >
  <div class="d-flex  align-content-center">
    <div class="me-auto">
      <h1>Track Records</h1>
    </div>
    <div class="pt-3">
      <p>Search Employee</p>
    </div>
    <div class="p-2">
        <select class="form-select" aria-label="Default select example">
          <option selected>--- Select employee ---</option>
          <option value="1">Patrick</option>
          <option value="2">Mike</option>
          <option value="3">Mick</option>
          <option value="3">Fin</option>
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
              <h3 class="profile-username text-center">Patrick Angeles</h3>
              <p class="text-muted text-center">Software Engineer</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <p>Employment Date</p>
                </li>
                {{-- <li class="list-group-item">
                </li>
                <li class="list-group-item">
                </li> --}}
              </ul>
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
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 col-5">Police Clearance</h5>
                        <p class="mb-1 col-5">Valid until: Feb. 5, 2023</p>
                        <p class="text-warning col-2"><small>15 days to expire</small></p>
                      </div>
                      {{-- <small>And some small print.</small> --}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="list" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 col-5">Police Clearance</h5>
                        <p class="mb-1 col-5">Valid until: Feb. 5, 2023</p>
                        <p class="text-warning col-2"><small>15 days to expire</small></p>
                      </div>
                      {{-- <small>And some small print.</small> --}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="list">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 col-5">NBI Clearance</h5>
                        <p class="mb-1 col-5">Valid until: Jan. 29, 2023</p>
                        <p class="text-danger col-2"><small>Expired!</small></p>
                      </div>
                      {{-- <small class="text-muted">And some muted small print.</small> --}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="list">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 col-5">Barangay Clearance</h5>
                        <p class="mb-1 col-5">Valid until: Jan. 29, 2023</p>
                        <p class="text-danger col-2"><small> Expired!</small></p>
                      </div>
                      {{-- <small class="text-muted">And some muted small print.</small> --}}
                    </a>
                    {{-- <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a> --}}
                  </div>
                </div>
                <div class="tab-pane fade show" id="pills-memo" role="tabpanel" aria-labelledby="pills-memo-tab" tabindex="0">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small>And some small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-certificate" role="tabpanel" aria-labelledby="pills-certificate-tab" tabindex="0">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small>And some small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contract" role="tabpanel" aria-labelledby="pills-contract-tab" tabindex="0">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small>And some small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Some placeholder content in a paragraph.</p>
                      <small class="text-muted">And some muted small print.</small>
                    </a>
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
