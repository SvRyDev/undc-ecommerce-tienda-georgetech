<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Sitio web dedicado a la venta de producto">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="GeorgeTech">
  <meta name="theme-color" content="#1576CB">
  <link rel="shortcut icon" href="<?= media(); ?>images/favicon.ico">
  <title>
    <?= $data['page_tag'] ?>
  </title>

  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo media() ?>css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo media() ?>css/style.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header color1"><a class="app-header__logo color3" href="<?php echo base_url(); ?>"><img src="<?= media(); ?>images/george.png" style="height:45px;"></a>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle color2" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">

      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="bi bi-person fs-4"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?php echo base_url(); ?>opciones"><i class="bi bi-gear me-2 fs-5"></i>
              Settings</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url(); ?>perfil"><i class="bi bi-person me-2 fs-5"></i>
              Profile</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url(); ?>logout"><i
                class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>