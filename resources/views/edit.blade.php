@extends('layout')

@section('title', 'Edit Image')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form action="/update/{{$image->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2>Edit Image</h2>
                    <img src="/{{$image->name}}" class="img-thumbnail my-gallery">
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-warning">Edit Image</button>
                </form>
            </div>
        </div>
    </div>
@endsection
