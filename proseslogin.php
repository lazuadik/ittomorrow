<?php
include("config.php");
if(isset($_POST['login'])){
        $uname = $_POST['namapeserta'];
        $password_peserta = $_POST['passwordpeserta'];

    //buat query
    $query = pg_query("SELECT * FROM peserta WHERE nimpeserta='$nimpeserta' AND passwordpeserta='$passwordpeserta'");
    if($query==TRUE) {
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }

} else {
    die("Akses dilarang...");
}
?>
