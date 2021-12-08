@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p> By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <h5>{{ $post->author }}</h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/blog" class="d-block mt-5">Back to Posts</a>
@endsection
