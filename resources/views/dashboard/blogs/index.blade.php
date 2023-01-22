@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

@if (session()->has('danger'))
<div class="alert alert-danger" role="alert">
  {{ session('danger') }}
</div>
@endif

@if (session()->has('warning'))
<div class="alert alert-warning" role="alert">
  {{ session('warning') }}
</div>
@endif

<a href="/dashboard/blogs/create" class="btn btn-success"><span data-feather="file-text"></span>Create New Post</a>

{{-- <h2>Section title</h2> --}}
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      {{-- @dd($blogs) --}}
      @foreach ($blogs as $blog)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></td>
        <td><a href="/blog/?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></td>
        <td><a href="/blog/?username={{ $blog->user->username }}">{{ $blog->user->name }}</td>
        <td>
          <a href="/dashboard/blogs/{{ $blog->slug }}" class="badge bg-primary"><span data-feather="eye"></span></a>
          <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="badge bg-warning"><span
              data-feather="edit"></span></a>
          <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                data-feather="trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection