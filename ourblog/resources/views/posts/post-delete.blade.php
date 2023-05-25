@extends("layouts.base")
@section("title", "Удаление записи")
@section("header")
@include("layouts.header")
@endsection
@section("main")

<div class="blog-container">
    <div class="block-title">
     <p>Публикация № {{$post->id}}</p>
    </div>

    @include("layouts.postpattern")


    <form action='{{ route("post.destroy", ["post"=>$post->id]) }}' method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить" class="delete-user-posts-btn">
    </form>
    <p class="back-to-main-btn"><a href='{{ route("blog") }}'>В блог</a></p>
</div>



@endsection
