<?php
$db=pg_connect('host=localhost dbname=sekolah user=postgres password=998899Gbu.');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
