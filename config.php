<?php
$db=pg_connect('host=localhost dbname=ittomorrow user=postgres password=22September_ port=5432');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
