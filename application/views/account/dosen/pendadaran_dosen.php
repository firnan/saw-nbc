<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ilmu Komunikasi UPN "Veteran" Yogyakarta</title>
  <link href="<?php echo base_url() ?>assets/login_form/images/icons/favicon-ilkom.png"/ rel="icon" type="image/png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url() ?>assets/css/popup.css" rel="stylesheet"> -->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('dosen/dashboard'); ?>">Welcome, <?php echo $this->session->userdata('nama_dosen')?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('dosen/dashboard'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a></li>
         
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('dosen/dosen_list'); ?>">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">Data Dosen</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDosen" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Data Pembimbing</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDosen">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		<a class="nav-link" href="<?php echo base_url('dosen/pembimbing_list') ?>">
            	<i class="fa fa-fw fas fa-spinner fa-pulse"></i>
            	<span class="nav-link-text">Pembimbing 1</span>
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
         	 	<a class="nav-link" href="<?php echo base_url('dosen/pembimbing_2_list'); ?>">
            	<i class="fa fa-fw fas fa-spinner fa-pulse"></i>
            	<span class="nav-link-text">Pembimbing 2</span>
          		</a> 
      		</li>
          </ul>
        </li>
        </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('dosen/pendadaran_list'); ?>">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Data Pendadaran</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('dosen/laporan_akhir_list'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Data Laporan Akhir</span>
          </a></li>

          
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Logout -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Konten -->
  <div class="content-wrapper">
  		<h2 align="center">Ilmu Komunikasi UPN "Veteran" Yogyakarta</h2>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">My Account</a>
        </li>
        <li class="breadcrumb-item active">Data Pendadaran</li>
      </ol>
    <!-- Isi -->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Pendadaran Mahasiswa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIM</th>	
						<th>Nama</th>	
						<th>Judul Skripsi</th>
            <th>Pembimbing I</th>
            <th>Pembimbing II</th>
						<th>Penguji I</th>
						<th>Penguji II</th>
						<th>Tanggal</th>
						<th>Pukul</th>
						<th>Ruangan</th>
						<th>Nilai</th>
					</tr>
				</thead>
				<tbody>

					<?php 
					  $no =1;
			          foreach ($data as $row) {
					?>
							<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->nim; ?></td>
						<td><?php echo $row->nama_mhs; ?></td>
						<td><?php echo $row->judul_skripsi; ?></td>
            <td><?php echo $row->pembimbing_1; ?></td>     
            <td><?php echo $row->pembimbing_2; ?></td>		
						<td><?php echo $row->penguji_1; ?></td>			
						<td><?php echo $row->penguji_2; ?></td>
						<td><?php echo $row->tgl; ?></td>
						<td><?php echo $row->jam; ?></td>	
						<td><?php echo $row->ruangan; ?></td>
						<td><?php echo $row->nilai_pendadaran; ?></td>
					<?php } ?>
				</tbody>
			</table>
 			</div>
        </div>
        	<div class="card-footer small text-muted">Updated <?php echo date('l, d-m-Y  h:i:s a'); ?></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ilmu Komunikasi UPN "Veteran" Yogyakarta</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo site_url('auth/logout');?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>
    <!--<script src="<?php echo base_url() ?>assets/js/sb-admin.popup.js"></script>  -->
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
