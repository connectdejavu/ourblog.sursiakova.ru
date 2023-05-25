@extends("layouts.base")
@section("title", "Публикация")
@section("header")
@include("layouts.header")
@endsection
@section("main")

<div class="blog-container">
    <div class="block-title">
     <p>Публикация № {{$post->id}}</p>
    </div>

    @include("layouts.postpattern")


   
    <p class="back-to-main-btn"><a href='{{ route("blog") }}'>В блог</a></p>
</div>



@endsection


