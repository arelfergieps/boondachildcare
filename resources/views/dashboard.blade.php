@extends('master')

@section('isi')
    <section class="header" id="home"
        style="background-image: url('assets/imgs/pattren2.png'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; z-index: 1;">
        <div class="container">
            <!-- Konten di sini -->


            <div class="infos">
                <h1 class="subtitle"></h1>
                <h6 class="title custom-title mb-2 ">Temukan Keceriaan Ciptakan Kenangan</h6>
                <p class="small custom-desc"> Aplikasi yang memudahkan orang tua untuk mencari
                    dan mendaftar berbagai event edukatif, hiburan,
                    dan aktivitas keluarga yang ramah anak
                </p>
            </div>
            <div class="img-holder pb-5">
                <img src="assets/imgs/home1.png" alt="Man Image">
            </div>
        </div>
        </div>
    </section>
    <!-- End of Page Header -->

    <!-- About section -->
    <section id="about" class="section">
        <div class="container text-center" style="position: relative; z-index: 3;">
            <section>
                <div
                    style="display: flex; justify-content: center; align-items: center; min-height: 50vh; flex-direction: column;">
                    <div class="pl-md-3 col-md-9 mt-2">
                        <h6 class="title custom-title mb-3" style="font-size: 48px;">Profil Boonda Childcare</h6>
                        <div class="video-card"
                            style="position: relative; max-width: 700px; margin-top: 20px; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); ; bor transition: transform 0.3s ease, box-shadow 0.3s ease; margin: 0 auto;">
                            <a href="https://youtu.be/3c3MXmkNgxg?si=kprdMz0WjVfVvrt-" target="_blank"
                                style="display: block;">
                                <img src="https://img.youtube.com/vi/3c3MXmkNgxg/maxresdefault.jpg"
                                    alt="Boonda Childcare Video"
                                    style="width: 100%; height: auto; display: block; margin: 0 auto; border: 20px solid rgba(68, 188, 197, 1) ">
                                <div class="play-button"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.6); border-radius: 50%; padding: 15px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white"
                                        class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11.596 8.697l-6-4.5A.5.5 0 0 0 5 4.5v7a.5.5 0 0 0 .796.4l6-4.5a.5.5 0 0 0 0-.8z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <p class="subtitle"></p>
                        <p class="title text-center mt-4">Temukan acara dan kegiatan seru untuk anak-anak di
                            sekitarmu! Aplikasi kami memudahkan orang tua
                            untuk mencari dan mendaftar berbagai event edukatif, hiburan, dan aktivitas keluarga yang
                            ramah anak. Mulai dari workshop seni, pertunjukan teater, hingga kelas keterampilan, semua ada
                            di satu
                            tempat. Jadikan waktu bermain anak lebih bermanfaat dan penuh petualangan
                        </p>
                    </div>
                </div>
        </div>
    </section>

    <!-- Boonda.id Section -->
    <section id="Boonda" class="section">
        <div class="container">
            <div class="card card-boonda  p-4 "style="border-radius: 20px; ">
                <div class="row align-items-start" style="min-height: 100vh; ">
                    <!-- Bagian gambar di sebelah kiri -->
                    <div class="col-md-6 text-center d-flex flex-column justify-content-between">
                        <img src="https://img.youtube.com/vi/3c3MXmkNgxg/maxresdefault.jpg" alt="Boonda Childcare"
                            style="max-width: 100%; height: auto; border-radius: 20px; ">
                    </div>

                    <!-- Bagian teks di sebelah kanan -->
                    <div class="col-md-6">
                        <h5 class="title mb-5 mt-3">Tentang Aplikasi Boonda</h5>

                        <p> #1 Aplikasi Super Parenting. Solusi Pengasuhan Anak
                            yang TerintegrasiBoonda adalah platform yang
                            memudahkan aktivitas pengasuhan anak untuk
                            orang tua yang dapat diakses dalam satu genggaman
                            dimana saja dan kapan saja</p>
                        <p> Download Aplikasi Boonda:</p>

                        <!-- Tombol di bawah teks -->
                        <div class="mt-1">
                            <a href="https://apps.apple.com/id/app/boonda/id6446410047"
                                class="btn btn-boonda rounded custom-btn">iOS</a>
                            <a href="https://play.google.com/store/apps/details?id=com.gti.boonda"
                                class="btn btn-boonda rounded custom-btn">ANDROID</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Katalog Section -->
    <section id="katalog" class="section mt-5">
        <div class="container text-center">

            <h6 class="custom-titlegal ">Katalog</h6>

            <!-- Buttons and Dropdown Section -->
            <div class="mb-4 d-flex justify-content-between flex-wrap">

                <!-- Dropdown Kota -->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownTempat" data-toggle="dropdown" aria-expanded="false">
                        Kota
                    </button>
                    <ul class="dropdown-menu w-100 " aria-labelledby="dropdownTempat">
                        <li><a class="dropdown-item" href="#">Malang</a></li>
                        <li><a class="dropdown-item" href="#">Surabaya</a></li>
                        <li><a class="dropdown-item" href="#">Mojokerto</a></li>
                    </ul>
                </div>
                <!-- Dropdown kolaborator -->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownTempat" data-toggle="dropdown" aria-expanded="false">
                        Kolaborator
                    </button>
                    <ul class="dropdown-menu w-100 " aria-labelledby="dropdownTempat">
                        <li><a class="dropdown-item" href="#">Sertifikat</a></li>
                        <li><a class="dropdown-item" href="#">Non Sertifikat</a></li>
                    </ul>
                </div>
                <!-- Dropdown fasilitas -->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownTempat" data-toggle="dropdown" aria-expanded="false">
                        fasilitas
                    </button>
                    <ul class="dropdown-menu w-100 " aria-labelledby="dropdownTempat">
                        <li><a class="dropdown-item" href="#">Sertifikat</a></li>
                        <li><a class="dropdown-item" href="#">Non Sertifikat</a></li>
                    </ul>
                </div>
                <!-- Dropdown Status -->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownTempat" data-toggle="dropdown" aria-expanded="false">
                        Status
                    </button>
                    <ul class="dropdown-menu w-100 " aria-labelledby="dropdownTempat">
                        <li><a class="dropdown-item" href="#">Online</a></li>
                        <li><a class="dropdown-item" href="#">Offline</a></li>
                    </ul>
                </div>

                <!-- Dropdown rating-->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownUsia" data-toggle="dropdown" aria-expanded="false">
                        Rating
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownUsia">
                        <li><a class="dropdown-item" href="#">bintang 1</a></li>
                        <li><a class="dropdown-item" href="#">bintang 2</a></li>
                        <li><a class="dropdown-item" href="#">bintang 3</a></li>
                        <li><a class="dropdown-item" href="#">bintang 4</a></li>
                        <li><a class="dropdown-item" href="#">bintang 5</a></li>
                    </ul>
                </div>
            </div>

            <div class="row text-left">
                <!-- Card 1 -->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-1.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-2.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <!-- Card 3 -->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-3.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <!-- Card 4-->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-2.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <!-- Card 5 -->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-1.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <!-- Card 6 -->
                <div class="col-md-3 p-3">
                    <div class="card border mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-3.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>



                <!-- Card 7 -->
                <div class="col-md-3 p-3">
                    <a href="{{ url('detailcard') }}">
                        <div class="card border mb-4 " style="border-radius: 20px; ">
                            <a class="card-body">
                            </a>
                            <img src="assets/imgs/blog-2.jpg" alt="Design for Everyone"
                                class="card-img-top w-100"style="border-radius: 20px;">
                            <div class=" mb-2 p-2">
                                <div class=" status small text-muted">sedang berlangsung</div>
                                <div class="title">Jadi Pendongeng? Berani Dong!</div>
                                <div class="info">
                                    <i class="bi-geo-alt"></i> Mojangangu Malang
                                    <br>
                                    <i class="bi-calendar"></i> 12 Agustus 2024
                                </div>

                                <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                            </div>
                        </div>
                </div>

                <!-- Card 8 -->
                <div class="col-md-3 p-3">
                    <div class="card  mb-4 " style="border-radius: 20px; ">
                        <a class="card-body" href="{{ url('detailcard') }}">
                        </a>
                        <img src="assets/imgs/blog-1.jpg" alt="Design for Everyone"
                            class="card-img-top w-100"style="border-radius: 20px;">
                        <div class=" mb-2 p-2">
                            <div class=" status small text-muted">sedang berlangsung</div>
                            <div class="title">Jadi Pendongeng? Berani Dong!</div>
                            <div class="info">
                                <i class="bi-geo-alt"></i> Mojangangu Malang
                                <br>
                                <i class="bi-calendar"></i> 12 Agustus 2024
                            </div>

                            <a class="flex-fill mx-1" href="{{ url('detailcard') }}">Rp.100000 </a>
                        </div>
                    </div>
                </div>


                <div class="col text-center mt-4 ">
                    <a href="/katalog"class="btn btn-primary rounded-pill">Selengkapnya ...</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testmonial Section -->
    <section id="ulasan" class="section">
        <div class="container text-center">
            <h6 class="custom-titlegal ">Testimonial</h6>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- Arrow buttons -->
                <button id="prevBtn" class="btn-arrow btn-prev" class="active">&lt; </button>
                <button id="nextBtn" class="btn-arrow btn-next" class="active">&gt;</button>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border"style=" border-radius: 20px;">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border"style="border-radius: 20px;">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border"style="border-radius: 20px;">
                            <div class="card-body">
                                <img src="assets/imgs/blog-3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">helmi</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border"style="border-radius: 20px;">
                            <div class="card-body">
                                <img src="assets/imgs/blog-2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">sincan</h1>
                                <h1 class="subtitle">Ceo</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card "style="border-radius: 20px;">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.querySelector('#carouselExampleIndicators');
            var prevBtn = document.querySelector('#prevBtn');
            var nextBtn = document.querySelector('#nextBtn');

            // Setup event listeners untuk tombol panah
            prevBtn.addEventListener('click', function() {
                // Geser carousel ke slide sebelumnya
                $(carousel).carousel('prev');
            });

            nextBtn.addEventListener('click', function() {
                // Geser carousel ke slide berikutnya
                $(carousel).carousel('next');
            });
        });
    </script>

    <!-- End of testmonial section -->


    <!-- Gallery section. -->

    <section id="galeri" class="section"
        style="background: rgba(253, 217, 69, 1); padding: 10px 20px;
     background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; z-index: 1; height: auto;">
        <div class="container text-center">
            <section>
                <div
                    style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;">
                    <div class="pl-md-6 col-md-9">
                        <h6 class="custom-titlegal ">Gallery</h6>


                        <!-- Galeri Foto -->
                        <div class="gallery">
                            <div class="gallery-item">
                                <img src="assets/imgs/avatar-3.jpg" alt="Foto 1">
                            </div>
                            <div class="gallery-item">
                                <img src="assets/imgs/avatar-1.jpg" alt="Foto 2">
                            </div>
                            <div class="gallery-item">
                                <img src="assets/imgs/avatar-2.jpg" alt="Foto 3">
                            </div>
                            <!-- Tambahkan lebih banyak galeri-item di sini -->
                        </div>
                        <!-- Tombol Selengkapnya -->
                        <div class="text-center mt-4">
                            <a href="/galleri" class="btn btn-primary rounded-pill">Selengkapnya ...</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    </div>
    </section>

    <!-- Section FAQ -->
    <section id="faq"class="section" class="faq-sec" class="section"
        style="margin-top: 40px; margin-bottom: 40px;">
        <div class="container mt-5">
            <div class="row align-items-end">
                <!-- Kolom untuk judul -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="title">
                        <h1 class="custom-titlefax mb-3">
                            Daftar Pertanyaan Seputar, Boonda Childcare
                        </h1>
                        <p class="desc custom-fax mb-5">
                            Boonda Childcare Fest 2023 merupakan festival yang menyajikan tentang aktivitas pengasuhan
                            anak yang dikolaborasikan menjadi satu yang berguna bagi seluruh ekosistem parenting.
                        </p>
                    </div>
                </div>
                <!-- Kolom untuk pertanyaan dengan dropdown (accordion) -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="faq-list bg">

                        <div class="accordion" id="faqAccordion">
                            <!-- Pertanyaan 1 -->
                            <div class="card mb-1"style="border-radius: 20px; border: 2px solid rgba(68, 188, 197, 1);">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-fax collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Bagaimana cara mencari event yang sesuai dengan
                                            usia anak saya??
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#faqAccordion">
                                    <div class="card-body text-left p-3">
                                        Boonda Childcare Fest adalah acara tahunan yang mempertemukan orang tua, anak,
                                        dan mitra pengasuhan dalam ekosistem pengasuhan yang interaktif dan bermanfaat.
                                    </div>
                                </div>
                            </div>
                            <!-- Pertanyaan 2 -->
                            <div class="card mb-1"style="border-radius: 20px; border: 2px solid rgba(68, 188, 197, 1);">
                                <div class="card-header " id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-fax collapsed " type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Siapa yang dapat menghadiri acara ini?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#faqAccordion">
                                    <div class="card-body text-left p-3">
                                        Acara ini terbuka untuk semua orang tua yang ingin mengeksplorasi cara terbaik
                                        dalam mengasuh dan mendidik anak mereka.
                                    </div>
                                </div>
                            </div>
                            <!-- Pertanyaan 3 -->
                            <div class="card mb-1"style="border-radius: 20px; border: 2px solid rgba(68, 188, 197, 1);">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-fax collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Kapan acara ini berlangsung?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#faqAccordion">
                                    <div class="card-body text-left p-3">
                                        Acara ini akan diadakan pada bulan Desember 2023 dengan berbagai sesi menarik.
                                    </div>
                                </div>
                            </div>
                            <!-- Pertanyaan 4 -->
                            <div class="card mb-1"style="border-radius: 20px; border: 2px solid rgba(68, 188, 197, 1); ">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-fax collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Apakah ada biaya pendaftaran?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#faqAccordion">
                                    <div class="card-body text-left p-3">
                                        Ya, terdapat biaya pendaftaran yang mencakup semua sesi dan akses ke semua
                                        fasilitas acara.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
