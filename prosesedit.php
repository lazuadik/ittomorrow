<?php
    include("config.php");
    //untuk cek, tombol "Edit" sudah diklik atau belum
    if(isset($_POST['edit'])){
        //ambil data dari formulir edit
            $linkkarya = $_POST['linkkarya'];
        //query update atau edit
            $query = pg_query("UPDATE karya SET linkkarya='$linkkarya' WHERE nim=$nim");
        //cek apakah update berhasil
            if($query == TRUE) {
                // kalau berhasil akan terbuka halaman 
                header('Location:home-user.php');
            } else {
                // kalau gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
            }
            } else {
            die("Akses dilarang...");
    }
    ?>