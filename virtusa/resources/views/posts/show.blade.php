@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default btn-sm">Go Back</a>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->body}}</p>
    <a  href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
  </div>
</div>




<h1>{{$post->title}}</h1>
<small>{{$post->created_at}}</small>
<div>
<p>{{$post->body}}</p>
</div>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection