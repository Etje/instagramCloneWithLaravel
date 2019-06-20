@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3">
        <img src="/svg/freeRandomLogo.svg" class="rounded-circle w-50 d-block m-5">
    </div>
    <div class="col-9 pt-5 ">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add new post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>24k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="https://etienruhl.nl">{{ $user->profile->url }}</a></div>
    </div>
</div>
<div class="row pt-5">
    <div class="col-4">
        <img src="https://scontent-ams4-1.cdninstagram.com/vp/967ae60b4e32ce9935b90ae0da0d69be/5D86FBBE/t51.2885-15/sh0.08/e35/s640x640/37181091_286466225443110_1522114161771806720_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" alt="" class="w-100 d-block mx-auto">
    </div>
    <div class="col-4">
        <img src="https://scontent-ams4-1.cdninstagram.com/vp/f0928735457b4dd88ef649ccc7b21743/5DBFC7DE/t51.2885-15/sh0.08/e35/c99.0.882.882a/s640x640/43028259_512289225937513_7531442458971474899_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" alt="" class="w-100 d-block mx-auto">
    </div>
    <div class="col-4">
        <img src="https://scontent-ams4-1.cdninstagram.com/vp/de08f3b51f2eba9b71d8aac69bbb4deb/5D8B44D5/t51.2885-15/sh0.08/e35/s640x640/13735834_1721657601428916_1169530594_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" alt="" class="w-100 d-block mx-auto">
    </div>
</div>
</div>
@endsection
