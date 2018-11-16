<?php

if ( isset($_POST['tambahkan']) ){
	$conn = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("rawat_inap");

	
	$nama_admin = $_POST['nama_admin'];
	$nama_pasien = $_POST['nama_pasien'];
	$no_asuransi = $_POST['no_asuransi'];
	$no_kamar = $_POST['no_kamar'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$tanggal_keluar = $_POST['tanggal_keluar'];
	$biaya = $_POST['biaya'];
	
	
	
	$sql = "INSERT INTO tabel_transaksi(nama_admin, nama_pasien, no_asuransi, no_kamar, tanggal_masuk, tanggal_keluar, biaya)".
	" VALUES ('$nama_admin', '$nama_pasien', '$no_asuransi', '$no_kamar', '$tanggal_masuk', '$tanggal_keluar', '$biaya')";

	$result = mysql_query($sql, $conn);

	if($result)
{echo "<script>alert('Transaksi Berhasil')</script>";
echo "<script>document.location='laphari.php'</script>";
}
else
{echo "<script>alert('Transaksi Gagal')</script>";
echo "<script>document.location='forms.php'</script>";
}

	mysql_close();
}

?>