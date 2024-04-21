@extends('layouts.app')

@section('content')
<h3 class="text-center">Dang nhap</h3>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="row justify-content-center">
    <div class="col-md-4">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="" name="email" placeholder="username or email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" class="form-control" id="" name="password" placeholder="password">
          </div>
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
        
            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="text-center my-4">
            <p>Not a member? <a href="/users/register">Register</a></p>
          </div>
    </form>
    </div>
</div>
@endsection