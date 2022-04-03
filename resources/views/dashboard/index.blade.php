@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>
<!DOCTYPE html>
<html lang="en">

<body>
  <div class="card-body">
    <div class="col-md-12">
      <div class="profile-header">
        <div class="row align-items-center">
          <div class="col-auto profile-image">
            <a href="#"> <img class="rounded-circle" alt="User Image" src="\img\person.png" width="150" height="140"></a>
          </div>
          <div class="col ml-md-n2 profile-user-info">
            <h4 class="user-name mb-3">{{ auth()->user()->name }}</h4>
            <h6 class="text-muted mt-1">Doctor</h6>
            <div class="user-Location mt-1"><i class="bi bi-house-door-fill"></i></i> Ngawi, Indonesia</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title d-flex justify-content-between">
              <span>Personal Details</span>
            </h5>
            <div class="row mt-5">
              <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
              <p class="col-sm-9">{{ auth()->user()->name }}</p>
            </div>
            <div class="row">
              <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
              <p class="col-sm-9">24 Jul 1983</p>
            </div>
            <div class="row">
              <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email </p>
              <p class="col-sm-9">rahmadyahsyirat@gmail.com</a></p>
            </div>
            <div class="row">
              <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
              <p class="col-sm-9">0852-3052-5448</p>
            </div>
            <div class="row">
              <p class="col-sm-3 text-sm-right mb-0">Address</p>
              <p class="col-sm-9 mb-0">Mantingan,
                <br> Ngawi,
                <br> Jawa-Timur,
                <br> Indonesia.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</body>

</html>
@endsection