<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management</title>
  <link rel="stylesheet" href="/school_managment/assets/style/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    /* Navbar الأساسي */
    .navbar {
      transition: background-color 0.4s, box-shadow 0.4s, backdrop-filter 0.4s;
    }

    /* الحالة العادية (أزرق) */
    .navbar-default {
      background-color: rgba(13, 110, 253, 1); /* أزرق ثابت */
    }

    /* بعد Scroll (شفاف) */
    .navbar-scrolled {
      background-color: rgba(13, 110, 253, 0.3); /* أزرق خفيف شفاف */
      backdrop-filter: blur(6px); /* تأثير زجاج */
      box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* ظل خفيف */
    }

    body {
      padding-top: 70px; /* علشان المحتوى مايبقاش ورا النافبار */
    }
  </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/school_managment/home.php">
      <i class="bi bi-mortarboard-fill"></i> School Management
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="/school_managment/user/index.php">
            <i class="bi bi-people-fill"></i> Users
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/school_managment/student/index.php">
            <i class="bi bi-person-badge-fill"></i> Students
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/school_managment/teacher/index.php">
            <i class="bi bi-person-video3"></i> Teachers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/school_managment/class_room/index.php">
            <i class="bi bi-building"></i> Classes
          </a>
        </li>

        <?php if (isset($_SESSION['userName'])): ?>
        <li class="nav-item">
          <a class="nav-link text-warning fw-bold" href="#">
            <i class="bi bi-person-circle"></i> <?= $_SESSION['userName']; ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger fw-bold" href="/school_managment/user/logout.php">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="/school_managment/user/login.php">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>




