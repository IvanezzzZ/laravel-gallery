@extends('layout')

@section('title', 'Gallery')

@section('content')
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
    @foreach($images as $image)
            <div class="col-md-3 gallery-item">
                <img src="{{$image->name}}" class="img-thumbnail">
                <a href="/show/{{$image->id}}" class="btn btn-primary my-button">Show</a>
                <a href="/edit/{{$image->id}}" class="btn btn-warning my-button">Edit</a>
                <a href="/delete/{{$image->id}}" class="btn btn-danger my-button">Delete</a>
            </div>
    @endforeach
        </div>
    </div>
@endsection
