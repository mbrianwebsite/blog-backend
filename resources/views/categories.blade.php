@extends('layouts.main')
@section('container')
<h1>{{ $title }}</h1>
<br>
{{-- @dd($categories) --}}
@foreach ($categories as $p)
    <a href="/blog?category={{ $p->slug }}" ><h2>{{ $p->name }}</h2></a>
@endforeach


@endsection