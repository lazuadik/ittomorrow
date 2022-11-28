<?php
    session_start();
    include("config.php");
    session_start();
      include("config.php");
      if(!isset($_SESSION["login-admin"])){
      header("Location: login-admin.php");
      exit;
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IT Tomorrow</title>
        <link rel="stylesheet" href="about.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.html">IT Tomorrow</a>
            </div>
            <div class="navBar">
                <a class="active" href="home-admin.php">Home</a>
                <a href="compe-admin.php">Competitions</a>
                <a href="about-admin.php">About</a>
                <a href="dashboard-admin.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Dashboard</a>
                <a href="login-admin.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Login</a>
            </div>
        </header>
        <main>
            <div class="container-1">
                <h1>IT TOMORROW</h1>
                <p>IT Tomorrow meruapakan perlombaan IT yang diselenggarakan oleh<br>
                    Departemen Ilmu Komputer IPB (Institut Perdesainan Bogor)
                </p>
            </div>
        </main>
    </body>
</html>