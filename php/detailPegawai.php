<?php
if( isset($_POST['idx'])) {
    $id = $_POST['idx'];

    include "koneksi.php";

    $sql = "SELECT * FROM tabel_pegawai WHERE nip = '$id'";
    $res = mysql_query($sql);

    while ( $row = mysql_fetch_assoc($res) ){

        echo "<input type='hidden' name='nip_awal' value=". $row['nip']."><br>";
        echo "<input type='text' class='form-control' name='nip' value=". $row['nip']."><br>";
        echo "<input type='text' class='form-control' name='nama_pegawai' value='". $row['nama_pegawai']. "'><br>";
        echo "<input type='text' class='form-control' name='alamat' value='". $row['alamat']. "'><br>";
        echo "<input type='text' class='form-control' name='jabatan' value=". $row['jabatan']. "><br>";
    }

    mysql_close();
}
?>