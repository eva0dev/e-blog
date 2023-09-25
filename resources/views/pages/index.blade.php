

@extends('layouts.app')

@section('content')
<div class= "jumbotron text-centre">
<h1>{{$title}}</h1>
  <p> This is the first laravel application from Eva</p>
  <p> <a class="btn btn-primary btn-lg" href="/login" role= "button"> Log in </a>
    <a class="btn btn-primary btn-lg" href="/register" role= "button"> Register </a></p>
</div>
@endsection
    