@extends('layouts.app')
@section('content')
<section style="padding-left:500px;padding-top:100px;">
<div class="card" style="width: 18rem;">
<a href="/posts" class="btn btn-primary btn-sm">Go Back</a>
  <div class="card-body">
    <img src="{{asset('uploads/post'.$post->image)}}" alt="Image">
    <h1 class="card-title">{{$post->title}}</h1>
    <h3 class="card-text">{{$post->body}}</h3>
    <br>
    <div style="padding-left:70px;">
    <a  href="/posts/{{$post->id}}/edit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Edit</a>
    </div>
    <br>
    <div style="padding-left:70px;">
    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-center'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</div>
  </div>
</div>
</section>


<!-- 
<h1>{{$post->title}}</h1>
<small>{{$post->created_at}}</small>
<div>
<p>{{$post->body}}</p>
</div>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> -->
@endsection