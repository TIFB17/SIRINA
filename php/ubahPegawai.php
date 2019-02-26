<?php

if ( isset($_POST['ubahkan']) ){
	include "koneksi.php";
	$nip_awal = $_POST['nip_awal'];
	$nip = $_POST['nip'];
	$nama_pegawai = $_POST['nama_pegawai'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];

	$sql = "UPDATE tabel_pegawai SET nip='$nip', nama_pegawai='$nama_pegawai', alamat='$alamat', jabatan='$jabatan' WHERE nip = $nip_awal";
	$res = mysql_query($sql);
	if ($res){
		echo "Berhasil ubah";
		header("location:../menu_pegawai.php");
	}else {
		echo "gagal ubah";
		header("location:../menu_pegawai.php");
	}
}
?>