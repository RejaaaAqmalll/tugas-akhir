@extends('user.layouts.main')

@section('container')
@if (session()->has('Berhasil'))
<center>
    <div class="alert alert-success fade show" role="alert">
        {{ session('Berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</center>
@endif
    <div id="carouselExampleIndicators" class="carousel slide carousel-dark carousel-fade" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="image/banner - Copy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <section class="botron">
                        <h1>Tentang Kami</h1>
                        <p>"Satu Suara Suara Grafika!"</p>
                        <a href="https://smkn4malang.sch.id/" class="toggle" target="blank">Kunjungi</a>
                    </section>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="image/dokum-scaled.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <section class="botron">
                        <h1>GRAFIKA</h1>
                        <p>"SMK BISA SMK HEBAT"</p>
                        <a href="https://smkn4malang.sch.id/" class="toggle" target="blank">Kunjungi</a>
                    </section>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="image/grafika bisa.webp" class="d-block w-100" alt="..." class="item1">
                <div class="carousel-caption d-none d-md-block">
                    <section class="botron">
                        <h1>GRAFIKA</h1>
                        <p>"Siap Kerja Santun Mandiri Kreatif"</p>
                        <a href="https://smkn4malang.sch.id/" class="toggle" target="blank">Kunjungi</a>
                    </section>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon:key" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-text">
        <center>
            <h3 class="judul1">Grafika.<span>Profile.</span></h3>
        </center><br>
        <p class="text1">Pada tanggal 26-05-1979 sesuai dengan
            Surat Keputusan Menteri Pendidikan Nasional Nomor 090/0/1979,
            maka menjadi dasar bagi berdirinya sebuah Sekolah Menengah Kejuruan
            Negeri 4 Malang yang berlokasi di Jalan Jl. Tanimbar 22, Kasin, Klojen,
            Kota Malang, Provinsi Jawa Timur Indonesia, dengan NPSN 20533816. Disekolah ini tersedia 7 jurusan untuk
            mempersiapkan
            dan mencetak generasi penerus bangsa yang berkualitas dan mampu bersaing di dunia industri.
    </div>
    <div class="container-ekskul">
        <img src="image/Paskibra/banner 2.jpeg" alt="paskib">
    </div>

    <div class="container-text2">
        <center>
            <h3 class="judul2">Grafika.<span>Ekskul.</span></h3>
        </center><br>
        <p class="text2">Grafika Ekskul adalah sebuah website pendaftaran ekstrakurikuler yang ada di SMKN 4 Malang.
            Disini tersedia berbagai fitur yang menarik yang tentunya memudahkan kalian melakukan pendaftaran
            ekstrakurikuler.
            Selain itu disini kalian bisa melihat dokumentasi foto serta video yang menarik.
        </p>
    </div>

    <div class="container-ekskul2">
        <img src="image/Pandu Grafika/dokum 5.jpeg" alt="airsoft">
    </div>
    <br><br><br><br>
@endsection
