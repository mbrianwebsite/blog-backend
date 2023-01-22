@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>
<form method="POST" action="/dashboard/blogs/{{ $blog->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
            aria-describedby="title" name="title" value="{{ old('title',$blog->title) }}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        {{-- <div id="title" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" aria-describedby="slug" readonly name="slug"
            value="{{ old('slug',$blog->slug) }}">
        {{-- <div id=" body" class="form-text">We'll never share your email with anyone else.
        </div> --}}
        @error('slug')
        <p class="">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $blog->image }}">
        @if ($blog->image)
        <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/'.$blog->image) }}">

        @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        <input type="file" id="image" name="image" class="form-control  @error('image') is-invalid @enderror"
            onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category_id" class="form-select">
            @foreach ($categories as $category)
            @if (old('category_id',$blog->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif

            @endforeach
        </select>
        @error('category_id')
        <p class="">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <input id="body" type="hidden" name="body" value="{{ old('body',$blog->body) }}">
        @error('body')
        <p class="">{{ $message }}</p>
        @enderror
        <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-warning">Edit Post</button>
</form>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function(){
        fetch('/dashboard/blogs/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection