<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIRINA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SIRINA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                    <ul class="dropdown-menu dropdown-messages">
                     
                    </ul>
                    <!-- /.dropdown-messages -->
                
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                           
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Menu Utama</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Kamar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.php">Jumlah Kamar</a>
                                </li>
                                <li>
                                    <a href="tables.php">Cek Kamar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <li>
                            <a href="laphari.php"><i class="fa fa-table fa-fw"></i> Laporan</a>
                           
                        <li>
                            
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Transaksi</a>
                            
                        </li>
                        <li>
                            <a href="pasien.php"><i class="fa fa-medkit fa-fw"></i> Pasien</a>
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>Pegawai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pegawai.php">Daftar Pegawai</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pasien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-12 -->
</div>
    <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
              <!-- /.col-lg-6 -->
</div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
              <!-- /.col-lg-6 -->
</div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
<div class="col-lg-6">
                    <div class="panel panel-default" style="width:1070px;">
                        <div class="panel-heading" >
                            Data Kamar
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
							
							<!-- Modal -->
								
                                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="tambahPasien.php">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 ><center>Tambah Data</center></h4>
                </div>
				<div class="modal-body">
                		<div class="form-group">
                			<label>NIK</label>
                			<input class="form-control" type="text" name="nik" placeholder="NIK">
            			</div>
						<div class="form-group">
                			<label>Nama Pasien</label>
                			<input class="form-control" type="text" name="nama_pasien" placeholder="Nama Pasien">
            			</div>
						<div class="form-group">
                		<label>No Asuransi</label>
                			<input class="form-control" type="text" name="no_asuransi" placeholder="No Asuransi">
            			</div>
						<div class="form-group">
                		<label>Alamat</label>
                			<input class="form-control" type="text" name="alamat" placeholder="Alamat">
            			</div>
						<div class="form-group">
                		<label>Tanggal Lahir</label>
                			<input class="form-control" type="date" title="Tanggal Lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
            			</div>
						<div class="form-group">
                		<label>Umur</label>
                			<input class="form-control" type="text" name="umur" placeholder="Umur">
            			</div>
					
				</div>
				<div class="modal-footer">
					<input class="btn btn-primary" type="submit" name="tambahkan" value="Tambah">
					<input class="btn btn-danger" data-dismiss="modal" type="reset" value="Batal">
				</div>
				</form>
			</div>
		</div>
	</div></div>
                        <!-- /.panel-heading -->
                       <div class="panel-body" style="width:1070px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><div align="center">Nomor</div></th>
                                            <th><div align="center">Nik</div></th>
                                            <th><div align="center">Nama Pasien</div></th>
                                            <th><div align="center">No Asuransi</div></th>
                                            <th><div align="center">Alamat</div></th>
                                            <th><div align="center">Tanggal Lahir</div></th>
                                            <th><div align="center">Umur</div></th>
                                            <th><div align="center"></div></th>
                                        </tr>
                                    </thead>
            <?php
            include "koneksi.php";
            $sql = mysql_query("SELECT * FROM tabel_pasien");
            $no = 1;
			while ($tampil = mysql_fetch_array($sql)){
			?>
                                    <tbody>
                                        <tr class="">
                                            <td><div align="center"><?php echo $no; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['nik']; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['nama_pasien']; ?></td>
                                            <td><div align="center"><?php echo $tampil['no_asuransi']; ?></td>
                                            <td><div align="center"><?php echo $tampil['alamat']; ?></td>
                                            <td><div align="center"><?php echo $tampil['tanggal_lahir']; ?></td>
                                            <td><div align="center"><?php echo $tampil['umur']; ?></td>
                                            <?php echo "<td><a href='#editpasien_modal' class='btn btn-sm btn-info' data-toggle='modal' data-nik=".$tampil['nik'].">
											<i class='fa  fa-pencil fa-fw'></i> EDIT</a>"; ?>
                                            <a href="hapuspasien.php?nik=<?php echo $tampil['nik'];?>" class="btn btn-sm btn-danger"><i class="fa  fa-times fa-fw"></i> HAPUS</a>                                            
                                            </td>
                                        </tr>
                                        <?php 
            							$no++; 
            							}
              							?>
                                    </tbody>
                                </table>
                          </div>
                            <!-- /.table-responsive -->
                        </div>
                        
                        
                        
                        
                        <div class="modal fade" id="editpasien_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 ><center>Detail Pasien</center></h4>
                </div>
                
                    <div class="hasil-data"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              </div>
                <!-- /.col-lg-6 -->
    </div>
<!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#modals -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#editpasien_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('nik');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detailpasien.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
