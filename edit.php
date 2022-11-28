<?php
include("config.php");
if( isset($_GET['nim']) ){

    //ambil id dari query string
    $nim = $_GET['nim'];
    //bikin query buat ambil data biar di edit
    $q = pg_query("SELECT * FROM peserta where nim = $nim");
    $peserta = pg_fetch_array($q);
    //nampilin data yang diedit
    $linkkarya = $peserta['linkkarya'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard | IT Tomorrow</title>
        <link rel="stylesheet" href="dashboard-user.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.html">IT Tomorrow</a>
            </div>
            <div class="navBar">
                <a class="active" href="index.php">Home</a>
                <a href="compe.html">Competitions</a>
                <a href="about.html">About</a>
                <a href="dashboard-user.html" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Dashboard</a>
                <a href="login.html" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Login</a>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="card">
                    <img src="WhatsApp Image 2022-08-20 at 11.16.08.jpeg" alt="John" style="max-width: 100px; max-height: 200px; border-radius: 20px;">
                    <h1>Muhammad Rangga Rafif</h1>
                    <p class="title">UX Tomorrow Participant</p>
                    <p>IPB University</p>
                </div>
            </div>
            <div class="container-2">
            <h3 style="text-align: center;">Edit Karya</h3>
                <form action="prosesedit.php" method="post" style="text-aling:center; margin: 0 auto; width: 250px;">
                    <input type="text" placeholder="Masukkan Link karya" name="linkkarya" class="linkkarya" VALUE="<?=$linkkarya?>">
                    <input type="Submit" name="kumpul" VALUE="kumpul">
                    <?php if(isset($_GET['status']) && $_GET['status']== 'gagal'): ?>
                        <span> pengumpulan gagal</span>
                        <?php endif;?>
                </form>
            </div>
        </main>
    </body>
</html>
