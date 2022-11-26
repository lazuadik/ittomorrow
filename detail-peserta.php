<?php
    include('config.php');

    if(isset($_GET['nimpeserta'])){

        $nimpeserta = $_GET['nimpeserta'];
        $query = pg_query("SELECT * FROM peserta WHERE nimpeserta = $nimpeserta");
        $siswa = pg_fetch_array($query);

        $namapeserta = $siswa['namapeserta'];
        $asal_institusi = $siswa['institusipeserta'];
        $email = $siswa['emailpeserta'];
        $linkkarya = $siswa['linkkarya'];
        $namalomba = $siswa['namalomba'];

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
            while($siswa = pg_fetch_array($query)){
                echo "<h1>".$siswa['namalomba']."</h1>";
            }
    ?></h1>
    <div id="peserta">
        <h3>Detail Peserta</h3>
        <?php
        $query = pg_query("SELECT * FROM peserta where namalomba = $namalomba");
                        // $query = mysqli_query($db, $sql);


                        while($siswa = pg_fetch_array($query)){

                            echo "<h5>"."Nama Peserta:"."</h5>"; echo "<h5>".'>> '.$siswa['namapeserta']."</h5>";
                            echo "<h5>"."Asal Institusi:"."</h5>"; echo "<h5>".'>> '.$siswa['institusipeserta']."</h5>";
                            echo "<h5>"."Email Peserta:"."</h5>"; echo "<h5>".'>> '.$siswa['emailpeserta']."</h5>";
                            echo "<h5>"."Link Karya:"."</h5>"; echo "<h5>".'>> '.$siswa['linkkarya']."</h5>";
                            
                            }
            ?>
    </div>
</body>
</html>
