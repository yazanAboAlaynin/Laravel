@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($suggested->count()>0)
            <h4>suggested for you</h4>
            @endif
            @foreach($suggested as $suggest)
                <div class="col-sm-3" style=" margin-bottom: 30px; padding:5px;  border-top-style: solid;
                                            border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px;">
                   <a href="/profile/{{ $suggest->id }}"><img src="/storage/{{ $suggest->profile->image }}" class="img-circle" style="width: 150px;"></a>
                </div>
            @endforeach
        </div>
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