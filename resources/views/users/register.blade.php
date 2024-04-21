@extends('layouts.app')

@section('content')
<h3 class="text-center">Dang ky</h3>
<div class="row justify-content-center my-4">
    <div class="col-md-4">
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
        aria-controls="pills-login" aria-selected="true">Login</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
        aria-controls="pills-register" aria-selected="false">Register</a>
    </li>
  </ul>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-md-4">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" id="" name="email" placeholder="example@gmail.com">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Full name</label>
                <input type="fullname" class="form-control" id="" name="name" placeholder="fullname">
              </div>
            
            <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" id="" name="password" placeholder="password">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Confirm password</label>
            <input type="confirmpassword" class="form-control" id="" name="confirmpassword" placeholder="confirm password">
          </div>
          <div class="row mb-4">
            <div class="col d-flex justify-content-end">
            
        
            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary my-4">Register</button>
        </div>
        </form>
</div>
</div>
@endsection