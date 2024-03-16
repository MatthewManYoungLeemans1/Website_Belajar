@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}">Read More...</a>
        </article>
    @endforeach
@endsection
