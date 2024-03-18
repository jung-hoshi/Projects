@extends('layout.main')

@section('page-title')
    {{ $article->title }}
@endsection

@section('content')
    <h1>{{ $article->title }} / An article on Blog </h1>
    <a href="/" class="back-button">Main</a>
    <div class="articles one">
        <div class="post">
            <img src="/storage/img/articles/{{$article->image}}" />
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->anons }}</p><br>
            <p>{!! $article->text !!}</p>
            <p><b>Author: {{$article->user->name}}</b></p>
            <br>
            <hr>
            @auth
                @if(Auth::user()->id == $article->user_id)
                    <a href="/article/{{$article->id}}/edit"> Edit </a>
                    <form action="{{ route('article.destroy', ['id' => $article->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-button">Delete an article</button>
                    </form>
                @endif
            @endauth

        </div>
    </div>
@endsection
