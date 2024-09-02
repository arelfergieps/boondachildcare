<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>BoondaChildCare</title>

    <!-- Link to Favicon -->
    <link rel="icon" href="assets/imgs/logotabb.png"  type="image/x-icon">

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/imgs/logoboonda.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang ChildCare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#katalog">Katalog</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#ulasan">Ulasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="/dashboard">Gabung Kami</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->
<!-- Galeri -->
<section id="galeri" class="section">
    <div class="container text-center">
        <h2 class="title">Galeri Foto</h2>
        <p class="subtitle">Lihat koleksi foto dari kegiatan kami</p>

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
            <div class="gallery-item">
                <img src="assets/imgs/avatar-1.jpg" alt="Foto 3">
            </div>
            <div class="gallery-item">
                <img src="assets/imgs/avatar-2.jpg" alt="Foto 3">
            </div>
            <div class="gallery-item">
                <img src="assets/imgs/avatar-3.jpg" alt="Foto 3">
            </div>
        </div>
    </div>
   
</section>
<section>
<section id="galeri" class="section">
    <div class="container text-center">
        <section>
            <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;">
                <div class="pl-md-4 col-md-9">
                </section>

<!-- JavaScript -->
<script>
    let isLightboxOpen = false;

    function toggleLightbox(imgElement) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');

        if (isLightboxOpen) {
            lightbox.style.display = 'none';
            isLightboxOpen = false;
        } else {
            lightbox.style.display = 'flex';
            lightboxImage.src = imgElement.src;
            isLightboxOpen = true;
        }
    }

    function closeLightbox() {
        if (isLightboxOpen) {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            isLightboxOpen = false;
        }
    }
</script>
