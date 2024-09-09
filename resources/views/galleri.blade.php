<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>BoondaChildCare</title>

    <!-- Link to Favicon -->
    <link rel="icon" href="assets/imgs/logotabb.png" type="image/x-icon">

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
                        <a class="- btn btn-primary rounded ml-4" href="/">Gabung Kami</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navigation -->
    <section id="galeri" class="section">
        <div class="container text-center">
            <h2 class="title mt-4 pt-4 text-center">Galeri Foto</h2>
            <p class="subtitle text-center">Lihat koleksi foto dari kegiatan kami</p>
        </div>
    <div class="container text-center">
        <!-- Button Group -->
        <div class="mb-4 d-flex justify-content-between flex-wrap">
            <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1">2020</button>
            <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1">2021</button>
            <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1">2022</button>
            <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1">2023</button>
            <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1">2024</button>

            <!-- Dropdown Button -->
            <div class="dropdown flex-fill mx-1">
                <button class="btn btn-primary btn-sm rounded-pill dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Pilih Tahun

                </button>
                <div class="dropdown-menu primary w-100 rounded-lg " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">2020</a>
                    <a class="dropdown-item" href="#">2021</a>
                    <a class="dropdown-item" href="#">2022</a>
                    <a class="dropdown-item" href="#">2023</a>
                    <a class="dropdown-item" href="#">2024</a>
                </div>
            </div>
            
            <!-- Include jQuery and Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
        <!-- Galeri -->
       
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
                    <img src="assets/imgs/avatar-1.jpg" alt="Foto 4">
                </div>
                <div class="gallery-item">
                    <img src="assets/imgs/avatar-2.jpg" alt="Foto 5">
                </div>
                <div class="gallery-item">
                    <img src="assets/imgs/avatar-3.jpg" alt="Foto 6">
                </div>
                <!-- Button to add images -->
            <a class="btn btn-primary add-image-btn rounded-pill" href="/login">Tambah Gambar</a>
        </div>

        </section>
    </div>
  
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
</body>
</html>
