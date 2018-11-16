<?php
//include('dbconnected.php');
include('koneksi.php');

$no_kamar = $_GET['no_kamar'];
    $kelas = $_GET['kelas'];
    $unit_tersedia = $_GET['unit_tersedia'];
	$jumlah = $_GET['jumlah'];
	$biaya = $_GET['biaya'];

//query update

mysql_query("UPDATE tabel_kamar SET kelas='$kelas', unit_tersedia='$unit_tersedia', jumlah='$jumlah', biaya='$biaya' WHERE no_kamar='$no_kamar'");
 
header("location:flot.php?pesan=update");
?>

