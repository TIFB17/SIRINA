<?php
if ( isset($_POST['tambahkan'])){
	include "koneksi.php";
	$nip = $_POST['nip'];
	$nama_pegawai = $_POST['nama_pegawai'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];
	$username = $_POST['username'];
	$password = $_POST['pass_default'];

	// Menambah user
	$sql1 = "INSERT INTO tabel_user(username, password, hak_akses) VALUES ('$username', '$password', 'user')";
	$res = mysql_query($sql1);
	if ($res) {
		// Menambahkan Pegawai
		$sql2 = "INSERT INTO tabel_pegawai(nip, nama_pegawai, alamat, jabatan, username) VALUES ('$nip', '$nama_pegawai', '$alamat', '$jabatan', '$username')";
		$res = mysql_query($sql2);
		if($res){
			echo "Berhasil";
			header("location:../menu_pegawai.php");
		}else {
			echo "Gagal";
			header("location:../menu_pegawai.php");
		}
	}
}
?>