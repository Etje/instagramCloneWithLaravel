@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <a href="{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 d-block">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-4 m-auto text-center">
            <div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" class="pr-2">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>{{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
