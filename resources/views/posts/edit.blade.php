@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post ->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class= "form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', $post ->title , ['class' =>'form-conrol', 'placeholder' => 'Title'])}}
    </div> 

    <div class= "form-group">
    {{Form::label('body','Body')}}

    
    <textarea class="description" name = "body"> {{$post->body}}</textarea>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>


    
    </div>

    <div class= "form-group">
        {{Form::file('cover_image')}}
    </div> 
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}

    



    {!! Form::close() !!}


    


@endsection 