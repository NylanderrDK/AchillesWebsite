<?php
  include "config.php";

  // Database credentials
  $dbHost = "localhost";
  $dbUser = "root";
  $dbPswd = "";
  $dbName = "achilles";

  // Connect to database
  $conn = mysqli_connect($dbHost, $dbUser, $dbPswd, $dbName);

  // Check connection
  if(!$conn) consoleLog("Connection failed: " . mysqli_connect_error(), $scriptTags = true, $error = true);