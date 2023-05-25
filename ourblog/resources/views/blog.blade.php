@extends("layouts.base")
@section("title","BLOG")
@section("header")
@include("layouts.header")
@endsection
@section("main")
<div class="create-new-post-block">
    <p class="create-new-post-btn"><a href='{{ route("post.add") }}'>Добавить пост</a></p>
</div>
<div class="blog-container">
    <div class="block-title">
        Ваши публикации
    </div>

@if (count($posts)>0)
    @foreach ($posts as $post)
    
    @include("layouts.postpattern")

    <a href='{{ route("detail",["post"=>$post->id]) }}'><div class="settings-btn">Подробнее </div></a>
    <a href='{{ route("post.edit",["post"=>$post->id]) }}'><div class="settings-btn">Изменить </div></a>
    <a href='{{ route("post.delete",["post"=>$post->id]) }}'><div class="settings-btn">Удалить </div></a>

    @endforeach
@endif


</div>


@endsection
