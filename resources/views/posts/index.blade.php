@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-lg-6 offset-3">
                <a href="/profile/{{ $post->user->id}}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
        </div>
        <div class="row pt-4 pb-2">
            <div class="col-lg-6 offset-3">
                <div class="d-flex ">
                    <div class="pr-3">
                        <a href="/profile/{{ $post->user->id}}">
                            <img class="rounded-circle w-100" src="{{ $post->user->profile->profileImage() }}" style="max-width: 40px" alt="">
                        </a>
                    </div>
                    <div class="pr-3">
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id}}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </div>
                        <p>
                            {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
