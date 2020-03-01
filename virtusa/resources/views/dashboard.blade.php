@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding-left:300px;">Dashboard</div>

                <div class="panel-body">
                <br>
                <div  style="padding-left:300px;">
                   <a href="/posts/create" class="btn btn-primary" >Create Post</a>
                   </div>
                   <br>
                   <div  style="padding-left:300px;">
                   <a href="/posts/" class="btn btn-primary" >View Post</a>
                   </div>
                   <h4  style="padding-left:280px;">Your Blog Posts</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
