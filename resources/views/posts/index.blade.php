@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <img src="/storage/{{ $post->image }}" style="width: 500px">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-sm-4" style="margin-bottom: 30px;">

                    <a href="/profile/{{ $post->user->id }}"><h3>{{ $post->user->username }}</h3></a>
                    <p>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection