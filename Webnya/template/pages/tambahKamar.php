<?php

if ( isset($_POST['tambahkan']) ){
	$conn = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("rawat_inap");

	$no_kamar = $_POST['no_kamar'];
	$kelas = $_POST['kelas'];
	$unit_tersedia = $_POST['unit_tersedia'];
	$jumlah = $_POST['jumlah'];
	$biaya = $_POST['biaya'];
	
	
	
	$sql = "INSERT INTO tabel_kamar(no_kamar, kelas, unit_tersedia, jumlah, biaya)".
	" VALUES ('$no_kamar', '$kelas', '$unit_tersedia', '$jumlah', '$biaya')";

	$result = mysql_query($sql, $conn);

	if ($result){
		header("location:flot.php");
	}else {
		die ("Gagal");
	}

	mysql_close();
}

?>