@extends('layouts.main')
@section('container')
<h1>About</h1>
<h2>{{ $name }}</h2>
<img src="{{ $logo }}" alt="">
<h3>{{ $site }}</h3>  
@endsection
