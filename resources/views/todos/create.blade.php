@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create new Todo
            </div>
            <div class="card-body">
                <form action="/store-todos" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Content</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
//
                    <div class="form-group mb-3">
                        <input type="text" class="form_control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" id="" cols="15" rows="5"></textarea>
                    </div>
        
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
