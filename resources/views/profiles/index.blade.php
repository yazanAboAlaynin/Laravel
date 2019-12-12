@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3" style="padding:50px">
          <img src="/storage/{{ $user->profile->image }}"
class="img-circle" style="width: 180px;">
        </div>

        <div class="col-sm-9">
            <div>
                <div style="font-size: 30px;">{{ $user->username }}</div>

                @if (!$follows)
                    <a href="/follow/{{ $user->id }}" class="btn btn-primary">Follow</a>
                @else
                    <a href="/follow/{{ $user->id }}" class="btn btn-primary">Unfollow</a>
                @endif
                @can('update',$user->profile)
                <a href="/p/create" style="float:right">Add new post</a>
                <a href="/profile/{{ $user->id }}/edit">Edite profile</a>
                @endcan
            </div>

            <div><span> {{ $postsCount  }} <strong>Posts</strong>  </span></div>
            <div><span> {{ $followersCount  }} <strong>followers</strong>  </span></div>
            <div><span> {{ $followingCount  }} <strong>Posts</strong>  </span></div>

            <div style="margin-top: 20px;" >
                <div><h4><strong>{{ $user->profile->title }}</strong></h4></div>
                <div>{{ $user->profile->description }}</div>
                <div>{{ $user->profile->url }}</div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">

          @foreach($user->posts as $post)
            <div class="col-lg-4" style="margin-bottom: 20px">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" style="width: 300px;">
                </a>
            </div>
          @endforeach
    </div>
</div>
@endsection
