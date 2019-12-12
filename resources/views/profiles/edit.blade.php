@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">title</label>


                    <input id="title" type="text" class="form-control" name="title"
                           value="{{ old('title') ?? $user->profile->title }}" required autofocus>

                    @if ($errors->has('title'))
                        <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                      </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">description</label>


                    <input id="description" type="text" class="form-control" name="description"
                           value="{{ old('description') ?? $user->profile->description }}" required autofocus>

                    @if ($errors->has('description'))
                        <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url" class="col-md-4 control-label">url</label>


                    <input id="url" type="text" class="form-control" name="url"
                           value="{{ old('url') ?? $user->profile->url }}" required autofocus>

                    @if ($errors->has('url'))
                        <span class="help-block">
                          <strong>{{ $errors->first('url') }}</strong>
                      </span>
                    @endif

                </div>

            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 control-label">Profile image</label>

            <input type="file" class="" id="image" name = "image">
            @if ($errors->has('image'))
                <strong>{{ $errors->first('image') }}</strong>
            @endif
        </div>

        <div class="row">
            <button class="btn btn-primary"  style="margin-top:30px">Save Profile</button>
        </div>
    </form>
</div>
@endsection
