<?php
include("config.php");
if(isset($_POST['register'])){
        $uname = $_POST['namapeserta'];
        $password_peserta = $_POST['passwordpeserta'];
        $email = $_POST['emailpeserta'];
        $asal_institusi = $_POST['institusipeserta'];
        $nim_peserta = $_POST['nimpeserta'];
        $nama_lomba = $_POST['namalomba'];


    //buat query

    $query = pg_query("INSERT INTO peserta (namapeserta, passwordpeserta, emailpeserta, institusipeserta, nimpeserta, namalomba) VALUEs ('$uname', '$password_peserta', '$email', '$asal_institusi', '$nim_peserta', '$nama_lomba')");

    if($query==TRUE) {
        header('Location: index.php');
    } else {
        header('Location: register.php');
    }

} else {
    die("Akses dilarang...");
}
?>
