@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. Muhammad Rezki Ananda in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <h5>{{ $post->author }}</h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
