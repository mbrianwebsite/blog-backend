{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')

<article>
    <h1>{{ $title }}</h1>
    <br>
    <h3>By <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a> at <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
    <br>
    <h2>{{ $post->title }}</h2>
    {{-- <h5>By: {{$post->author }}</h5> --}}
    {!! $post->body !!}
</article>

<a href="/blog">back to blog</a>

@endsection