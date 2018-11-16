<?php 
include 'koneksi.php';
$no_kamar = $_GET['no_kamar'];
mysql_query("DELETE FROM tabel_kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
 
header("location:flot.php?pesan=hapus");
?>