@extends('layouts.homepage')

@section('title', 'Заметки')

@section('content')
<h1 class="text-center">Новый пост</h1>
<form action="/blog/post/add" method="POST">
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" id="title" placeholder="">
    </div>
    <div class="form-group">
        <label for="message">Пост</label>
        <textarea class="form-control" id="message" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="tags">Теги</label>
        <input type="text" class="form-control" id="tags" placeholder="">
    </div>
    <button type="submit" class="btn btn-default">Добавить</button>
</form>
@endsection