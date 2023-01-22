{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')


<h1>Post Category : {{ $category }}</h1>
@foreach ($blog as $p)
    <a href="/blog/{{ $p->slug }}" ><h2>{{ $p->title }}</h2></a>
    {{-- <h5>By: {{$p->author }}</h5> --}}
    <p>{!! $p->excrept !!}</p>
@endforeach

<a href="/blog">back to blog</a>

@endsection