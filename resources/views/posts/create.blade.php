@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">

        @csrf 

        <div class="row">
            <div class="col-lg-8 offset-2">

                <div class="row">
                    <h3>Add post</h3>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post caption</label>

                    <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror"
                    name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('@image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
