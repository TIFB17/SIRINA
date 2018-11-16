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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
                    <h1 class="page-header">Cek Kamar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cek Ketersediaan Kamar
                      </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama Kamar</th>
                                        <th>No Kamar</th>
                                        <th>Status Kamar</th>
                                        <th>Harga Sewa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Gatotkoco</td>
                                        <td>1</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Gatotkoco</td>
                                        <td>2</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Gatotkoco</td>
                                        <td>3</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>Arjuno</td>
                                        <td>1</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Arjuno</td>
                                        <td>2</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                    
                                    
                                    <tr class="gradeA">
                                        <td>Nakula</td>
                                        <td>1</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Nakula</td>
                                        <td>2</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Sadewo</td>
                                        <td>1</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Sadewo</td>
                                        <td>2</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Bimo</td>
                                        <td>1</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Bimo</td>
                                        <td>2</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Damayanti</td>
                                        <td>1</td>
                                        <td class="center">Penuh</td>
                                        <td class="center">-</td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>Kinanthi</td>
                                        <td>1</td>
                                        <td class="center">Kosong</td>
                                        <td class="center">-</td>
                                    </tr>
                                </tbody>
                            </table>
                  <!-- /.table-responsive -->
                      </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <!-- /.panel -->
        </div>
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
