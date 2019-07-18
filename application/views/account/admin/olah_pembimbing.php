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
  <link href="<?php echo base_url() ?>assets/css/loadingss.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/loading-btn.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('main/dashboard'); ?>">Ilmu Komunikasi UPN "Veteran" Yogyakarta</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('main/dashboard'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a></li>
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mahasiswa">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMahasiswa" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMahasiswa">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          	<a class="nav-link" href="<?php echo base_url('olahdata/olah_data_pembimbing'); ?>">
            	<i class="fa fa-fw fa fa-check-circle-o"></i>
            	<span class="nav-link-text">Data Mahasiswa</span>
          	</a>
          	</li>
        	<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          	<a class="nav-link" href="<?php echo base_url('main/olah_data'); ?>">
            	<i class="fa fa-fw fa fas fa-spinner fa-spin"></i>
            	<span class="nav-link-text">Olah Proposal</span>
          	</a> 
        	</li> -->
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
          	<a class="nav-link" href="<?php echo base_url('pendadaran/index'); ?>">
            	<i class="fa fa-fw fa fa-check-circle-o"></i>
            	<span class="nav-link-text">Data Pendadaran</span>
          	</a> 
      		</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
          	<a class="nav-link" href="<?php echo base_url('laporan_akhir/index'); ?>">
            	<i class="fa fa-fw fa fa-check-circle-o"></i>
            	<span class="nav-link-text">Data Laporan Akhir</span>
          	</a> 
      		</li>
          </ul>
        </li>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDosen" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Dosen</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDosen">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		<a class="nav-link" href="<?php echo base_url('dosen/index') ?>">
            	<i class="fa fa-fw fa fa-minus-circle"></i>
            	<span class="nav-link-text">Data Dosen</span>
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
            <a class="nav-link" href="<?php echo base_url('pembimbing/data_pembimbing_1'); ?>">
              <i class="fa fa-fw fa fa-minus-circle"></i>
              <span class="nav-link-text">Data Pembimbing I</span>
              </a> 
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
            <a class="nav-link" href="<?php echo base_url('pembimbing/data_pembimbing_2'); ?>">
              <i class="fa fa-fw fa fa-minus-circle"></i>
              <span class="nav-link-text">Data Pembimbing II</span>
              </a> 
          </li>
          </ul>
        </li>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs""></i>
            <span class="nav-link-text">Sistem</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Training">
         		 <a class="nav-link" href="<?php echo base_url('olahdata/data_training') ?>">
            		<i class="fa fa-fw fas fa-cog fa-spin"></i>
            		<span class="nav-link-text">Data Training</span> <!-- dropdown sidebar -->
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		 <a class="nav-link" href="<?php echo base_url('olahdata/frekuensi_kata') ?>">
            		<i class="fa fa-fw fas fa-cog fa-spin"></i>
            		<span class="nav-link-text">Frekuensi Kata</span> <!-- dropdown sidebar -->
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		 <a class="nav-link" href="<?php echo base_url('metode_saw/konsentrasi') ?>">
            		<i class="fa fa-fw fas fa-cog fa-spin"></i>
            		<span class="nav-link-text">Kriteria Konsentrasi</span> <!-- dropdown sidebar -->
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		 <a class="nav-link" href="<?php echo base_url('metode_saw/kompetensi') ?>">
            		<i class="fa fa-fw fas fa-cog fa-spin"></i>
            		<span class="nav-link-text">Kriteria Kompetensi</span> <!-- dropdown sidebar -->
          		</a>
        	</li>
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dosen">
         		 <a class="nav-link" href="<?php echo base_url('metode_saw/kriteria_lain') ?>">
            		<i class="fa fa-fw fas fa-cog fa-spin"></i>
            		<span class="nav-link-text">Kriteria Lain</span> <!-- dropdown sidebar -->
          		</a>
        	</li>
          </ul>
        </li>
        </li>
      	
      	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
          <a class="nav-link" href="<?php echo base_url('pengumuman/index'); ?>">
            <i class="fa fa-fw fa fa-newspaper-o"></i>
            <span class="nav-link-text">Pengumuman</span>
          </a> 
      	</li>
      	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Login">
          <a class="nav-link" href="<?php echo base_url('main/userlogin'); ?>">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">User Login</span>
          </a> 
      	</li>

      </ul> 
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Mahasiswa</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Data Mahasiswa</a>
        </li>
        <li class="breadcrumb-item active">Olah Pembimbing</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> Data Mahasiswa</div>
        <div class="card-body">
          <div class="table-responsive">
            
          	<form action="/myskripsi/olahdata/hasil_pembimbing/<?php echo $data_proposal->id_mhs ?>" method="post" enctype="multipart/form-data" style="margin-top:0px;">
          	<div class="form-group">

			    <label class="control-label col-xs-3"><b>NIM</b></label>
		        <div class="col-xs-9">
			    <input type="text" name="nim" value="<?php echo $data_proposal->nim; ?>" class="form-control" style="width:460px;" readonly>
			    <input type="hidden" value="<?php echo $data_proposal->id_mhs ?>" name="id_mhs">
			</div></div>

			<div class="form-group">
			<label class="control-label col-xs-3"><b>Judul Proposal</b></label>
		        <div class="col-xs-9">
			    <input type="text" name="judul" value="<?php echo $data_proposal->judul; ?>" class="form-control" style="width:460px;" readonly>
			    <input type="hidden" value="<?php echo $data_proposal->id_mhs ?>" name="id_mhs">
			</div></div>

			<?php 
				if ($data_proposal->konsentrasi == "Advertising") {
					$grade = "1";
				} elseif ($data_proposal->konsentrasi == "Broadcasting") {
					$grade = "2";
				} elseif ($data_proposal->konsentrasi == "Jurnalistik") {
					$grade = "3";
				} elseif ($data_proposal->konsentrasi == "Public_Relation") {
					$grade = "4";
				} elseif ($data_proposal->konsentrasi == "") {
					$grade = "";
				}
			 ?>
			<div class="form-group">
                <label class="control-label col-xs-3"><b>Konsentrasi</b></label>
                <div class="col-xs-9">
                	<select name="bobot_konsentrasi" id="konsentrasi" class="form-control" style="width:460px;">
                        <option value="<?php echo $grade; ?>">--<?php echo $data_proposal->konsentrasi ?>--</option>
                        <option value="1">Advertising</option>
                        <option value="2">Broadcasting</option>
                        <option value="3">Jurnalistik</option>
                        <option value="4">Public Relation</option>
                    </select>
                    <span class="help-block"></span>
               	</div>
            </div>

            <div class="form-group">
			    <label class="control-label col-xs-3"><b>Kompetensi</b></label>
			        <div class="col-xs-9">
			            <select name="bobot_kompetensi" id="konsentrasi" class="form-control" style="width:460px;" required>
			                <option value="">--Pilih Kompetensi--</option>
			                <option value="1">CSR</option>
			                <option value="2">Strategi PR</option>
			                <option value="3">Komunikasi Pemasaran</option>
			                <option value="4">Komunikasi Organisasi</option>
			                <option value="5">Semiotika</option>
			                <option value="6">Branding</option>
			                <option value="7">Komunikasi Politik</option>
			                <option value="8">Media</option>
			                <option value="9">Komunikasi Budaya</option>
			                <option value="10">Radio, TV dan Film</option>
			            </select>
			                <span class="help-block"></span>
			        </div>
			</div>

			<div class="form-group">
                <label class="control-label col-xs-3"><b>Pembimbing 1</b></label>
                <div class="col-xs-9">
                <select name="pembimbing_1" id="pembimbing1" class="form-control" style="width:460px;" readonly>
                	<option value="<?php echo $data_proposal->pembimbing_1 ?>">--<?php echo $data_proposal->pembimbing_1 ?>--</option>
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
                <label class="control-label col-xs-3"><b>Pembimbing 2</b></label>
                <div class="col-xs-9">
                <select name="pembimbing_2" id="pembimbing1" class="form-control" style="width:460px;" readonly>
                	<option value="<?php echo $data_proposal->pembimbing_2 ?>">--<?php echo $data_proposal->pembimbing_2 ?>--</option>
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

			<input class="btn btn-primary" style="display:block; margin:20px auto;" type="submit" value="PROSES" name="proses1" />
          </div></div>
        </div>
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
