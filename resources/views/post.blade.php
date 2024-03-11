@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. Matthew in {{ $post->category->name }}</p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back To Blog</a>
@endsection
