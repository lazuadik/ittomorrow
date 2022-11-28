<?php
include("config.php");
if(isset($_POST['login'])&&!empty($_POST['login'])){
        $namapeserta = $_POST['namapeserta'];
        $password_peserta = $_POST['passwordpeserta'];
        $query = pg_query("select * from peserta where namapeserta = '".pg_escape_string($_POST['namapeserta'])."' and password ='".$password_peserta."'");
        $login_check = pg_num_rows($query);
        if($login_check==TRUE) {
            header('Location: home-user.php');
        } else {
            header('Location: login.php?status=gagal');
        }

    //buat query
    

} else {
    die("Akses dilarang...");
}
?>