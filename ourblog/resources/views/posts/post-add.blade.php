@extends("layouts.base")
@section("title","Добавить пост")
@section("header")
@include("layouts.header")
@endsection
@section("main")

    <form action='{{ route("post.blog") }}' method="POST">
    @csrf
        <div class="block-title">
                Добавление записи
        </div>
       
        <div class="form-group">
            <label for="txtTopic" class="near-text1">Тема</label>
            <input type="text" name="topic" id="txtTopic" class="text-input">
        </div>

        <div class="form-group">
            <label for="txtDescription" class="near-text1">Описание</label>
            <textarea type="text" name="description" id="txtDescription" class="description-in-new-post"  cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="txtMedia" class="near-text1">Текст поста </label>
            <input type="text" name="media" id="txtMedia" class="text-input">
        </div>
        <input type="submit" value="Запостить" class="create-new-post-btn">
    </form>



@endsection
