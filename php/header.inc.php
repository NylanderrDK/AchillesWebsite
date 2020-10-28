<?php
  session_start();
  include "config.php";
  $directoryURI = $_SERVER["REQUEST_URI"];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode("/", $path);
  $firstPart = $components[2];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AchillesDK PoliceMods – <?php echo $title ?></title>
  <!-- Load Favicon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Load FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Load Google Fonts (Roboto) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Load Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Load Material Design Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Load Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
  <!-- Navbar START -->
  <nav class="navbar navbar-expand-lg navbar-dark elegant-color fixed-top scrolling-navbar">
    <div class="container">
      <!-- Navbar Brand -->
      <a href="index.php" class="navbar-brand">AchillesDK PoliceMods</a>

      <!-- Collapse Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Vis menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse Content START -->
      <div class="collapse navbar-collapse" id="mobileNav">

        <!-- Links START -->
        <ul class="navbar-nav mr-auto">

          <li class="nav-item <?php if($firstPart == "" || $firstPart == "index.php") { echo "active"; } else { echo ""; } ?>">
            <a href="index.php" class="nav-link">Forside</a>
          </li>
          
          <li class="nav-item <?php if($firstPart == "emergency.php") { echo "active"; } else { echo ""; } ?>">
            <a href="emergency.php" class="nav-link">Beredskabet</a>
          </li>

          <li class="nav-item <?php if($firstPart == "police.php") { echo "active"; } else { echo ""; } ?>">
            <a href="police.php" class="nav-link">Politi</a>
          </li>

          <li class="nav-item <?php if($firstPart == "parts.php") { echo "active"; } else { echo ""; } ?>">
            <a href="parts.php" class="nav-link">Dele</a>
          </li>

          <li class="nav-item <?php if($firstPart == "civilian.php") { echo "active"; } else { echo ""; } ?>">
            <a href="civilian.php" class="nav-link">Civil</a>
          </li>

          <li class="nav-item <?php if($firstPart == "publictransport.php") { echo "active"; } else { echo ""; } ?>">
            <a href="publictransport.php" class="nav-link">Offentlig Transport</a>
          </li>

          <?php
          if(isset($_SESSION["username"])) { ?>
          <li class="nav-item <?php if($firstPart == "upload.php") { echo "active"; } else { echo ""; } ?>">
            <a href="upload.php" class="nav-link">Upload</a>
          </li>
          <?php } ?>

        </ul>
        <!-- Links END -->

        <!-- Social Media START -->
        <ul class="navbar-nav ml-auto nav-flex icons">

          <li class="nav-item">
            <a href="https://discord.com/invite/ECmqWD3" class="nav-link waves-effect waves-light"><i class="fab fa-discord"></i></a>
          </li>

          <li class="nav-item">
            <a href="https://www.facebook.com/groups/achillesdkpolicemods/" class="nav-link waves-effect waves-light"><i class="fab fa-facebook-f"></i></a>
          </li>

          <li class="nav-item">
            <a href="https://www.youtube.com/channel/UCvcoeKtnmeUx8TI4PNrryXw" class="nav-link waves-effect waves-light"><i class="fab fa-youtube"></i></a>
          </li>

        </ul>
        <!-- Social Media END -->

        <span class="navbar-text">
          <?php
            if(isset($_SESSION["username"])) {
              if($_SESSION["username"] != NULL) {
                echo "<a href='php/logout.inc.php'>Log ud</a>";
              }
            }
          ?>
        </span>
      </div>
      <!-- Collapse Content END -->
    </div>
  </nav>
  <!-- Navbar END -->
  </header>