@extends('layout.main')

@section('page-title')
    Edit an article
@endsection

@section('content')
    <h1>Edit an article</h1>
    <a href="/" class="back-button">Main</a>
    <form action="/article/{{ $article->id }}/edit" method="POST" class="article-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Name</label>
        <input type="text" name="title" id="title" placeholder="Specify the name" value="{{ $article->title }}">

        <label for="anons">Anons </label>
        <textarea name="anons" id="anons" placeholder="Specify the anons">{{ $article->anons }}</textarea>

        <label for="main_image">Photo</label>
        <input type="file" name="main_image" id="main_image">

        <label for="text">Main text</label>
        <textarea name="text" id="text" placeholder="Specify the text" id="editor">{{ $article->text }}</textarea>

        <input type="submit" value="Update" class="add-button">
    </form>
@endsection


