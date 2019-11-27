<?php
  session_start();
  if(!(isset($_SESSION['nip']) && $_SESSION['nip'] != '')){
    
    echo "<script>alert('Harus Login!');window.location.href = '../prakomxiv';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>One Stop IT Services</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">4 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
          </a>
          
          <a href="logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Home</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permintaan Saya</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Permintaan Layanan</li>
          <li class="nav-item">
            <a href="email" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Email</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cloud" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Cloud</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Layanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>100<sup style="font-size: 20px"></sup></h3>

                <p>Permintaan Email</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>100<sup style="font-size: 20px"></sup></h3>

                <p>Permintaan Cloud</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Permintaan Pemohon</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.card -->
          </section>
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permintaan Layanan Cloud</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="thead-light">
                <tr>
                    <th class="th-sm">No.</th>
                    <th class="th-sm">Jenis Layanan</th>
                    <th class="th-sm">Unit Kerja Pemohon</th>
                    <th class="th-sm">NIP</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Menu</th>
                </tr>
                </thead>
                <?php
                require_once('koneksi.php');
                $nip = $_SESSION["nip"]; 
                $hasil = mysqli_query($con, "SELECT * from pegawai WHERE nip='$nip'");
                $role = mysqli_fetch_array($hasil)['role'];
                $connectDB = mysqli_select_db($con, 'osis_db');
                if ($role == 'admin'){
                  $result = mysqli_query($con, "SELECT * from cloud");
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_cloud<?php echo $row['no_form']?>"><span class="glyphicon glyphicon-edit"></span> Assign</button>
                        <!-- <a href="edit_email?id=<?php echo $row['no_form']; ?>">Update</a> -->
                        </td>
                    </tr>
                    <?php 
                    include 'update_cloud.php';
                }
                } else if ($role == 'tim teknis'){
                  $result = mysqli_query($con, "SELECT * from cloud WHERE status_transaksi='Menunggu Tim Teknis'");
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_cloud<?php echo $row['no_form']?>"><span class="glyphicon glyphicon-edit"></span> Assign</button>
                            <!-- <input type="button" name="update" value="Update" id="'.$row['id'] .'" class="btn btn-info btn-xs edit_data" /></td> -->
                        </td>
                    </tr>
                    <?php 
                    include 'update_cloud.php';
                }
                } else {
                  $result = mysqli_query($con, "SELECT * from cloud WHERE nip='$nip'");
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <input type="button" name="batalkan" value="Batalkan" id="'.$row['id'] .'" class="btn btn-info btn-xs edit_data" /></td>
                        </td>
                    </tr>
                    <?php 
                    
                  }
                }
                ?>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permintaan Layanan Email</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="thead-light">
                <tr>
                    <th class="th-sm">No.</th>
                    <th class="th-sm">Jenis Layanan</th>
                    <th class="th-sm">Unit Kerja Pemohon</th>
                    <th class="th-sm">NIP</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Menu</th>
                </tr>
                </thead>
                <?php
                require_once('koneksi.php');
                $nip = $_SESSION["nip"]; 
                $hasil = mysqli_query($con, "SELECT * from pegawai WHERE nip='$nip'");
                $role = mysqli_fetch_array($hasil)['role'];
                $connectDB = mysqli_select_db($con, 'osis_db');
                if ($role == 'admin'){
                $result = mysqli_query($con, "SELECT * from email");
                while ($row = mysqli_fetch_array($result)){
                  ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_email<?php echo $row['no_form']?>"><span class="glyphicon glyphicon-edit"></span> Assign</button>
                            <!-- <input type="button" name="update" value="Update" id="'.$row['id'] .'" class="btn btn-info btn-xs edit_data" /></td> -->
                        </td>
                    </tr>
                    <?php 
                    include 'update_email.php';
                }
                } else if ($role == 'tim teknis'){
                  $result = mysqli_query($con, "SELECT * from email WHERE status_transaksi='Menunggu Tim Teknis'");
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_email<?php echo $row['no_form']?>"><span class="glyphicon glyphicon-edit"></span> Assign</button>
                            <!-- <input type="button" name="update" value="Update" id="'.$row['id'] .'" class="btn btn-info btn-xs edit_data" /></td> -->
                        </td>
                    </tr>
                    <?php 
                    include 'update_email.php';
                }
                } else {
                  $result = mysqli_query($con, "SELECT * from email WHERE nip='$nip'");
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['no_form']; ?></td>
                        <td><?php echo $row['jenis_transaksi']; ?></td>
                        <td><?php echo $row['unit_kerja']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['status_transaksi']; ?></td>
                        <td>
                        <input type="button" name="batalkan" value="Batalkan" id="'.$row['id'] .'" class="btn btn-info btn-xs edit_data" /></td>
                        </td>
                    </tr>
                    <?php 
                  }
                }
                ?>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright Kelompok 1 Prakom XIV &copy; 2019 
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
