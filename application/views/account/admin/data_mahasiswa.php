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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
          <a href="#">Dosen</a>
        </li>
        <li class="breadcrumb-item active">Data Pembimbing</li>
      </ol>
      
      <!-- Isi Konten -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
		<div class="container">
			<!-- Page Heading -->
		            <h3>Data
		                <b>Pembimbing</b></h3>
						<div class="form-action text-left">
		                	<a href="#" class="btn btn-sm btn-success" data-toggle="modal"data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Pembimbing</a>&nbsp;&nbsp;&nbsp;
		                	<a href="#" class="btn btn-sm btn-success" onclick="Reload()"><span class="fa fa-refresh"></span> Reload</a> 
		                </div><br>
		            </h1>
		            <div class="row">
		        </div>
		    <div class="table-responsive">
			<div class="row">
				<div id="reload">
				<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="mydata">
					<thead>
						<tr>
							<th style="text-align: center;">NIM</th>
							<th style="text-align: center;">Judul Proposal</th>
							<th style="text-align: center;">Konsentrasi</th>
							<th style="text-align: center;">Pembimbing 1</th>
							<th style="text-align: center;">Pembimbing 2</th>
							<th style="text-align: center;">Proposal</th>
							<th style="text-align: center;">Upload</th>
							<th style="width:70px; text-align: center;">Aksi</th>
						</tr>
					</thead>
					<tbody id="show_data">
					</tbody>
				</table>
				</div>
			</div>
		</div>

				<!-- MODAL ADD -->
		        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		            <div class="modal-dialog">
		            <div class="modal-content">
		            <div class="modal-header">
		                <h3 class="modal-title" id="myModalLabel">Tambah Pembimbing</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >NIM</label>
		                        <div class="col-xs-9">
		                            <input name="nim" id="nim" class="form-control" type="text" placeholder="NIM" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Judul Proposal</label>
		                        <div class="col-xs-9">
		                            <input name="judul" id="judul" class="form-control" type="text" placeholder="Judul" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
				                <label class="control-label col-xs-3"><b>Konsentrasi</b></label>
				                <div class="col-xs-9">
				                	<select name="konsentrasi" id="konsentrasi" class="form-control" style="width:460px;" required>
				                        <option value="">--Pilih Konsentrasi--</option>
				                        <option value="Advertising">Advertising</option>
				                        <option value="Broadcasting">Broadcasting</option>
				                        <option value="Jurnalistik">Jurnalistik</option>
				                        <option value="Public Relation">Public Relation</option>
				                    </select>
				                    <span class="help-block"></span>
				               	</div>
				            </div>

                        	<div class="form-group">
				                <label class="control-label col-xs-3"><b>Pembimbing 1</b></label>
				                <div class="col-xs-9">
				                <select name="pembimbing_1" id="pembimbing_1" class="form-control" style="width:460px;" required>
				                	<option value="">--Pilih Pembimbing 1--</option>
				                    <option value="1">Prayudi, MA., PhD</option>
				                    <option value="2">Dr. Christina Rochayanti, M.Si</option>
				                    <option value="3">Dr. Puji Lestari S, M.Si</option>
				                    <option value="4">Dra. Siti Fatonah, M.Si</option>
				                    <option value="5">Dewi Noviyanti, M.Si</option>
				                    <option value="6">Yenni Sri Utami, M.Si</option>
				                    <option value="7">M. Edy Susilo, M.Si</option>
				                    <option value="8">Dr. Basuki Agus S., M.Si</option>
				                    <option value="9">Kartika Ayu A, M.Ds</option>
				                    <option value="10">Sigit Tri Pambudi, M.Si</option>
				                    <option value="11">Isbandi Sutrisno , M.Si</option>
				                    <option value="12">Basuki,S.Sos.,M.Si. </option>
				                    <option value="13">Retno Hendariningrum, SIP., M.Si.</option>
				                    <option value="14">Reni Tri Wardani,SIP., MA </option>
				                    <option value="15">Senja Yustitia, M.Si</option>
				                    <option value="16">Dr. Subhan Afifi, M.Si</option>
				                    <option value="17">Kurnia Arofah, M.Si</option>
				                    <option value="18">Drs. Arif Wibawa, M.Si</option>
				                    <option value="19">Dra.RR Susilastuti DN,M.Si</option>
				                    <option value="20">Agung Prabowo,SIP.,M.Si. </option>
				                    <option value="21">Ida Wiendijarti, M.Si</option>
				                    <option value="22">Panji Dwi A, M.I.Kom</option>
				                    <option value="23">Edwi Arif Sosiawan,SIP.,M.Si</option>
				                </select>
				                <span class="help-block"></span>
				            	</div>
				        	</div>

							<div class="form-group">
				                <label class="control-label col-xs-3"><b>Pembimbing 2</b></label>
				                <div class="col-xs-9">
				                <select name="pembimbing_2" id="pembimbing_2" class="form-control" style="width:460px;" required>
				                	<option value="">--Pilih Pembimbing 2--</option>
				                    <option value="1">Prayudi, MA., PhD</option>
				                    <option value="2">Dr. Christina Rochayanti, M.Si</option>
				                    <option value="3">Dr. Puji Lestari S, M.Si</option>
				                    <option value="4">Dra. Siti Fatonah, M.Si</option>
				                    <option value="5">Dewi Noviyanti, M.Si</option>
				                    <option value="6">Yenni Sri Utami, M.Si</option>
				                    <option value="7">M. Edy Susilo, M.Si</option>
				                    <option value="8">Dr. Basuki Agus S., M.Si</option>
				                    <option value="9">Kartika Ayu A, M.Ds</option>
				                    <option value="10">Sigit Tri Pambudi, M.Si</option>
				                    <option value="11">Isbandi Sutrisno , M.Si</option>
				                    <option value="12">Basuki,S.Sos.,M.Si. </option>
				                    <option value="13">Retno Hendariningrum, SIP., M.Si.</option>
				                    <option value="14">Reni Tri Wardani,SIP., MA </option>
				                    <option value="15">Senja Yustitia, M.Si</option>
				                    <option value="16">Dr. Subhan Afifi, M.Si</option>
				                    <option value="17">Kurnia Arofah, M.Si</option>
				                    <option value="18">Drs. Arif Wibawa, M.Si</option>
				                    <option value="19">Dra.RR Susilastuti DN,M.Si</option>
				                    <option value="20">Agung Prabowo,SIP.,M.Si. </option>
				                    <option value="21">Ida Wiendijarti, M.Si</option>
				                    <option value="22">Panji Dwi A, M.I.Kom</option>
				                    <option value="23">Edwi Arif Sosiawan,SIP.,M.Si</option>
				                </select>
				                <span class="help-block"></span>
				            	</div>
				        	</div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Proposal</label>
		                        <div class="col-xs-9">
		                            <input name="proposal" id="proposal" class="form-control" type="text" placeholder="Proposal" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Upload</label>
		                        <div class="col-xs-9">
		                            <input name="upload" id="upload" class="form-control" type="text" placeholder="Upload" style="width:460px;" required>
		                        </div>
		                    </div>

		                </div>

		                <div class="modal-footer">
		                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
		                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
		                </div>
		            </form>
		            </div>
		            </div>
		        </div>
		        <!--END MODAL ADD-->

		        <!-- MODAL EDIT -->
		        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		            <div class="modal-dialog">
		            <div class="modal-content">
		            <div class="modal-header">
		                <h3 class="modal-title" id="myModalLabel">Edit Mahasiswa</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                     <div class="form-group">
		                        <label class="control-label col-xs-3" >NIM</label>
		                        <div class="col-xs-9">
		                            <input name="nim_edit" id="nim2" class="form-control" type="text" placeholder="NIM" style="width:460px;" readonly>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Judul Proposal</label>
		                        <div class="col-xs-9">
		                            <input name="judul_edit" id="judul2" class="form-control" type="text" placeholder="Judul" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
				                <label class="control-label col-xs-3">Konsentrasi</label>
				                <div class="col-xs-9">
				                	<select name="konsentrasi_edit" id="konsentrasi2" class="form-control" style="width:460px;" required>
				                        <option value="">--Pilih Konsentrasi--</option>
				                        <option value="Advertising">Advertising</option>
				                        <option value="Broadcasting">Broadcasting</option>
				                        <option value="Jurnalistik">Jurnalistik</option>
				                        <option value="Public Relation">Public Relation</option>
				                    </select>
				                    <span class="help-block"></span>
				               	</div>
				            </div>

                        	<div class="form-group">
				                <label class="control-label col-xs-3">Pembimbing 1</label>
				                <div class="col-xs-9">
				                <select name="pembimbing_1_edit" id="pembimbing_1_2" class="form-control" style="width:460px;" required>
				                	<option value="">--Pilih Pembimbing 1--</option>
				                    <option value="1">Prayudi, MA., PhD</option>
				                    <option value="2">Dr. Christina Rochayanti, M.Si</option>
				                    <option value="3">Dr. Puji Lestari S, M.Si</option>
				                    <option value="4">Dra. Siti Fatonah, M.Si</option>
				                    <option value="5">Dewi Noviyanti, M.Si</option>
				                    <option value="6">Yenni Sri Utami, M.Si</option>
				                    <option value="7">M. Edy Susilo, M.Si</option>
				                    <option value="8">Dr. Basuki Agus S., M.Si</option>
				                    <option value="9">Kartika Ayu A, M.Ds</option>
				                    <option value="10">Sigit Tri Pambudi, M.Si</option>
				                    <option value="11">Isbandi Sutrisno , M.Si</option>
				                    <option value="12">Basuki,S.Sos.,M.Si. </option>
				                    <option value="13">Retno Hendariningrum, SIP., M.Si.</option>
				                    <option value="14">Reni Tri Wardani,SIP., MA </option>
				                    <option value="15">Senja Yustitia, M.Si</option>
				                    <option value="16">Dr. Subhan Afifi, M.Si</option>
				                    <option value="17">Kurnia Arofah, M.Si</option>
				                    <option value="18">Drs. Arif Wibawa, M.Si</option>
				                    <option value="19">Dra.RR Susilastuti DN,M.Si</option>
				                    <option value="20">Agung Prabowo,SIP.,M.Si. </option>
				                    <option value="21">Ida Wiendijarti, M.Si</option>
				                    <option value="22">Panji Dwi A, M.I.Kom</option>
				                    <option value="23">Edwi Arif Sosiawan,SIP.,M.Si</option>
				                </select>
				                <span class="help-block"></span>
				            	</div>
				        	</div>

							<div class="form-group">
				                <label class="control-label col-xs-3">Pembimbing 2</label>
				                <div class="col-xs-9">
				                <select name="pembimbing_2_edit" id="pembimbing_2_2" class="form-control" style="width:460px;" required>
				                	<option value="">--Pilih Pembimbing 2--</option>
				                    <option value="1">Prayudi, MA., PhD</option>
				                    <option value="2">Dr. Christina Rochayanti, M.Si</option>
				                    <option value="3">Dr. Puji Lestari S, M.Si</option>
				                    <option value="4">Dra. Siti Fatonah, M.Si</option>
				                    <option value="5">Dewi Noviyanti, M.Si</option>
				                    <option value="6">Yenni Sri Utami, M.Si</option>
				                    <option value="7">M. Edy Susilo, M.Si</option>
				                    <option value="8">Dr. Basuki Agus S., M.Si</option>
				                    <option value="9">Kartika Ayu A, M.Ds</option>
				                    <option value="10">Sigit Tri Pambudi, M.Si</option>
				                    <option value="11">Isbandi Sutrisno , M.Si</option>
				                    <option value="12">Basuki,S.Sos.,M.Si. </option>
				                    <option value="13">Retno Hendariningrum, SIP., M.Si.</option>
				                    <option value="14">Reni Tri Wardani,SIP., MA </option>
				                    <option value="15">Senja Yustitia, M.Si</option>
				                    <option value="16">Dr. Subhan Afifi, M.Si</option>
				                    <option value="17">Kurnia Arofah, M.Si</option>
				                    <option value="18">Drs. Arif Wibawa, M.Si</option>
				                    <option value="19">Dra.RR Susilastuti DN,M.Si</option>
				                    <option value="20">Agung Prabowo,SIP.,M.Si. </option>
				                    <option value="21">Ida Wiendijarti, M.Si</option>
				                    <option value="22">Panji Dwi A, M.I.Kom</option>
				                    <option value="23">Edwi Arif Sosiawan,SIP.,M.Si</option>
				                </select>
				                <span class="help-block"></span>
				            	</div>
				        	</div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Proposal</label>
		                        <div class="col-xs-9">
		                            <input name="proposal_edit" id="proposal2" class="form-control" type="text" placeholder="Proposal" style="width:460px;" readonly>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Upload</label>
		                        <div class="col-xs-9">
		                            <input name="upload_edit" id="upload2" class="form-control" type="text" placeholder="Upload" style="width:460px;" readonly>
		                        </div>
		                    </div>

		                </div>

		                <div class="modal-footer">
		                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
		                    <button class="btn btn-info" id="btn_update">Update</button>
		                </div>
		            </form>
		            </div>
		            </div>
		        </div>
		        <!--END MODAL EDIT-->

		        <!--MODAL HAPUS-->
		        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		            <div class="modal-dialog" role="document">
		                <div class="modal-content">
		                    <form class="form-horizontal">
		                    <div class="modal-body">     
		                        <input type="hidden" name="kode" id="textkode" value="">
		                        <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Data Mahasiswa ini?</p></div>
		                    </div>
		                    <div class="modal-footer">
		                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
		                    </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		        <!--END MODAL HAPUS-->

		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				tampil_data_mahasiswa();	//pemanggilan fungsi tampil barang.
				
						$('#mydata').dataTable();
						 
						//fungsi tampil barang
						function tampil_data_mahasiswa(){
				    	$.ajax({
				        type  : 'ajax',
				        url   : '<?php echo base_url()?>olahdata/data_mahasiswa',
				        async : false,
				        dataType : 'json',
				        success : function(data){
				            var html = '';
				            var i;
				            for(i=0; i<data.length; i++){
				                html += '<tr>'+
				                		'<td>'+data[i].nim+'</td>'+
				                        '<td>'+data[i].judul+'</td>'+
				                        '<td>'+data[i].konsentrasi+'</td>'+
				                        '<td>'+data[i].pembimbing_1+'</td>'+
				                        '<td>'+data[i].pembimbing_2+'</td>'+
				                        '<td>'+data[i].proposal+'</td>'+
				                        '<td>'+data[i].upload+'</td>'+
				                        '<td style="text-align:right;">'+
		                                    '<a href="javascript:;" class="btn btn-info fa fa-pencil item_edit" data="'+data[i].nim+'"></a>'+' '+
		                                    '<a href="javascript:;" class="btn btn-danger fa fa-trash item_hapus" data="'+data[i].nim+'"></a>'+
		                                '</td>'+
				                        '</tr>';
				            }
				            $('#show_data').html(html);
				        }

				    });
				}

				//GET UPDATE
				$('#show_data').on('click','.item_edit',function(){
		            var nim=$(this).attr('data');
		            $.ajax({
		                type : "GET",
		                url  : "<?php echo base_url('olahdata/get_mahasiswa')?>",
		                dataType : "JSON",
		                data : {nim:nim},
		                success: function(data){
		                	$.each(data,function(nim, judul, konsentrasi, pembimbing_1, pembimbing_2, proposal, upload){
		                    	$('#ModalaEdit').modal('show');
		                    	$('[name="nim_edit"]').val(data.nim);
		            			$('[name="judul_edit"]').val(data.judul);
		            			$('[name="konsentrasi_edit"]').val(data.konsentrasi);
		            			$('[name="pembimbing_1_edit"]').val(data.pembimbing_1);
		            			$('[name="pembimbing_2_edit"]').val(data.pembimbing_2);
		            			$('[name="proposal_edit"]').val(data.proposal);
		            			$('[name="upload_edit"]').val(data.upload);
		            		});
		                }
		            });
		            return false;
		        });


				//GET HAPUS
				$('#show_data').on('click','.item_hapus',function(){
		            var id_mhs=$(this).attr('data');
		            $('#ModalHapus').modal('show');
		            $('[name="kode"]').val(id_mhs);
		        });

				//Simpan Barang
				$('#btn_simpan').on('click',function(){
		            var id_mhs=$('#id_mhs').val();
		            var nim=$('#nim').val();
		            var judul=$('#judul').val();
		            var konsentrasi=$('#konsentrasi').val();
		            var pembimbing_1=$('#pembimbing_1').val();
		            var pembimbing_2=$('#pembimbing_2').val();
		            var proposal=$('#proposal').val();
		            var upload=$('#upload').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('olahdata/simpan_mahasiswa')?>",
		                dataType : "JSON",
		                data : {id_mhs:id_mhs, nim:nim, judul:judul, konsentrasi:konsentrasi, pembimbing_1:pembimbing_1, pembimbing_2:pembimbing_2, proposal:proposal, upload:upload},
		                success: function(data){
		                    $('[name="id_mhs"]').val("");
		                    $('[name="nim"]').val("");
		                    $('[name="judul"]').val("");
		                    $('[name="proposal"]').val("");
		                    $('[name="pembimbing_1"]').val("");
		                    $('[name="pembimbing_2"]').val("");
		                    $('[name="proposal"]').val("");
		                    $('[name="upload"]').val("");
		                    $('#ModalaAdd').modal('hide');
		                    tampil_data_mahasiswa();
		                }
		            });
		            return false;
		        });

		        //Update Barang
				$('#btn_update').on('click',function(){
		            var nim=$('#nim2').val();
		            var judul=$('#judul2').val();
		            var konsentrasi=$('#konsentrasi2').val();
		            var pembimbing_1=$('#pembimbing_1_2').val();
		            var pembimbing_2=$('#pembimbing_2_2').val();
		            var proposal=$('#proposal2').val();
		            var upload=$('#upload2').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('olahdata/update_mahasiswa')?>",
		                dataType : "JSON",
		                data : {nim:nim , judul:judul, konsentrasi:konsentrasi, pembimbing_1:pembimbing_1, pembimbing_2:pembimbing_2, proposal:proposal, upload:upload},
		                success: function(data){
		                    $('[name="nim_edit"]').val("");
		                    $('[name="judul_edit"]').val("");
		                    $('[name="konsentrasi_edit"]').val("");
		                    $('[name="pembimbing_1_edit"]').val("");
		                    $('[name="pembimbing_2_edit"]').val("");
		                    $('[name="proposal_edit"]').val("");
		                    $('[name="upload_edit"]').val("");
		                    $('#ModalaEdit').modal('hide');
		                    tampil_data_mahasiswa();
		                }
		            });
		            return false;
		        });

		        //Hapus Barang
		        $('#btn_hapus').on('click',function(){
		            var kode=$('#textkode').val();
		            $.ajax({
		            type : "POST",
		            url  : "<?php echo base_url('olahdata/hapus_mahasiswa')?>",
		            dataType : "JSON",
		                    data : {kode: kode},
		                    success: function(data){
		                            $('#ModalHapus').modal('hide');
		                            tampil_data_mahasiswa();
		                    }
		                });
		                return false;
		            });

			});
			function Reload() {
			    location.reload();
			}
		</script>
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
    </script>
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
