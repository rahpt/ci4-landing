<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $pageTitle ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/landing/img/favicon.png" rel="icon">
    <link href="/assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/landing/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/landing/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Squadfree - v4.7.0
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top<?= $transparentHeader??'' ?>">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Squadfree</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <?= $this->include('\Landing\Views\partials\navbar'); ?>
    </div>
</header>
<!-- End Header -->
    <?= $this->renderSection('content') ?>
<!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('\Landing\Views\partials\footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
<i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="/assets/landing/vendor/purecounter/purecounter.js"></script>
<script src="/assets/landing/vendor/aos/aos.js"></script>
<script src="/assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/landing/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/landing/js/main.js"></script>

</body>

</html>