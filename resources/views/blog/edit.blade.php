@extends('blog.layout')

@section('form')
    <h2>修改博客</h2>

    <form action="/blogs/{{ $blog->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="field  first">
            <label>標題</label>
            <input name="title" type="text" value="{{ $blog->title }}">
        </div>
        <div class="field ">
            <label>簡介</label>
            <input name="excerpt" type="text" value="{{ $blog->excerpt }}">
        </div>
        <div class="field">
            <label>內容</label>
            <textarea name="body">{{ $blog->body }}</textarea>
        </div>
        <ul class="actions">
            <li><input value="提交表單" class="button alt" type="submit"></li>
        </ul>
    </form>
@endsection
