@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts)>1)
    @foreach ($posts as $post)
        <div class="well">
            <div class="row">
                <col class="md-4 col-sm-4">
                <img style="with:100%" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
                <col class="md-4 col-sm-8">
                <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
      
        </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>No posts found </p>
@endif
@endsection