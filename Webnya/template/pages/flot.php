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
                    <h1 class="page-header">Jumlah Kamar</h1>
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
                      <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="tambahKamar.php">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 ><center>Tambah Data</center></h4>
                </div>
				<div class="modal-body">
                		<div class="form-group">
                			<label>No Kamar</label>
                			<input class="form-control" type="text" name="no_kamar" placeholder="No Kamar">
            			</div>
						<div class="form-group">
                			<label>Kelas</label>
                			<input class="form-control" type="text" name="kelas" placeholder="Kelas">
            			</div>
						<div class="form-group">
                		<label>Unit Tersedia</label>
                			<input class="form-control" type="text" name="unit_tersedia" placeholder="Unit Tersedia">
            			</div>
						<div class="form-group">
                		<label>Jumlah</label>
                			<input class="form-control" type="text" name="jumlah" placeholder="Jumlah">
            			</div>
						<div class="form-group">
                		<label>Biaya</label>
                			<input class="form-control" type="text" name="biaya" placeholder="Biaya">
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
                                            <th><div align="center">No Kamar</div></th>
                                            <th><div align="center">Kelas</div></th>
                                            <th><div align="center">Unit Tersedia</div></th>
                                            <th><div align="center">Jumlah</div></th>
                                            <th><div align="center">Biaya</div></th>
                                            <th><div align="center"></div></th>
                                        </tr>
                                    </thead>
                                    <?php
            include "koneksi.php";
            $sql = mysql_query("SELECT * FROM tabel_kamar");
			
            $no = 1;
			while ($tampil = mysql_fetch_array($sql)){
			?>
                                    <tbody>
                                        <tr class="">
                                            <td><div align="center"><?php echo $no; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['no_kamar']; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['kelas']; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['unit_tersedia']; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['jumlah']; ?></div></td>
                                            <td><div align="center"><?php echo $tampil['biaya']; ?></div></td>
                                           <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal<?php echo $tampil['no_kamar']; ?>"><i class='fa  fa-pencil fa-fw'></i> EDIT</button>
        <div class="modal fade" id="myModal<?php echo $tampil['no_kamar']; ?>" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 ><center>Detail Kamar</center></h4>
                </div>
                
                    <div class="hasil-data">
                    <form role="form" action="editkamar.php" method="get">

                        <?php
                        $no_kamar = $tampil['no_kamar']; 
                        $query_edit = mysql_query("SELECT * FROM tabel_kamar WHERE no_kamar='$no_kamar'");
						
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysql_fetch_array($query_edit)) {  
                        ?>
						
                       	 <input type="hidden" name="no_kamar" class="form-control" value="<?php echo $row['no_kamar']; ?>">
						
                        <div class="form-group" style="margin-left:10px;">
                          <label>Kelas</label>
                          <input type="text" name="kelas" class="form-control" value="<?php echo $row['kelas']; ?>" style="width:500px; margin-left:20px;">      
                        </div>

                        <div class="form-group" style="margin-left:10px;">
                          <label>Unit Tersedia</label>
                          <input type="text" name="unit_tersedia" class="form-control" value="<?php echo $row['unit_tersedia']; ?>" style="width:500px; margin-left:20px;">      
                        </div>
                        <div class="form-group" style="margin-left:10px;">
                          <label>Jumlah</label>
                          <input type="text" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>" style="width:500px; margin-left:20px;">      
                        </div>
                        <div class="form-group" style="margin-left:10px;">
                          <label>Biaya</label>
                          <input type="text" name="biaya" class="form-control" value="<?php echo $row['biaya']; ?>" style="width:500px; margin-left:20px;">      
                        </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                 <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
            </div>
        </div>
    </div></div>
										   
                                            <a href="hapuskamar.php?no_kamar=<?php echo $tampil['no_kamar'];?>" class="btn btn-sm btn-danger">
                                            <i class="fa  fa-times fa-fw"></i> HAPUS</a>                                            
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
    <!-- /#wrapper -->

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