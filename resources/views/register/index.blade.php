@extends('layouts.main')
@section('container')
<h1>{{ $title }}</h1>

<style>
    .form-register {
    width: 100%;
    max-width: 500px;
    padding: 15px;
    margin: auto;
  }
  
  .form-register .checkbox {
    font-weight: 400;
  }
  
  .form-register .form-floating:focus-within {
    z-index: 2;
  }
  

  
</style>
    <main class="form-register">
      <form action="/register" method="POST">
        @csrf
        {{-- <img class="mb-4" src="/docs/{{< param docs_version >}}/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>
        
        <div class="form-floating">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required value="{{ old('password') }}">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

    
        {{-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> --}}
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–{{< year >}}</p> --}}
      </form>
      <small>Have an account? Please <a href="/login">Sign In</a></small>
    </main>
  

@endsection