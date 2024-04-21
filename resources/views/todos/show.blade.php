@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">
    {{ $todo->name }}
   </h1>
   <div class="card card-default">
       <div class="card-header">
        Details
       </div>
       <div class="card-body">
        {{ $todo->description }}
       </div>
   </div>
   <div class="float-end my-3">
    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info text-white">Edit</a>
    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger">Delete</a>
   </div>


@endsection