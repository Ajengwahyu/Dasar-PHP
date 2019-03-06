<?php
  session_start();
  include("function.php");
  echo check_login();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>praktik login session</title>
  </head>
  <body>
    <h1>Selamat datang!</h1>
    <h3><a href="profil.php">Edit profl</a></h3>
    <h3><a href="logout.php">Logout!</a></h3>
  </body>
</html>
