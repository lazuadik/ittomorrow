<?php
    include('config.php');

    if(isset($_GET['nimpeserta'])){

        $nimpeserta = $_GET['nimpeserta'];
        $query = pg_query("SELECT namalomba, namapeserta, institusipeserta, emailpeserta, linkkarya FROM peserta P, karya K WHERE P.nimpeserta = '$nimpeserta' AND P.nimpeserta = K.nimpeserta");
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
    <h1><?php echo $namalomba ?></h1>
    <div id="peserta">
        <h3>Detail Peserta</h3>
        <h5>Nama Peserta: <?php echo $namapeserta ?></h5>
        <h5>Asal Institusi: <?php echo $asal_institusi ?></h5>
        <h5>Email: <?php echo $email ?></h5>
        <h5>Link Karya: <?php echo $linkkarya ?></h5>
    </div>
</body>
</html>
