<?php
  include "dbh.inc.php";
  include "config.php";

  $title = $_POST["title"];
  $info = $_POST["info"];
  $link = $_POST["link"];
  $modsLink = $_POST["modsLink"];
  $category = $_POST["category"];
  $photo = $_POST["photo"];

  if(empty($title) || empty($info) || empty($link) || empty($modsLink) || empty($category) || empty($photo)) {
    echo "empty";
    exit();
  } else {
    $sql = mysqli_query($conn, "INSERT INTO uploads (`title`, `info`, `downloadLink`, `gta5modsLink`, `category`, `photoLink`) VALUES ('$title', '$info', '$link', '$modsLink', '$category', '$photo')");
    if($sql) {
      echo "done";
    } else {
      echo "sqlerror";
    }
  }