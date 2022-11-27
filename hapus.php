<?php
include("config.php");
if(isset($_GET['nimpeserta'])){
    // ambil id dari query string
    $nimpeserta=$_GET['nimpeserta'];
    // buat query hapus
    $query=pg_query("DELETE FROM peserta WHERE nimpeserta='$nimpeserta'");
    // apakah query hapus berhasil?
    if($query){
        header('Location: dashboard-admin.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>