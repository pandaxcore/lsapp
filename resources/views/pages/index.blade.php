@extends('layouts/app')

@section('content')
<div class="jumbotron text-center">
    <h2>{{$title}}</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores libero numquam reiciendis excepturi, <br>
        itaque quasi quos temporibus placeat distinctio quidem molestias nobis sed ipsum sunt incidunt odio est voluptate unde.
    </p>
    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
</div>
@endsection