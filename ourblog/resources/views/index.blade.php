@extends("layouts.base")
@section("title","BLOG")
@section("header")
@include("layouts.header")
@endsection
@section("main")

<div class="blog-container">
    <div class="block-title">
        Публикации пользователей
    </div>

@if (count($posts)>0)
    @foreach ($posts as $post)

    @include("layouts.postpattern")


    @endforeach
@endif
</div>


@endsection