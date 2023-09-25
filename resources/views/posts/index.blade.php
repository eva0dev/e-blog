@extends('layouts.app')
@section('content')
<h1>posts </h1>
@if(count($posts)>0)

@foreach($posts as $post)
<li class="list-group-item">

    <div class = "well">
   
        <div class = "row">
            <div class = "col-md-4 col-sm-4">
               <img style = "width:20%"src = "/storage/cover_images/{{$post->cover_image}}">
            </div>
    
            <div class = "col-md-8 col-sm-8">
              <h3> <a href = "/posts/{{$post->id}}">{{$post->title}}</a></h3>
                by {{$post->user->name}} <small> written on{{$post->created_at}}</small>
            </div> 
        </div>

        
    </div>
    

</li>
@endforeach

{{$posts->links()}}
@else <p>No POst Found</p>
@endif
@endsection 