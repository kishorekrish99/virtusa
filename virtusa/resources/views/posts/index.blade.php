@extends('layouts.app')
@section('content')
    <div style="padding-left:550px;">
            <h1>Posts</h1>
    </div>
    <br>
    @if(count($posts)>0)
        @foreach($posts as $post)
        <div style="padding-left:250px;">
            <div class="card" style="width: 50rem;">
                <div class="card-body" style="padding-left:200px;">
                <h1 class="card-title" ><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                    <h3 class="card-text">{{$post->body}}</h3>
                <p> written on {{$post->created_at}}</p>
                </div>
            </div>
            </div>
        @endforeach
        <br>
        <br>
        {{$posts->links()}}
    @else
        <h1>NO POSTS FOUND!!!</h1>
    @endif


@endsection