@extends('layout.main')

@section('page-title')
    Add an article
@endsection

@section('content')
    <h1>Add an article</h1>
    <a href="/" class="back-button">Main</a>
    <form action="/article/add" method="POST" class="article-form" enctype="multipart/form-data">
        @csrf
        <label for="title">Name</label>
        <input type="text" name="title" id="title" placeholder="Specify the name">

        <label for="anons">Anons</label>
        <textarea name="anons" id="anons" placeholder="Specify the anons"></textarea>

        <label for="main_image">Photo</label>
        <input type="file" name="main_image" id="main_image">

        <label for="text">Text</label>
        <textarea name="text" id="text" placeholder="Specify the text" id="editor"></textarea>

        <input type="submit" value="Add" class="add-button">
    </form>



@endsection

