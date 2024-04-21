@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Todos Page</h1>
<ul class="list-group">
 @foreach ($todos as $todo)
 <li class="list-group-item">
     {{ $todo->name }}

     <a href="/todo/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
       
 </li>
 
 @endforeach
 
</ul>
@endsection