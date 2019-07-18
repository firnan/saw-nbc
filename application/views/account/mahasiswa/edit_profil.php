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
    <a class="navbar-brand" href="<?php echo base_url('mahasiswa/index'); ?>">Welcome, <?php echo $this->session->userdata('namalengkap')?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/index'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/pengajuan_proposal'); ?>">
            <i class="fa fa-fw fa-file-text"></i>
            <span class="nav-link-text">Pengajuan Proposal</span>
          </a></li>
         
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/pendadaran'); ?>">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Pendadaran</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/form_lap_akhir'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Laporan Akhir</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mahasiswa">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMahasiswa" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">History</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMahasiswa">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          	<a class="nav-link" href="<?php echo base_url('mahasiswa/data_proposal'); ?>">
            	<i class="fa fa-fw fas fa-spinner fa-spin"></i>
            	<span class="nav-link-text">Proposal</span>
          	</a>
          	</li>
          	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          	<a class="nav-link" href="<?php echo base_url('mahasiswa/data_laporan_akhir'); ?>">
            	<i class="fa fa-fw fas fa-spinner fa-spin"></i>
            	<span class="nav-link-text">Laporan Akhir</span>
          	</a>
          	</li>
          	</ul>
	        </li>
	        </li>
	        
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/profile'); ?>">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Lihat Profil</span>
          </a></li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('mahasiswa/daftar_pembimbing'); ?>">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">Daftar Pembimbing</span>
          </a></li>
          
          </ul>
        </li>
        </li>
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
        <li class="breadcrumb-item active">Edit Profil</li>
      </ol>
    
    <!-- Tabel Edit Profil -->
    <?php echo form_open_multipart('mahasiswa/update');?>
  		<div class="form-group">
  			<label class="control-label col-xs-3"><b>Nama Lengkap</b></label>
			<div class="col-xs-9">
				<?php echo $mahasiswa->namalengkap; ?>
    		<span class="help-block"></span>
  		</div> 
  		</div>
  		<div class="form-group">
  			<label class="control-label col-xs-3"><b>NIM</b></label>
			<div class="col-xs-9">
				<?php echo $mahasiswa->nim; ?>
  			<span class="help-block"></span>
  		</div> 
  		</div>
  		<div class="form-group">
    		<label class="control-label col-xs-3"><b>Email</b></label>
			<div class="col-xs-9">
				<?php echo $mahasiswa->email; ?>
    			<!-- <input type="email" class="form-control" name="email" value="<?php echo $mahasiswa->email; ?>" id="email" style="width:460px;"> -->
  		<span class="help-block"></span>
  		</div> 
  		</div>
  		<div class="form-group">
    		<label class="control-label col-xs-3"><b>Password</b> (Encrypt)</label>
			<div class="col-xs-9">
				<?php echo $mahasiswa->password; ?>
  		<span class="help-block"></span>
  		</div> 
  		</div>
    </form>
  		<div class="form-group">
    		<label class="control-label col-xs-3"><b>Created at</b></label>
			<div class="col-xs-9">
    			<?php echo $mahasiswa->created_at; ?>
  		<span class="help-block"></span>
  		</div> 
  		</div>
  		
  		<div>
  			
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
