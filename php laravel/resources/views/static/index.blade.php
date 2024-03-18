@extends('layout/main')

@section('page-title')
    Main Page
@endsection

@section('content')
<div class="presentation"></div>
    <div class="articles">
        @foreach( $articles as $el)
         <div class="post">
             <img src="/storage/img/articles/{{$el->image}}" />
             <h2>{{$el->title}}</h2>
             <p>{{$el->anons}}</p>
             <p><b>Author: {{$el->user->name}}</b></p>
             <a href="/article/{{$el->id}}"> Read</a>
         </div>
@endforeach
    </div>

@endsection
