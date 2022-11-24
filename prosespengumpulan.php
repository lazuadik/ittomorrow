<?php
include("config.php");
if(isset($_POST['kumpul']) && !empty($_POST['kumpul'])){
        $linkkarya = $_POST['linkkarya'];
    $query = pg_query("INSERT INTO karya (linkkarya) VALUE ('$linkkarya')");
    if($query==TRUE){
        header('Location:home-user.php');
    }
    else{
        header('Location:dashboard-user.php?status=gagal');
    }

}
else{
    die("akses dilarang...");
}