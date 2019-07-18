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
          <a href="#">Sistem</a>
        </li>
        <li class="breadcrumb-item active">Kriteria Lain</li>
      </ol>
      
      <!-- Isi Konten -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
		<div class="container">
			<!-- Page Heading -->
		            <h3>Bobot 
		                <b>Kriteria</b></h3>
						<div class="form-action text-left">
		                	<a href="#" class="btn btn-sm btn-success" data-toggle="modal"data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Kriteria Lain</a>&nbsp;&nbsp;&nbsp;
		                	<a href="#" class="btn btn-sm btn-success" onclick="Reload()"><span class="fa fa-refresh"></span> Reload</a> 
		                </div><br>
		            </h3>
		            <div class="row">
		        </div>
		    <div class="table-responsive">
			<div class="row">
				<div id="reload">
				<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="mydata1">
					<thead>
						<tr>
							<th style="text-align: center;" hidden>NIP</th>
							<th style="text-align: center;">Nama Dosen</th>
							<th style="text-align: center;">Jabatan Fungsional P1</th>
							<th style="text-align: center;">Jabatan Fungsional P2</th>
							<th style="text-align: center;">Kuota P1</th>
							<th style="text-align: center;">Kuota P2</th>
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
		                <h3 class="modal-title" id="myModalLabel">Tambah Konsentrasi</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >NIP</label>
		                        <div class="col-xs-9">
		                            <input name="nip" id="nip" class="form-control" type="text" placeholder="NIP" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Nama Dosen</label>
		                        <div class="col-xs-9">
		                            <input name="nama_dosen" id="nama_dosen" class="form-control" type="text" placeholder="Nama Dosen" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Jabatan Fungsional P1</label>
		                        <div class="col-xs-9">
		                        	<select name="jabfung_1" id="jabfung_1" class="form-control" style="width:460px;" required>
	                                    <option value="1">Guru Besar</option>
	                                    <option value="0.75">Lektor Kepala</option>
	                                    <option value="0.5">Lektor</option>
	                                    <option value="0.25">Asisten Ahli</option>
	                                    <option value="0">Tenaga Pengajar</option>
                                	</select>
                                <span class="help-block"></span>
		                    </div>
		                    </div>

                        	<div class="form-group">
		                        <label class="control-label col-xs-3" >Jabatan Fungsional P2</label>
		                        <div class="col-xs-9">
			                    	<select name="jabfung_2" id="jabfung_2" class="form-control" style="width:460px;" required>
		                                <option value="1">Asisten Ahli</option>
		                                <option value="0.75">Lektor</option>
		                                <option value="0.5">Lektor  Kepala</option>
		                                <option value="0.25">Guru Besar</option>
		                                <option value="0">Tenaga Pengajar</option>
	                            	</select>
	                            <span class="help-block"></span>
		                    </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kuota P1</label>
		                        <div class="col-xs-9">
		                        	<select name="kuota_1" id="kuota_1" class="form-control" style="width:460px;" required>
		                                <option value="0.25">0-10</option>
		                                <option value="0.5">11-20</option>
		                                <option value="0.75">21-30</option>
		                                <option value="1">31-40</option>
		                                <option value="0">41-50</option>
	                            	</select>
	                            <span class="help-block"></span>
		                    </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kuota P2</label>
		                        <div class="col-xs-9">
		                        	<select name="kuota_2" id="kuota_2" class="form-control" style="width:460px;" required>
		                                <option value="1">0-10</option>
		                                <option value="0.75">11-20</option>
		                                <option value="0.5">21-30</option>
		                                <option value="0.25">31-40</option>
		                                <option value="0">41-50</option>
	                            	</select>
	                            <span class="help-block"></span>
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
		                <h3 class="modal-title" id="myModalLabel">Edit Konsentrasi</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >NIP</label>
		                        <div class="col-xs-9">
		                            <input name="nip_edit" id="nip2" class="form-control" type="text" placeholder="NIP" style="width:460px;" readonly>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Nama Dosen</label>
		                        <div class="col-xs-9">
		                            <input name="nama_dosen_edit" id="nama_dosen2" class="form-control" type="text" placeholder="Nama Dosen" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Jabatan Fungsional P1</label>
		                        <div class="col-xs-9">
		                        	<select name="jabfung_1_edit" id="jabfung_1_2" class="form-control" style="width:460px;" required>
	                                    <option value="1">Guru Besar</option>
	                                    <option value="0.75">Lektor Kepala</option>
	                                    <option value="0.5">Lektor</option>
	                                    <option value="0.25">Asisten Ahli</option>
	                                    <option value="0">Tenaga Pengajar</option>
                                	</select>
                                <span class="help-block"></span>
		                    </div>
		                    </div>

                        	<div class="form-group">
		                        <label class="control-label col-xs-3" >Jabatan Fungsional P2</label>
		                        <div class="col-xs-9">
			                    	<select name="jabfung_2_edit" id="jabfung_2_2" class="form-control" style="width:460px;" required>
		                                <option value="1">Asisten Ahli</option>
		                                <option value="0.75">Lektor</option>
		                                <option value="0.5">Lektor  Kepala</option>
		                                <option value="0.25">Guru Besar</option>
		                                <option value="0">Tenaga Pengajar</option>
	                            	</select>
	                            <span class="help-block"></span>
		                    </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kuota P1</label>
		                        <div class="col-xs-9">
		                        	<select name="kuota_1_edit" id="kuota_1_2" class="form-control" style="width:460px;" required>
		                                <option value="0.25">0-10</option>
		                                <option value="0.5">11-20</option>
		                                <option value="0.75">21-30</option>
		                                <option value="1">31-40</option>
		                                <option value="0">41-50</option>
	                            	</select>
	                            <span class="help-block"></span>
		                    </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kuota P2</label>
		                        <div class="col-xs-9">
		                        	<select name="kuota_2_edit" id="kuota_2_2" class="form-control" style="width:460px;" required>
		                                <option value="1">0-10</option>
		                                <option value="0.75">11-20</option>
		                                <option value="0.5">21-30</option>
		                                <option value="0.25">31-40</option>
		                                <option value="0">41-50</option>
	                            	</select>
	                            <span class="help-block"></span>
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
		                        <input type="hidden" name="kode1" id="textkode1" value="">
		                        <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Data Konsentrasi ini?</p></div>
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
				tampil_data_kriteria();	//pemanggilan fungsi tampil barang.
				
						$('#mydata1').dataTable();
						 
						//fungsi tampil barang
						function tampil_data_kriteria(){
				    	$.ajax({
				        type  : 'ajax',
				        url   : '<?php echo base_url()?>metode_saw/data_kriteria',
				        async : false,
				        dataType : 'json',
				        success : function(data){
				            var html = '';
				            var i;
				            for(i=0; i<data.length; i++){
				                html += '<tr>'+
				                		'<td hidden>'+data[i].nip+'</td>'+
				                        '<td>'+data[i].nama_dosen+'</td>'+
				                        '<td>'+data[i].jabfung_1+'</td>'+
				                        '<td>'+data[i].jabfung_2+'</td>'+
				                        '<td>'+data[i].kuota_1+'</td>'+
				                        '<td>'+data[i].kuota_2+'</td>'+
				                        '<td style="text-align:right;">'+
		                                    '<a href="javascript:;" class="btn btn-info fa fa-pencil item_edit" title="Edit" data-toggle="tooltip" data="'+data[i].nip+'"></a>'+' '+
		                                    '<a href="javascript:;" class="btn btn-danger fa fa-trash item_hapus" title="Delete" data-toggle="tooltip" data="'+data[i].nip+'"></a>'+
		                                '</td>'+
				                        '</tr>';
				            }
				            $('#show_data').html(html);
				        }

				    });
				}

				//GET UPDATE
				$('#show_data').on('click','.item_edit',function(){
		            var id_kriteria=$(this).attr('data');
		            $.ajax({
		                type : "GET",
		                url  : "<?php echo base_url('metode_saw/get_kriteria')?>",
		                dataType : "JSON",
		                data : {id_kriteria:id_kriteria},
		                success: function(data){
		                	$.each(data,function(nip, nama_dosen, jabfung_1, jabfung_2, kuota_1, kuota_2){
		                    	$('#ModalaEdit').modal('show');
		                    	$('[name="nip_edit"]').val(data.nip);
		            			$('[name="nama_dosen_edit"]').val(data.nama_dosen);
		            			$('[name="jabfung_1_edit"]').val(data.jabfung_1);
		            			$('[name="jabfung_2_edit"]').val(data.jabfung_2);
		            			$('[name="kuota_1_edit"]').val(data.kuota_1);
		            			$('[name="kuota_2_edit"]').val(data.kuota_2);
		            		});
		                }
		            });
		            return false;
		        });


				//GET HAPUS
				$('#show_data').on('click','.item_hapus',function(){
		            var id_kriteria=$(this).attr('data');
		            $('#ModalHapus').modal('show');
		            $('[name="kode1"]').val(id_kriteria);
		        });

				//Simpan Barang
				$('#btn_simpan').on('click',function(){
					var nip=$('#nip').val();
		            var nama_dosen=$('#nama_dosen').val();
		            var jabfung_1=$('#jabfung_1').val();
		            var jabfung_2=$('#jabfung_2').val();
		            var kuota_1=$('#kuota_1').val();
		            var kuota_2=$('#kuota_2').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('metode_saw/simpan_kriteria')?>",
		                dataType : "JSON",
		                data : {nip:nip, nama_dosen:nama_dosen, jabfung_1:jabfung_1, jabfung_2:jabfung_2, kuota_1:kuota_1, kuota_2:kuota_2},
		                success: function(data){
		                	$('[name="nip"]').val("");
		                    $('[name="nama_dosen"]').val("");
		                    $('[name="jabfung_1"]').val("");
		                    $('[name="jabfung_2"]').val("");
		                    $('[name="kuota_1"]').val("");
		                    $('[name="kuota_2"]').val("");
		                    $('#ModalaAdd').modal('hide');
		                    tampil_data_kriteria();
		                }
		            });
		            return false;
		        });

		        //Update Barang
				$('#btn_update').on('click',function(){
		            var nip=$('#nip2').val();
		            var nama_dosen=$('#nama_dosen2').val();
		            var jabfung_1=$('#jabfung_1_2').val();
		            var jabfung_2=$('#jabfung_2_2').val();
		            var kuota_1=$('#kuota_1_2').val();
		            var kuota_2=$('#kuota_2_2').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('metode_saw/update_kriteria')?>",
		                dataType : "JSON",
		                data : {nip:nip, nama_dosen:nama_dosen, jabfung_1:jabfung_1, jabfung_2:jabfung_2, kuota_1:kuota_1, kuota_2:kuota_2},
		                success: function(data){
		                    $('[name="nip_edit"]').val("");
		                    $('[name="nama_dosen_edit"]').val("");
		                    $('[name="jabfung_1_edit"]').val("");
		                    $('[name="jabfung_2_edit"]').val("");
		                    $('[name="kuota_1_edit"]').val("");
		                    $('[name="kuota_2_edit"]').val("");
		                    $('#ModalaEdit').modal('hide');
		                    tampil_data_kriteria();
		                }
		            });
		            return false;
		        });

		        //Hapus Barang
		        $('#btn_hapus').on('click',function(){
		            var kode1=$('#textkode1').val();
		            $.ajax({
		            type : "POST",
		            url  : "<?php echo base_url('metode_saw/hapus_kriteria')?>",
		            dataType : "JSON",
		                    data : {kode1: kode1},
		                    success: function(data){
		                            $('#ModalHapus').modal('hide');
		                            tampil_data_kriteria();
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
