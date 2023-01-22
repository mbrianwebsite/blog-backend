@extends('layouts.main')
@section('container')
<h1>{{ $title }} 

    @if(request('category'))
        {{ 'in Category '.request('category')}}
    @endif
    @if(request('user'))
        {{ 'By User '.request('user')}}
    @endif
    
</h1>
<br>
<form action="/blog">
    @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if(request('user'))
        <input type="hidden" name="user" value="{{ request('user') }}">
    @endif
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Keyword" name="search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
</form>
<br>

@if ($posts->count())
    <article class="mb-4 border pb-4">
        <a href="/blog/{{$posts[0]->slug }}" class="text-decoration-none"><h2>{{$posts[0]->title }}</h2></a>
        <h5 class="text-decoration-none">By: <a href="/blog?user={{$posts[0]->user->username }}">{{$posts[0]->user->name }}</a> in <a href="/blog?category={{$posts[0]->category->slug }}">{{$posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} </h5>
        <p>{!!$posts[0]->excrept !!}</p>
        <a class="text-decoration-none" href="/blog/{{$posts[0]->slug }}">Read more...</a>
    </article>
    @foreach ($posts->skip(1) as $p)
        <article class="mb-4 border-bottom pb-4">
            <a href="/blog/{{ $p->slug }}" class="text-decoration-none"><h2>{{ $p->title }}</h2></a>
            <h5 class="text-decoration-none">By: <a href="/blog?user={{ $p->user->username }}">{{ $p->user->name }}</a> in <a href="/blog?category={{ $p->category->slug }}">{{ $p->category->name }}</a> </h5>
            <p>{!! $p->excrept !!}</p>
            <a class="text-decoration-none" href="/blog/{{ $p->slug }}">Read more...</a>
        </article>
    @endforeach
@else
    <h4>Post Not Found</h4>
@endif

{{ $posts->links() }}


@endsection