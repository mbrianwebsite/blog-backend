@extends('dashboard.layouts.main')
@section('container')
<article class="mb-4 border-bottom pb-4">
    <a href="/blog/{{ $blog->slug }}" class="text-decoration-none">
        <h2>{{ $blog->title }}</h2>
    </a><br>

    @if ($blog->image)
    <img src="{{ asset('storage/'.$blog->image) }}" alt="">
    @endif
    <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span>Back to My Post</a>
    <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span
                data-feather="trash"></span>Delete</button>
    </form><br><br>
    <h5 class="text-decoration-none">By: <a href="/blog?user={{ $blog->user->username }}">{{ $blog->user->name }}</a> in
        <a href="/blog?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
    </h5>
    {!! $blog->body !!}
</article>
@endsection