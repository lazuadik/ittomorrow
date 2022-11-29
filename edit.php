<?php
    session_start();
    include("config.php");
    if(!isset($_SESSION["namapeserta"])){
        header("Location: login.php");
        exit;
    }
    if(isset($_POST['kumpul'])){
        $kueri = pg_query("SELECT nimpeserta FROM peserta where namapeserta = '".$_SESSION['namapeserta']."'");
        $nimpeserta = pg_fetch_array($kueri)['nimpeserta'];
        if($_POST['nimpeserta'] == $nimpeserta){
            $query_kumpul = pg_query("UPDATE karya SET linkkarya ='".$_POST['linkkarya']."' where nimpeserta = '$nimpeserta'");
            header("location: dashboard-user.php?status=berhasil");
        }else{
            header("location: dashboard-user.php?status=gagal");
        }
    }

    $query = pg_query("SELECT * FROM peserta WHERE namapeserta = '".$_SESSION['namapeserta']."'");
    $peserta = pg_fetch_array($query);
    $namapeserta = $peserta['namapeserta'];
    $asal_institusi = $peserta['institusipeserta'];
    $namalomba = $peserta['namalomba'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard | IT Tomorrow</title>
        <link rel="stylesheet" href="dashboard-user.css?v=<?php echo time(); ?>">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="home-user.php">IT Tomorrow</a>
            </div>
            <div class="navBar">
                <a class="active" href="home-user.php">Home</a>
                <a href="compe-user.php">Competitions</a>
                <a href="about-user.php">About</a>
                <a href="dashboard-user.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Dasboard</a>
                <a href="login.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Logout</a>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="card">
                    <img src="profile.jpg" alt="John" style="width: 150px; height: 150px; border-radius: 20px;">
                    <h4><?php echo $namapeserta ?></h4>
                    <h4><?php echo $asal_institusi ?></h4>
                    <h4><?php echo $namalomba ?></h4>
                </div>
            </div>
            <div class="container-2">   
                <br>
                <h3 style="text-align: center;">Kumpulkan Karya</h3>
                <form action="" method="post" style="text-align:center; margin: 0 auto; width: 200px;"> 
                    <input type="text" placeholder="Konfirmasi NIM" name="nimpeserta" class="nimpeserta">
                    <input type="text" placeholder="Masukkan Link karya" name="linkkarya" class="linkkarya">
                    <input type="Submit" name="kumpul" value="Kumpul">
                    <input type="Submit" name="edit" value="Edit">
                    <?php
                        if(isset($_GET['status'])){
                            if($_GET['status'] == 'gagal'){; ?>
                                <p>NIM yang dimasukkan <strong>salah!<strong></p>
                            <?php }
                            else if($_GET['status'] == 'berhasil'){; ?>
                                 <p>mamamu pasti bangga</p>
                            <?php }
                        };
                    ?>
                </form>
            </div>
        </main>
    </body>
</html>
