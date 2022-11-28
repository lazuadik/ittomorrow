<?php
    session_start();
    include('config.php');
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        $namapeserta = $_POST['namapeserta'];
        $query = pg_query("select * from peserta where namapeserta = '".pg_escape_string($_POST['namapeserta'])."'");
        $dashboard_check = pg_num_rows($query);
        if($dashboard_check==TRUE) {
            header('Location: home-user.php');

        } else {
            header('Location: login.php?status=gagal');
        }

    //buat query
    

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IT Tomorrow</title>
        <link rel="stylesheet" href="home-user.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="home-user.php">IT Tomorrow</a>
            </div>
            <form action="dashboard-user.php" method="post">
                <div class="navBar">
                    <a class="active" href="home-user.php">Home</a>
                    <a href="compe-user.php">Competitions</a>
                    <a href="about-user.php">About</a>
                    <a href="dashboard-user.php"  style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);" name="submit">Dashboard</a>
                    <a href="login.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Logout</a>
                </div>
            </form>
        </header>
        <main>
            <div class="container-1">
                <img src="logo-ittomorrow.png" style="max-width: 150px; max-height: 200px;">
                <h2 style="color: rgb(179, 179, 222);">IT TOMORROW 2022</h2>
                <p>IT Tomorrow meruapakan perlombaan IT yang diselenggarakan oleh<br>
                    Departemen Ilmu Komputer IPB (Institut Perdesainan Bogor)
                </p>
                <br>
                <a href="#register" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Lihat Dashboard</a>
            </div>
            <div class="container-2">
                <h1>COMPETITIONS</h1>
                <div class="list-compe">
                    <a href="#">Coding Tomorrow</a>
                    <a href="#">UI Tomorrow</a>
                    <a href="#">Poster Tomorrow</a>
                </div>
            </div>
            <div class="footer">
                <p>© Copyright <strong>IT Tomorrow 2022</strong> (Projek Basis Data)</p>
            </div>
        </main>
    </body>
</html>