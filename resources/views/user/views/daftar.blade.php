@extends('user.layouts.main')

@section('container')
    
    {{-- KONTEN --}}
<div class="container-dokum">
    <h3 class="judul">DOKUMENTASI</h3>
    <div class="gambar1">
        <img src="image/Rohis/IMG_6707.jpg" alt="foto1">
    </div>
    <div class="gambar2">
        <img src="image/Rohis/_MG_5093.jpg" alt="foto2">
    </div>
    <div class="gambar3">
        <img src="image/Rohis/IMG_9492.jpg" alt="foto3">
    </div>
    <div class="video">
        <video width="400" height="240" controls>
            <source src="image/Rohis/dokum .mp4" type="video/mp4">
        </video>
    </div>
</div>


{{-- DAFTAR PAGE --}}
<div class="container-daftar">
    <div class="container-inner">
        <h3 class="judul-ekskul">Rohani Islam</h3>
        <div class="image">
            <img src="image/Rohis/Logo Rohis.png" alt="logo-rohis">
        </div>
        <div class="text">
            <p>Diekstrakurikuler ini kalian akan diajarkan berorganisasi dan mengaji serta kemampuan berpendapat.
                Selain itu kalian juga akan berperan besar dalam acara keagamaan lohh.
                Segera daftar kan diri kalian dan jadilah anggota kami...</p>
        </div>
        <form action="/daftar" method="post">
            @csrf
        <div class="input">
            <input type="text" id="nama" class="@error('nama') is-invalid @enderror" name="nama" placeholder="Nama" required value="{{ old('nama') }}">
            {{-- <label for="nama">Nama kamu</label> --}}
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input2 mt-4">
            <input type="number" class="@error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="Kelas" required value="{{ old("kelas") }}">
            @error('kelas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="input3 mt-4">
            <input type="text" id="jurusan" class="@error('jurusan') is-invalid @enderror" name="jurusan" placeholder="Jurusan" required value="{{ old('jurusan') }}">
            @error('jurusan')
            <div class="invalid-feedback">
                {{ $message }}  
            </div>
        @enderror
        </div>
        <div class="input4 mt-2">
            <textarea id="alasan_masuk" name="alasan_masuk" cols="54" rows="7" placeholder="Tulis alasan masuk, sertakan nama ekstrakurikulernya!" required></textarea>
            @error('alasan_masuk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
    </div>
        <button class="daftar" type="submit">Daftar</button>
    </form>
</div>

<br><br><br><br><br> 

@endsection
