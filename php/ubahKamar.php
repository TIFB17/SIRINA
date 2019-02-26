<?php
    include "koneksi.php";

    // data yang akan diubah
    $no_kamar_awal = $_POST['no_kamar_awal'];
    $no_kamar = $_POST['no_kamar'];
    $kelas = $_POST['kelas'];
    $jumlah = $_POST['jumlah'];
    $biaya = $_POST['biaya'];

    $res = mysql_query("SELECT * FROM tabel_kamar WHERE no_kamar = '$no_kamar_awal'");
    while ($row = mysql_fetch_assoc($res) ){
        $dipakai = $row['jumlah'] - $row['unit_tersedia'];
        // Jika nilai baru lebih besar dari nilai yg lama
        if ($jumlah > $dipakai){
            $tmp = $jumlah - $dipakai;
            $res = mysql_query("UPDATE tabel_kamar SET no_kamar='$no_kamar', kelas='$kelas', jumlah=$jumlah, unit_tersedia=$tmp, biaya=$biaya WHERE no_kamar='$no_kamar_awal'");
            if ($res){
                echo "<script>document.location='../menu_kamar_admin.php';</script>";
            }else {
                echo "<script>alert('Gagal melakukan perubahan');";
                echo "document.location='../menu_kamar_admin.php';</script>";
            }
        }elseif($jumlah < $dipakai){
            echo "<script>alert('Jumlah terlalu kecil dari jumlah_pemakai');";
            echo "document.location='../menu_kamar_admin.php';</script>";
        }else{
            $res = mysql_query("UPDATE tabel_kamar SET no_kamar='$no_kamar', kelas='$kelas', jumlah=$jumlah, biaya=$biaya WHERE no_kamar='$no_kamar_awal'");
            if ($res) {
                echo "<script>document.location='../menu_kamar_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal melakukan perubahan');";
                echo "document.location='../menu_kamar_admin.php';</script>";
            }
        }
    }
    mysql_close();
    

?>