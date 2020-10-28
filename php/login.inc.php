<?php
  include "dbh.inc.php";
  include "config.php";

  $uid = $_POST["uid"];
  $pswd = $_POST["pswd"];

  if(empty($uid) || empty($pswd)) {
    echo "empty";
    exit(); 
  } else {
    $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      echo "sqlerror";
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ss", $uid, $uid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)) {
        $pswdCheck = password_verify($pswd, $row["pswd"]);
        if(!$pswdCheck) {
          echo "wrongpswd";
          exit();
        } else if($pswdCheck) {
          session_start();
          $_SESSION["username"] = $row["username"];
          echo "done";
          exit();
        } else {
          echo "wrongpswd";
          exit();
        }
      } else {
        echo "wrongpswd";
        exit();
      }
    }
  }