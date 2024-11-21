<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?= base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="<?= base_url();?>assets/vendor/datatables/datatables.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url();?>" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block font-weight-bold shadow-sm">Trakindo Tech.</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
    <!-- Start  Navigation -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url();?>assets/image/users/<?= $this->fungsi->user_login()['image']?>?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->fungsi->user_login()['name']?></span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $this->fungsi->user_login()['name']?></h6>
              <span>
                <?php
                $i =  $this->fungsi->user_login()['position'];
                  if($i == 1) {
                    echo('Technician Technology');
                  }else if($i == 2) {
                    echo('Analyst Technology');
                  }else if($i == 3) {
                    echo('Foreman');
                  }else if($i == 4) {
                    echo('Supervisor');
                  }else{
                    echo('UG Tech');
                  }
                ?>
              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout');?>" onclick="return confirm('Are you sure?')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav>
    <!-- End  Navigation -->
  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if($menu1 != 'Dashboard')echo 'collapsed'; ?> " href="<?= base_url('dashboard');?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link <?php if($menu1 != 'Report')echo 'collapsed'; ?>" data-bs-target="#Report-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Report-nav" class="nav-content collapse <?php if($menu1 == 'Report')echo 'show'; ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('report/weekly');?>" class=" <?php if($menu2 == 'Weekly')echo 'active'; ?>">
              <i class="bi bi-circle"></i><span>Weekly</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('report');?>" class=" <?php if($menu2 == 'Daily')echo 'active'; ?>">
              <i class="bi bi-circle"></i><span>Daily</span>
            </a>
          </li>
        </ul>
      </li><!-- End Report Nav -->
      <li class="nav-item">
        <a class="nav-link <?php if($menu1 != 'Part')echo 'collapsed'; ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Part</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse <?php if($menu1 == 'Part')echo 'show'; ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('part');?>" class=" <?php if($menu2 == 'Stock')echo 'active'; ?>">
              <i class="bi bi-circle"></i><span>Stock</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('part/history');?>" class=" <?php if($menu2 == 'History')echo 'active'; ?>">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Part Nav -->
      <li class="nav-item">
        <a class="nav-link <?php if($menu1 != 'IP Location')echo 'collapsed'; ?> " href="<?= base_url('report/iplocation');?>">
          <i class="bi bi-wifi"></i>
          <span>IP Location</span>
        </a>
      </li>
      <?php if ($this->fungsi->user_login()['level'] == "1"):?>
        <li class="nav-item">
          <a class="nav-link <?php if($menu2 != 'Member')echo 'collapsed'; ?> " href="<?= base_url('user');?>">
            <i class="bi bi-people"></i>
            <span>Users</span>
          </a>
        </li><!-- End Users Nav -->
      <?php endif;?>
    </ul>
  </aside><!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1><?= $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
          <li class="breadcrumb-item <?= $menu2 == '' ? 'active' : ''?>"><?= $menu1?></li>
          <?php if($menu2 != ''): ?>
          <li class="breadcrumb-item active"><?= $menu2 ?></li>
          <?php endif;?>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section <?= $content?>">
      <?= $this->session->flashdata('message'); ?>
      <?php $this->load->view($content) ?>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><a href="<?= base_url()?>">Trakindo Technology 2024</a></strong>.
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/quill/quill.js"></script>
  <script src="<?= base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url();?>assets/vendor/datatables/datatables.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="<?= base_url();?>assets/js/main.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url();?>assets/js/custom.js"></script>
</body>
</html>