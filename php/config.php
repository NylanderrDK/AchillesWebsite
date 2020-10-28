<?php
  // Log to console function
  if(!function_exists("consoleLog")) {
    function consoleLog($output, $scriptTags = true, $error = false) {
      $jsCode = "console.log(" . json_encode($output, JSON_HEX_TAG) . ");";
      if($error) $jsCode = "console.error(" . json_encode($output, JSON_HEX_TAG) . ");";
      if($scriptTags) $jsCode = "<script>" . $jsCode . "</script>";
      echo $jsCode;
    }
  }

  // Error settings
  error_reporting(E_ALL);
  ini_set("display_errors", 1);