<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mama Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/laundry.png" alt="" style="width: 32px; height: auto;">
        <span class="d-none d-lg-block">Mama Laundry</span>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-columns-gap"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a id="navDashboard" class="nav-link" href="<?= base_url('/dashboard'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a id="navUser" class="nav-link collapsed" href="<?= base_url('/user'); ?>">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a id="navPelanggan" class="nav-link collapsed" href="<?= base_url('/pelanggan'); ?>">
          <i class='bx bx-group'></i>
          <span>Pelanggan</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a id="navPersediaan" class="nav-link collapsed" href="<?= base_url('/pembelian_barang'); ?>">
          <i class="bi bi-cart"></i>
          <span>Persediaan</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a id="navJenisLaundry" class="nav-link collapsed" href="<?= base_url('/jenis_laundry'); ?>">
          <i class="bi bi-card-list"></i>
          <span>Jenis Laundry</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a id="navTransaksi" class="nav-link collapsed" href="<?= base_url('/transaksi'); ?>">
          <i class='bx bxs-t-shirt'></i>
          <span>Transaksi</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a id="navLaporan" class="nav-link collapsed" href="<?= base_url('/laporan'); ?>">
          <i class='bx bxs-report'></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <?= $this->renderSection('content'); ?>

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/quill/quill.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  <script>
    const path = window.location.pathname;

    // Dashboard
    if (path.startsWith('/dashboard')) {
      const navDashboard = document.getElementById('navDashboard');
      navDashboard.classList.add('active');
    }

    // User
    if (path.startsWith('/user')) {
      const navUser = document.getElementById('navUser');
      navUser.classList.add('active');
    }

    // Pelanggan
    if (path.startsWith('/pelanggan')) {
      const navTransaksi = document.getElementById('navPelanggan');
      navTransaksi.classList.add('active');
    }

    // Persediaan
    if (path.startsWith('/pembelian_barang')) {
      const navPersediaan = document.getElementById('navPersediaan');
      navPersediaan.classList.add('active');
    }

    // Jenis Laundry
    if (path.startsWith('/jenis_laundry')) {
      const navJenisLaundry = document.getElementById('navJenisLaundry');
      navJenisLaundry.classList.add('active');
    }

    // Transaksi
    if (path.startsWith('/transaksi')) {
      const navTransaksi = document.getElementById('navTransaksi');
      navTransaksi.classList.add('active');
    }

    // Laporan
    if (path.startsWith('/laporan')) {
      const navLaporan = document.getElementById('navLaporan');
      navLaporan.classList.add('active');
    }
  </script>

  <?= $this->renderSection('script'); ?>

</body>

</html>