<?php
include("config.php");
if(isset($_SESSION['login'])){
    header("Location: home-user.php");
        exit;
}

if(isset($_POST['kumpul'])){
        $linkkarya = $_POST['linkkarya'];
    $query = pg_query("INSERT INTO peserta (linkkarya) VALUE ('$linkkarya')");
    //if($query==TRUE){
      //  header('Location:home-user.php');
    //}
    //else{
      //  header('Location:dashboard-user.php?status=gagal');
    //}


}
