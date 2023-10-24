<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ASAKU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/icon.png" rel="icon">
    <link href="/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">ASAKU</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#">Layanan</a></li>
                    <li><a class="getstarted scrollto" href="/">Home</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Layanan yang Tersedia</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Layanan</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up"">

            <div class=" section-title">
                <h2>Formulir Layanan</h2>
                <p>Coba</p>
            </div>

            <div class="col-lg-12 mt-4 mt-lg-0">
            <!--<form method="POST" action="/permohonan-coba" enctype="multipart/form-data">-->
            <!--    @csrf-->
            <!--    <div class="mb-3">-->
            <!--        <label class="form-label">Nama</label>-->
            <!--        <input name="nama" type="text" class="form-control" placeholder="Nama" required />-->
            <!--    </div>-->
            <!--    <div class="mb-3">-->
            <!--        <label class="form-label">Pekerjaan</label>-->
            <!--        <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required />-->
            <!--    </div>-->
            <!--    <div class="mb-3">-->
            <!--        <label class="form-label">agama</label>-->
            <!--        <input name="agama" type="text" class="form-control" placeholder="Agama" required />-->
            <!--    </div>-->
            <!--    <div class="mb-3">-->
            <!--        <label class="form-label">Gambar</label>-->
            <!--        <input name="gambar" class="form-control" type="file" required />-->
            <!--    </div>-->
            <!--    <button type="submit" class="btn btn-success">Simpan</button>-->
            <!--</form>-->
                <form method="POST" action="/permohonan-coba" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    
                    <div class="form-group mt-3">
                        <select name="agama" class=" form-select" required>
                            <option value="-">Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                    
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label class="form-label" style="font-weight: bold;">Berkas Persyaratan</label>
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label">Surat pengantar dari RT setempat</label>
                        <input type="file" class="form-control" name="gambar" required>
                    </div>
                    <!--<div class="form-group mt-3">-->
                    <!--    <label class="form-label">Surat pengantar dari RT setempat</label>-->
                    <!--    <input type="file" class="form-control" name="gambar1" required>-->
                    <!--</div>-->
                    
                    <div class="my-3">
                         <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Ajukan Permohonan</button></div>

                </form>
            </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ASAKU</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
</body>

</html>