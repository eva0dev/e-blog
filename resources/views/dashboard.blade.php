@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!

                    <div class="card-body">
                        <a href= "/posts/create" class ="btn btn-primary"> Create post</a>
                    </div>

                    

                        @if(count($posts)>0)
                              <h3>Your Blog Post<h3>
                              <table class = "table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}
                                <small> written on{{$post->created_at}} by {{$post->user->name}}</small></td>
                                <td><a href="/posts/{{$post->id}}/edit" class= "btn btn-primary">EDIT</a></td>
                                <td> {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}</td>
                           
                            </tr>
                            @endforeach
                            @else
                            <h3>You have no post yet!</h3>
                        @endif


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
