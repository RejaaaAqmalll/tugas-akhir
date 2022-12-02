@extends('user.layouts.main')

@section('container')

       {{-- <div class="banner"> --}}

        <div class="banner">
            <section class="jumbotron">
                <h1>Grafika</h1>
                <p>"Satu Suara Suara Grafika!"</p>
                <a href="https://smkn4malang.sch.id/" class="toggle" target="blank">Kunjungi</a>
              </section>
            <div class="background">
                <font class="judul">SMKN 4 MALANG</font>
                <br><br><br><br><br><br><br>
                <br>
                <p class="about">SMKN 4 Malang atau lebih dikenal dengan sebutan Grafika adalah
                    salah satu sekolah menengah kejuruan yang berdiri sejak tahun 1938. Sekolah
                    ini dulunya bernama STTP atau Sekolah Teknik Pertama Percetakan, ini adalah
                    salah satu misi dari Gereja Khatolik dibawah Keuskupan Malang. Setelah melalui
                    banyak pergantian nama SMKN 4 Malang menjadi pilihan hingga saat ini. Nama ini
                    dipakai mulai dari pimpinan Bpk. Soedijono sampai sekarang yaitu Bpk. Drs. Gunawan Dwiyono, S.ST., M.Pd.
                    <br><br>
                    Selain mampu mencetak lulusan yang siap kerja, disini juga menyediakan berbagai
                    macam ekstrakurikuler yang bisa kalian ikuti. Ekstrakurikuler adalah sebuah rangkaian
                    kegiatan diluar jam pelajaran formal, yang bertujuan melatih bakat minat siswa agar
                    mampu berprestasi dan mengharumkan nama sekolah. Selain itu kalian juga bisa memanfaatkan
                    ekstrakulikuler untuk berlatih bersosialisasi, membentuk karakter, serta mampu menjadi sarana
                    refreshing setelah menerima pelajaran sekolah.
                </p>
            </div>
        </div>
        <br><br><br><br>

        {{-- EKSTRAKURIKULER --}}
    <div id="judul-1">Ekstrakurikuler</div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Rohis/Logo Rohis.png" alt="logo Rohis" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Rohis</h2>
                        <p class="description">Merupakan Ekstrakurikuler 
                            yang menampung bakat minat siswa
                            dalam hal agama islam
                        </p>

                        <button class="button"><a href="/daftar" class="rohis">Daftar Sekarang</a></button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Airsoft Gun/logo airsoftgun.jpg" alt="logo Airsoft" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Airsoft Gun</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang mealtih kemampuan siswa/i
                            dalam hal menggunakan senapan.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Badminton/logo badminton.jpg" alt="logo Badminton" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Badminton</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang melatih siswa/i dalam
                            bermain badminton serta membentuk atlet badminton kelas SMA/K.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Basket/logo basket.jpeg" alt="logo basket" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Basket</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang melatih kemampuan siswa/i
                            dalam bermain bola basket.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Broadcasting/logo.jpeg" alt="logo broadcast" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Broadcasting</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang melatih siswa/i dalam
                            pembuatan seni foto dan video.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/futsal/logo futsal.jpeg" alt="logo futsal" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Futsal</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang mealtih bakat dan minat siswa
                            dalam bermain futsal.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/GMC/logo gmc.jpg" alt="logo GMC" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Grafika Mountain Climb</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang melatih siswa untuk melakukan
                            pendakian serta bertahan hidup di alam.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Gved/logo.jpeg" alt="logo GVED" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">GVED</h2>
                        <p class="description">Merupakan Ekstrakurikuler yang melatih siswa/i menggunakan bahasa
                            inggris dan melakukan debat berbahasa inggris.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="image/Karate/logo karate.jpg" alt="logo karate" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Karate</h2>
                        <p class="description">Merupakan Ekstrakurikuler
                            yang melatih siswa siswa/i untuk
                            mampu melindungi dengan seni karate.</p>

                        <button class="button">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>


    <br><br><br><br>
    {{-- DOKUMENTASI --}}
    <div class="container3">
        <h2>Dokumentasi</h2>
        <div class="polaroid">
            <div class="gambar">
                <img src="image/Airsoft Gun/dokum 1.jpg" alt="airsoft" class="img1" loading="lazy">
            </div>
            <div class="gambar">
                <img src="image/Seni Rupa/dokum.jpeg" alt="Seni Rupa" class="img2" loading="lazy">
            </div>
            <div class="gambar">
                <img src="image/Badminton/dokum 1.png" alt="Badminton" class="img3" loading="lazy">
            </div>
        </div>
        <div class="polaroid2">
            <div class="gambar">
                <img src="image/Rohis/IMG_9492.jpg" alt="Rohis" class="img4" loading="lazy">
            </div>
            <div class="gambar">
                <img src="image/PUSJA/dokum 5.jpg" alt="PUSJA" class="img5" loading="lazy">
            </div>
            <div class="gambar">
              <img src="image/Paskibra/banner 2.jpeg" alt="Paskib" class="img6" loading="lazy">
          </div>
          <div class="gambar">
            <img src="image/Broadcasting/DSC00069.jpg" alt="Broadcast" class="img7" loading="lazy">
        </div>
        </div>
        <div class="polaroid3">
          <div class="gambar">
              <img src="image/Basket/dokum 1.jpg" alt="Basket" class="img4" loading="lazy">
          </div>
          <div class="gambar">
              <img src="image/Karate/dokum 1.jpeg" alt="Karate" class="img5" loading="lazy">
          </div>
          <div class="gambar">
            <img src="image/Pandu Grafika/dokumentasi 4.jpeg" alt="Pandu" class="img6" loading="lazy">
        </div>
        <div class="gambar">
          <img src="image/Roots/dokum 2.jpg" alt="Roots" class="img7" loading="lazy">
      </div>
      </div>
    </div>
    </div>
    <div class="arrow d-flex align-items-center justify-content-center">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#E1813E" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
          </svg></a>
    </div>

    <br><br><br>
    
@endsection