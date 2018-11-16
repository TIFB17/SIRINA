<?php
    include "koneksi.php";
    if($_POST['idx']) {
        $nik = $_POST['idx'];      
        $sql = mysql_query("SELECT * FROM tabel_pasien WHERE nik = $nik");
        while ($result = mysql_fetch_array($sql)){
		?>
        <form action="editpasien.php" method="post">
            <input type="hidden" name="nik" value="<?php echo $result['nik']; ?>">
            <div class="form-group" style="margin-left:10px;">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" name="nama_pasien" value="<?php echo $result['nama_pasien']; ?>" style="width:500px; margin-left:20px;">
            </div>
             <div class="form-group" style="margin-left:10px;">
                <label>No Asuransi</label>
                <input type="text" class="form-control" name="no_asuransi" value="<?php echo $result['no_asuransi']; ?>" style="width:500px; margin-left:20px;">
            </div>
             <div class="form-group" style="margin-left:10px;">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>" style="width:500px; margin-left:20px;">
            </div>
             <div class="form-group" style="margin-left:10px;">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir']; ?>" style="width:500px; margin-left:20px;">
            </div>
            <div class="form-group" style="margin-left:10px;">
                <label>Umur</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $result['umur']; ?>" style="width:500px; margin-left:20px;">
            </div>
            
              <button class="btn btn-primary" type="submit" style="margin-left:30px;">Update</button>
        </form>     
        <?php } }
?>