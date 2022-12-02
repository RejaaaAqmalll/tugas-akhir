@extends('user.layouts.main')


@section('container')
    <br><br><br>
    <main class="form-register container-anm  w-100 m-auto">
        <form action="/register" method="post">
            @csrf
            <img class="mb-4 logo-reg" src="image/ekskul.png" alt="logo" width="60" height="60">
            <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Registrasi Sekarang</h1>

            <div class="form-floating">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Nama kamu" autofocus required value="{{ old('nama') }}">
                <label for="nama">Nama</label>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br><br>
            <button class="w-100 btn btn-lg" type="submit">Register</button>
        </form>
        <br>
        <small class="d-block text-center">Sudah Registrasi? <a href="/login">Login!</a></small>
    </main>
    <br><br><br>
@endsection
