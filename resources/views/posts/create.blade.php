@extends('layouts/app')

@section('content')
    <h1>Create post</h1>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Tilte')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
    {!! Form::close() !!}
<<<<<<< HEAD
=======
>>>>>>> d873ead47995f850eb9d92dcf27d8fefbbfe1dae
=======
>>>>>>> work-branch
>>>>>>> master
    
@endsection