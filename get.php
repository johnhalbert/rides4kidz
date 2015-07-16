<?php
session_start();

if ($_GET['logout'] == 'true') {
  session_destroy();
  header('Location: index.html.php');
}



?>
