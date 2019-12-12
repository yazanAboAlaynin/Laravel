@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}

      <div class="row">
        <div class="col-md-8">

          <div class="row">
            <h1>add new post</h1>
          </div>

          <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
              <label for="caption" class="col-md-4 control-label">post caption</label>


                  <input id="caption" type="text" class="form-control" name="caption" value="{{ old('caption') }}" required autofocus>

                  @if ($errors->has('caption'))
                      <span class="help-block">
                          <strong>{{ $errors->first('caption') }}</strong>
                      </span>
                  @endif

          </div>
        </div>
      </div>
      <div class="row">
        <label for="image" class="col-md-4 control-label">post image</label>

        <input type="file" class="" id="image" name = "image">
        @if ($errors->has('image'))
                <strong>{{ $errors->first('image') }}</strong>
        @endif
      </div>

      <div class="row">
        <button class="btn btn-primary"  style="margin-top:30px">Add New Post</button>
      </div>
    </form>
</div>
@endsection
