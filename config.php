<?php
$db=pg_connect('host=localhost dbname=ittomorrow user=postgres password=<input password lu>');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
