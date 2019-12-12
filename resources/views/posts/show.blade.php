@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="/storage/{{ $post->image }}" style="width: 500px">
            </div>
            <div class="col-md-4">

                <h3>{{ $post->user->username }}</h3>
                <button class="btn btn-primary">follow</button>
                <p>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
@endsection