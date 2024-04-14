@extends('layout')

@section('title', 'Show Image')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="/{{ $nameImage }}" alt="" class="img-thumbnail my-gallery">
            </div>
        </div>
    </div>
@endsection
