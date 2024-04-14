@extends('layout')

@section('title', 'Add Image')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Add Image</h1>
                <form action="/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <input name="image" type="file">
                    </div>
                    <button type="submit" class="btn btn-success">Add Image</button>
                </form>
            </div>
        </div>
    </div>
@endsection
