<?php


session_start();
$auth = $_SESSION['auth'];


        



switch($auth){
  case true:
    echo "true";
    break;
  case false:
    echo "false";
 header('Location: index.php?login=error2');
    exit;
    break;
}