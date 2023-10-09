@extends('blog.layout')

@section('form')
    <h2>新建博客</h2>

    <form action="/blogs" method="post">
        {{ csrf_field() }}
        <div class="field  first">
            <label>標題</label>
            <input name="title" type="text">
        </div>
        <div class="field ">
            <label>簡介</label>
            <input name="excerpt" type="text">
        </div>
        <div class="field">
            <label>內容</label>
            <textarea name="body"></textarea>
        </div>
        <ul class="actions">
            <li><input value="提交表單" class="button alt" type="submit"></li>
        </ul>
    </form>
@endsection
