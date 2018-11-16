<?php 
include 'koneksi.php';
$nik = $_GET['nik'];
mysql_query("DELETE FROM tabel_pasien WHERE nik='$nik'")or die(mysql_error());
 
header("location:pasien.php?pesan=hapus");
?>