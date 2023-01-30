@extends('layouts.navandfoot')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">

        <!-- announcements -->
            <div class="card mt-5 shadow">
             <div class="card-header" style="background-color: #285430">
                <h1 style="color:#A4BE7B;">📢 Announcements <a href="#" class="btn btn-outline-light float-end mt-2">Make Announcement</a></h1>
            </div>
            <div class="card-body">
                <div class="d-flex mb-4" style="border-bottom: .5px solid black;">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h5 class="ms-3">Patrick Angeles <span class="text-muted ms-3 fs-6">1hr ago</span> </h5>
                <a href="#"><h6 class="ms-5">General Assembly  For February 2023</h6></a>
                </div>
                </div>
                <div class="d-flex mb-4" style="border-bottom: .5px solid black;">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h5 class="ms-3">Patrick Angeles <span class="text-muted ms-3 fs-6">1hr ago</span> </h5>
                <a href="#"><h6 class="ms-5">General Assembly  For February 2023</h6></a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- who's on leave -->
    <div class="col-6 ">
            <div class="card mt-5 shadow">
             <div class="card-header" style="background-color: #285430">
                <h1 style="color:#A4BE7B;">📆 Who's on leave?</h1>
            </div>
            <div class="card-body">
                <small class="fs-6 text-muted">Today</small>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Patrick Angeles <span class="ms-5"><a href="#" class="btn">✅</a><a href="#" class="btn">❎</a></span></h4>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Birthdays corner -->
    <div class="col-6 ">
            <div class="card mt-5 shadow">
             <div class="card-header" style="background-color: #285430">
                <h1 style="color:#A4BE7B;">🎂 Birthday's Corner</h1>
            </div>
            <div class="card-body">
                <small class="fs-6 text-muted">🗓️ For February</small>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Patrick Angeles 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Fin Sienes 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Mick Bautista 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Mick Bautista 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Mick Bautista 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Mick Bautista 🎉</h4>
                </div>
                </div>
                <div class="d-flex mb-4">
                <img src="https://firebasestorage.googleapis.com/v0/b/product-37997.appspot.com/o/pexels-apunto-group-agencia-de-publicidad-7752846.jpg?alt=media&token=388775a6-aad2-4f65-a2d9-f066012d4adb" alt="" class="rounded-circle" height="50">
                <div class="flex-grow">
                <h4 class="ms-3 mt-2">Mick Bautista 🎉</h4>
                </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Headcounts -->
        <div class="col-6">
            <div class="card mt-5 shadow" style="height: 20em;">
             <div class="card-header" style="background-color: #285430">
                <h1 style="color:#A4BE7B;">🧑‍💼 Headcount</h1>
            </div>
            <div class="card-body">
                <div class="text-center mt-5">
                <h1 class="">🗣️ 272</h1>
                <h5>TOTAL ACTIVE EMPLOYEES</h5>
                </div>
                   
        </div>
    </div>
</div>
</div>
</div>

@endsection
