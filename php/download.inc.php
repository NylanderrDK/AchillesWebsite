<?php
  include "dbh.inc.php";
  include "config.php";

  $newDownload = $_POST["newDownload"];
  $name = $_POST["name"];

  $sql = mysqli_query($conn, "UPDATE uploads SET downloads = downloads+1 WHERE title = '$name'");
  if($sql) {
    echo "done";
  } else {
    echo "error";
  }