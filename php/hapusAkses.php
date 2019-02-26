<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "UPDATE tabel_user SET hak_akses='nonaktif' WHERE username='$id'";
$res = mysql_query($sql);
if ($res){
	echo "Berhasil ubah";
	header("Location: ../menu_pegawai.php");
}else{
	echo "Gagal hapus";
}

?>