@extends('layouts.app')
@section('content')

<a href = "/posts" class = "btn btn-primary">Go Back</a>

<h1>{{$post->title}}</h1>
<img style = "width:50%"src = "/storage/cover_images/{{$post->cover_image}}">
<br><br>


    {!!$post->body!!}

<small> written on{{$post->created_at}} by {{$post->user->name}}</small>


@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)

         <a href = "/posts/{{$post->id}}/edit" class = "btn btn-primary">Edit </a>
         <div>
             {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'pull-right'])!!}
             {{Form::hidden('_method','DELETE')}}
             {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
             {!!Form::close()!!}
         </div>
    @endif
@endif

@endsection 