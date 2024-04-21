@extends('layouts.app')

@section('content')
<h1 class="text-center">Edit Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-body">
            <div class="card card-header">Refactor infomation</div>
            <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="">Name:</label>
                    <input type="text" class="form_control" name="name" value="{{ $todo->name }}">
                </div>
                <div class="mb-3">
                    <label for="">Description:</label>
                    <textarea name="description"  id="" cols="25" rows="5" >{{ $todo ->description }}</textarea>
                </div>
    
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Create Todo</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
