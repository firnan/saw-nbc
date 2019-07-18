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
        <li class="breadcrumb-item active">Laporan Akhir</li>
      </ol>
    
    <!-- Tabel Pengajuan Proposal -->
	<div class="container" id="main">    
    	<div id="signupbox" style="margin-top:20px; margin-left:300px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
       	 <div class="panel panel-primary"> 
            <div class="panel-body" >
                	<center><h3>Input Laporan Akhir Skripsi</h3></center>
				<hr/>
				<div style="color:blue"><center><h6>Silahkan Masukkan Laporan Akhir Dalam Format (.pdf)</h6></center></div>
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
				<!--<a href="<?=base_url().'main/form';?>" class="btn btn-primary">Upload More</a> -->
				<div style="color:red">
					<?php echo validation_errors(); ?>
 					<?php if(isset($error)){print $error;}?>
				</div>
				<?php echo form_open_multipart('mahasiswa/file_data_lap_akhir');?>

  				<div class="form-group">
    				<label for="namalengkap">Nama Lengkap:</label>
    				<input type="text" class="form-control" name="namalengkap" value="<?= set_value('namalengkap'); ?>" id="namalengkap">
  				</div>  
  				<div class="form-group">
    				<label for="nim">NIM:</label>
    				<input type="text" class="form-control" name="nim" value="<?= set_value('nim'); ?>" id="nim">
  				</div>  								
  				<div class="form-group">
    				<label for="judul">Judul Skripsi:</label>
    				<textarea name="judul" class="form-control" id="judul"><?= set_value('judul'); ?></textarea>
  				</div>
  				<div class="form-group">
                <label class="control-label col-xs-3">Pembimbing 1</label>
                <div class="col-xs-9">
                <select name="pembimbing1" id="pembimbing1" class="form-control" style="width:490px;" required>
                		<option value="">--Pilih Pembimbing 1--</option>
                    	<option value="Prayudi, MA., PhD">Prayudi, MA., PhD</option>
                        <option value="Dr. Christina Rochayanti, M.Si">Dr. Christina Rochayanti, M.Si</option>
                        <option value="Dr. Puji Lestari S, M.Si">Dr. Puji Lestari S, M.Si</option>
                        <option value="Dra. Siti Fatonah, M.Si">Dra. Siti Fatonah, M.Si</option>
                        <option value="Dewi Noviyanti, M.Si">Dewi Noviyanti, M.Si</option>
                        <option value="Yenni Sri Utami, M.Si">Yenni Sri Utami, M.Si</option>
                        <option value="M. Edy Susilo, M.Si">M. Edy Susilo, M.Si</option>
                        <option value="Dr. Basuki Agus S., M.Si">Dr. Basuki Agus S., M.Si</option>
                        <option value="Kartika Ayu A, M.Ds">Kartika Ayu A, M.Ds</option>
                        <option value="Sigit Tri Pambudi, M.Si">Sigit Tri Pambudi, M.Si</option>
                        <option value="Isbandi Sutrisno , M.Si">Isbandi Sutrisno , M.Si</option>
                        <option value="Basuki,S.Sos.,M.Si. ">Basuki,S.Sos.,M.Si. </option>
                        <option value="Retno Hendariningrum, SIP., M.Si.">Retno Hendariningrum, SIP., M.Si.</option>
                        <option value="Reni Tri Wardani,SIP., MA ">Reni Tri Wardani,SIP., MA </option>
                        <option value="Senja Yustitia, M.Si">Senja Yustitia, M.Si</option>
                        <option value="Dr. Subhan Afifi, M.Si">Dr. Subhan Afifi, M.Si</option>
                        <option value="Kurnia Arofah, M.Si">Kurnia Arofah, M.Si</option>
                        <option value="Drs. Arif Wibawa, M.Si">Drs. Arif Wibawa, M.Si</option>
                        <option value="Dra.RR Susilastuti DN,M.Si">Dra.RR Susilastuti DN,M.Si</option>
                        <option value="Agung Prabowo,SIP.,M.Si. ">Agung Prabowo,SIP.,M.Si. </option>
                        <option value="Ida Wiendijarti, M.Si">Ida Wiendijarti, M.Si</option>
                        <option value="Panji Dwi A, M.I.Kom">Panji Dwi A, M.I.Kom</option>
                        <option value="Edwi Arif Sosiawan,SIP.,M.Si">Edwi Arif Sosiawan,SIP.,M.Si</option>
                </select>
                <span class="help-block"></span>
            	</div>
        		</div>
  				<div class="form-group">
                <label class="control-label col-xs-3">Pembimbing 2</label>
                <div class="col-xs-9">
                <select name="pembimbing2" id="pembimbing2" class="form-control" style="width:490px;" required>
                		<option value="">--Pilih Pembimbing 2--</option>
                    	<option value="Prayudi, MA., PhD">Prayudi, MA., PhD</option>
                        <option value="Dr. Christina Rochayanti, M.Si">Dr. Christina Rochayanti, M.Si</option>
                        <option value="Dr. Puji Lestari S, M.Si">Dr. Puji Lestari S, M.Si</option>
                        <option value="Dra. Siti Fatonah, M.Si">Dra. Siti Fatonah, M.Si</option>
                        <option value="Dewi Noviyanti, M.Si">Dewi Noviyanti, M.Si</option>
                        <option value="Yenni Sri Utami, M.Si">Yenni Sri Utami, M.Si</option>
                        <option value="M. Edy Susilo, M.Si">M. Edy Susilo, M.Si</option>
                        <option value="Dr. Basuki Agus S., M.Si">Dr. Basuki Agus S., M.Si</option>
                        <option value="Kartika Ayu A, M.Ds">Kartika Ayu A, M.Ds</option>
                        <option value="Sigit Tri Pambudi, M.Si">Sigit Tri Pambudi, M.Si</option>
                        <option value="Isbandi Sutrisno , M.Si">Isbandi Sutrisno , M.Si</option>
                        <option value="Basuki,S.Sos.,M.Si. ">Basuki,S.Sos.,M.Si. </option>
                        <option value="Retno Hendariningrum, SIP., M.Si.">Retno Hendariningrum, SIP., M.Si.</option>
                        <option value="Reni Tri Wardani,SIP., MA ">Reni Tri Wardani,SIP., MA </option>
                        <option value="Senja Yustitia, M.Si">Senja Yustitia, M.Si</option>
                        <option value="Dr. Subhan Afifi, M.Si">Dr. Subhan Afifi, M.Si</option>
                        <option value="Kurnia Arofah, M.Si">Kurnia Arofah, M.Si</option>
                        <option value="Drs. Arif Wibawa, M.Si">Drs. Arif Wibawa, M.Si</option>
                        <option value="Dra.RR Susilastuti DN,M.Si">Dra.RR Susilastuti DN,M.Si</option>
                        <option value="Agung Prabowo,SIP.,M.Si. ">Agung Prabowo,SIP.,M.Si. </option>
                        <option value="Ida Wiendijarti, M.Si">Ida Wiendijarti, M.Si</option>
                        <option value="Panji Dwi A, M.I.Kom">Panji Dwi A, M.I.Kom</option>
                        <option value="Edwi Arif Sosiawan,SIP.,M.Si">Edwi Arif Sosiawan,SIP.,M.Si</option>
                </select>
                <span class="help-block"></span>
            	</div>
        		</div> 				
  				<div class="form-group">
    				<label for="lap_akhir">Laporan Akhir:</label>
    				<input type="file" name="lap_akhir" class="form-control"  id="lap_akhir">
  				</div>
  				<div class="form-group">
    				<label for="nilai">Nilai: (Masukkan Nilai A/B/C/D/E - Kapital)</label>
    				<input type="text" class="form-control" name="nilai" value="<?= set_value('nilai'); ?>" id="nilai">
  				</div>  				
  				<center><button type="submit" class="btn btn-success">Submit</button>
  				<a href="<?=base_url('main/form');?>" class="btn btn-warning">Reset</a></center> <br>
				</form> 
				</div></div></div></div>
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
