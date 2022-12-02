@extends('user.layouts.main')


@section('container')
<br><br><br>

<center>
  @if(session()->has('Sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('Sukses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  </center>
  @endif

 <center>
  @if(session()->has('LoginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('LoginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
 </center>


<main class="form-signin container-anm m-auto w-100 m-auto">
    <form action="/login" method="post">
      @csrf
      <img class="mb-4 logo-login"  src="image/ekskul.png" alt="logo" width="60" height="60">
      <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Please Login</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus placeholder="name@example.com" required id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }} 
         </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }} 
         </div>
        @enderror
      </div>
      <br><br><br> <br>
      <button class="w-100 btn btn-lg" type="submit">Login</button>
    </form><br>
    <small class="d-block text-center">Belum Registrasi? <a href="/register">Register!</a></small>
  </main>
  <br><br><br>
  
    
@endsection