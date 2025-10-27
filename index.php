<?php
// Include the gallery function
include("functions.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <!-- SEO tags for search engines -->
  <meta name="description" content="Elite Gaming Championships - Tournament Gallery"> 
  <meta name="keywords" content="gaming, esports, tournaments, gallery, wallpapers, downloads">
  <meta name="author" content="Steven Soliman">
  
  <!-- Makes site work on mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Elite Gaming Championships</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=LatoUbuntu" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="css/font-awesome.min.css" >
  <link rel="stylesheet" href="css/simple-lightbox.css" >
  <link rel="stylesheet" href="css/gallery.css" >
  <link rel="stylesheet" href="css/layout.css" >
  <link rel="stylesheet" href="css/navigation.css" >
  <link rel="stylesheet" href="css/form.css" >

  <!-- jQuery and Lightbox -->
  <script src="js/j_query_min.js"></script>
  <script src="js/simple-lightbox.min.js"></script>
</head>

<body>
  <div class="wrapper">

    <!-- Logo - clicks back to homepage -->
    <div class="logo">
      <a href="index.php">
        <img class="responsive" src="images/gaming_logo.png" alt="Gaming Logo"  >
      </a>
    </div>

    <!-- Site Title -->
    <div class="top-title">
      <h2>Elite Gaming</h2>
    </div>

    <!-- Navigation Menu -->
    <div class="header">
      <div class="menu-header">

        <!-- Hamburger icon for mobile -->
        <i class="fa fa-bars"></i>

        <div class="menu-content">

          <ul>
            <li><a class="nav" href="index.php">Home</a></li>
            
            <!-- Dropdown menu with emojis -->
            <li>
              <a class="nav dropbtn" href="#">
                Gallery <i class="fa fa-chevron-down"></i>
              </a>
              <ul class="dropdown">
                <li><a class="nav" href="index.php?page=tournaments">Tournaments 🏆</a></li>
                <li><a class="nav" href="index.php?page=gameplay">Gameplay 💥</a></li>
                <li><a class="nav" href="index.php?page=champions">Champions 🥇</a></li>
              </ul><!-- Dropdown -->
            </li>
            
            <li><a class="nav" href="index.php?page=links">Links</a></li>
            <li><a class="nav" href="index.php?page=contact">Contact</a></li>
          </ul><!-- nav -->
        </div>
      </div>
    </div><!-- header -->

    <!-- Main Content Area -->
    <?php
      // Load different pages based on URL
      if (!isset($_REQUEST['page'])) {
        // No page parameter = show homepage
        include("home.php");
      } else {
        // Clean the page name for security
        $page = preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']);
        // Load the requested page
        include("$page.php");
      }
    ?>

    <!-- Footer -->
    <div class="box footer">
      Elite Gaming Championships - Steven 2025
    </div>

  </div><!-- wrapper -->

  <!-- JavaScript for menu functionality -->
  <script>
    $(document).ready(function() {

        // Dropdown menu toggle
        $('.dropbtn').click(function() {
            $('.dropdown').toggleClass('display');
        });

        // Hamburger menu toggle for mobile
        $('.fa-bars').click(function() {
            $('.menu-content').toggleClass('show-menu');
        });
    });
    </script>
  
  <!-- Initialize lightbox -->
  <script>
    (function() {
      var $gallery = new SimpleLightbox('.gallery a', {})
    })();
  </script>

</body>
</html>