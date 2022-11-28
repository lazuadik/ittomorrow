<?php
    session_start();
    include("config.php");
    if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

    if(isset($_POST['login-user'])){
        $uname = $_POST['namapeserta'];
        $asal_institusi = $_POST['institusipeserta'];
        $nama_lomba = $_POST['namalomba'];
    
        $data = pg_query("select * from peserta where namapeserta = '".pg_escape_string($_POST['namapeserta'])."' and institusipeserta ='".$asal_institusi."' and namalomba ='".$nama_lomba."'");
        
}        
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
                    <?php
                        $query = pg_query("SELECT * FROM peserta where $nama_lomba = '".$_POST['namalomba']."'");

                        echo "<h3>" .$uname = "ronaldo". "</h3>";
                        echo $asal_institusi = $_POST['institusipeserta'];
                        echo $nama_lomba = $_POST['namalomba'];
                    ?>
                </div>
            </div>
            <div class="container-2">   
                <h3 style="text-align: center;">Kumpulkan Karya</h3>
                <form action="" method="post" style="text-align:center; margin: 0 auto; width: 200px;"> 
                    <input type="text" placeholder="Masukkan Link karya" name="linkkarya" class="linkkarya">
                    <input type="Submit" name="kumpul" value="Kumpul">
                    <input type="Submit" name="edit" value="Edit">
                </form>
            </div>
        </main>
    </body>
</html>