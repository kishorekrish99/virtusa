@extends('layouts.app')
@section('content')
    <h1>posts</h1>
    <br>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                <h3>{{$post->body}}</h3>
                <p> written on {{$post->created_at}}</p>
                <br>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h1>NO POSTS FOUND!!!</h1>
    @endif


@endsection