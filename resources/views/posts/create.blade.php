@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class= "form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', '', ['class' =>'form-conrol', 'placeholder' => 'Title'])}}
    </div> 

    <div class= "form-group">
     {{Form::label('body','Body')}}
    </div>

    
    <textarea class="description" name="body"></textarea>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>

    <div class= "form-group">
        {{Form::file('cover_image')}}
    </div> 
    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}

    



    {!! Form::close() !!}


    


@endsection 