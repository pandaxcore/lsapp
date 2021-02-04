@extends('layouts/app')

@section('content')
    <h1>Posts</h1>
    
    @if (count($post)>0)
        @foreach ($post as $posts)
            <div class="well">
                <h3><a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
                <small>Written on {{$posts->created_at}}</small>
            </div>
        @endforeach
            {{$post->links()}}
    @else
        <p>No posts found</p>
    @endif
    
@endsection