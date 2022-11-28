<?php
    include('config.php');

    if(isset($_GET['nimpeserta'])){

        $nimpeserta = $_GET['nimpeserta'];
        $query = pg_query("SELECT * FROM peserta WHERE nimpeserta = $nimpeserta");
        $peserta = pg_fetch_array($query);

        $namapeserta = $peserta['namapeserta'];
        $asal_institusi = $peserta['institusipeserta'];
        $email = $peserta['emailpeserta'];
        $linkkarya = $peserta['linkkarya'];
        $namalomba = $peserta['namalomba'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail-peserta.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Peserta | IT Tomorrow</title>
</head>
<body>
    <div class="header">
        <a href="home-admin.php"><img src="logo-ittomorrow.png" style="width: 100px; height: 100px;"></a>
        <div class="navBar">
            <h3><a href="#" style="color: aliceblue;">Profile</a></h3>
            <h3><a href="dashboard-admin.html" style="color: aliceblue;">Dashboard</a></h3>
        </div>
    </div>
    <h1><?php 
        $query = pg_query("SELECT * FROM peserta where namalomba = $namalomba");
            while($peserta = pg_fetch_array($query)){
                echo "<h1>".$peserta['namalomba']."</h1>";
            }
    ?></h1>
    <div id="peserta">
        <h3>Detail Peserta</h3>
        <h5>Nama:</h5>
        <h5><?=$namapeserta?></h5>
        <h5></h5>
        <h5></h5>

    </div>
</body>
</html>