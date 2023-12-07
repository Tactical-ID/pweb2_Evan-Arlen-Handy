<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<script>
    document.addEventListener("DOMContentLoaded", function () {
      // Function to set active link based on a condition
      function setActiveLink() {
        var currentLocation = window.location.href;
        var navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach(function (navLink) {
          if (currentLocation.includes(navLink.getAttribute("href"))) {
            navLink.classList.add("active");
          } else {
            navLink.classList.remove("active");
          }
        });
      }

      // Set active link on page load
      setActiveLink();

      // Set active link when a link is clicked
      var navLinks = document.querySelectorAll(".nav-link");
      navLinks.forEach(function (navLink) {
        navLink.addEventListener("click", setActiveLink);
      });
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link rel="icon" href="./fonts/favicon_io/favicon.ico" type="image/x-icon">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link id="pagestyle" href="./assets/css/style.css" rel="stylesheet" />
  <!-- Add this style block in the head section of your HTML -->
<style>
  /* Adjust the width of the textboxes as needed */
  input[type="text"],
  input[type="number"],
  input[type="file"],
  textarea {
    width: 100%; /* Set the width to 100% for full width, or specify a specific width */
    max-width: 400px; /* Set the maximum width if needed */
  }
</style>

</head>

<body class="g-sidenav-show   bg-white-100">
<div class="min-height-300 bg-white position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <img src="images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Majestic Pet Care</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home">
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="produk">
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="layanan">
            <span class="nav-link-text ms-1">Layanan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>