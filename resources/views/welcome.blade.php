@extends('layouts')
@section('title')

Welcome Page
@section('content')
    <h1>Check {{$foo}} out</h1>
    
<ul>

  @foreach  ($tasks as $task)
    <li>  {{$task}} </li>
  @endforeach; 
</ul>
@endsection