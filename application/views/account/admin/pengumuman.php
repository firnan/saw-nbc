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
        <li class="breadcrumb-item active">Pengumuman</li>
      </ol>
      
      <!-- Isi Konten -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
		<div class="container">
			<!-- Page Heading -->
		            <h3>Data
		                <b>Pengumuman</b></h3>
						<div class="form-action text-left">
		                	<a href="#" class="btn btn-sm btn-success" data-toggle="modal"data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Pengumuman</a>&nbsp;&nbsp;&nbsp;
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
							<th style="text-align: center;">Kode Pengumuman</th>
							<th style="text-align: center;">Tanggal</th>
							<th style="text-align: center;">Judul</th>
							<th style="text-align: center;">Perihal</th>
							<th style="text-align: center;">Konten</th>
							<th style="text-align: center;">Status</th>
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
		                <h3 class="modal-title" id="myModalLabel">Tambah Pengumuman</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kode Pengumuman</label>
		                        <div class="col-xs-9">
		                            <input name="kode_news" id="kode_news" class="form-control" type="text" placeholder="Kode Pengumuman" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <!--<label class="control-label col-xs-3" >Tanggal</label>-->
		                        <div class="col-xs-9">
		                            <input name="tanggal" id="tanggal" class="form-control" type="text" placeholder="Tanggal" style="width:460px;" hidden>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Judul</label>
		                        <div class="col-xs-9">
		                            <input name="judul" id="judul" class="form-control" type="text" placeholder="Judul" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Perihal</label>
		                        <div class="col-xs-9">
		                            <input name="perihal" id="perihal" class="form-control" type="text" placeholder="Perihal" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Konten</label>
		                        <div class="col-xs-9">
		                            <input name="konten" id="konten" class="form-control" type="text" placeholder="Konten" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
                            <label class="control-label col-xs-3">Status</label>
                            <div class="col-xs-9">
                                <select name="status" id="status" class="form-control" style="width:460px;" required>
                                    <option value="">--Pilih Status--</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Publish">Publish</option>
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
		                <h3 class="modal-title" id="myModalLabel">Edit Pengumuman</h3>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		            </div>
		            <form class="form-horizontal">
		                <div class="modal-body">

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Kode Pengumuman</label>
		                        <div class="col-xs-9">
		                            <input name="kode_news_edit" id="kode_news2" class="form-control" type="text" placeholder="Kode Pengumuman" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Tanggal</label>
		                        <div class="col-xs-9">
		                            <input name="tanggal_edit" id="tanggal2" class="form-control" type="text" placeholder="Tanggal" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Judul</label>
		                        <div class="col-xs-9">
		                            <input name="judul_edit" id="judul2" class="form-control" type="text" placeholder="Judul" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Perihal</label>
		                        <div class="col-xs-9">
		                            <input name="perihal_edit" id="perihal2" class="form-control" type="text" placeholder="Perihal" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Konten</label>
		                        <div class="col-xs-9">
		                            <input name="konten_edit" id="konten2" class="form-control" type="text" placeholder="Konten" style="width:460px;" required>
		                        </div>
		                    </div>

		                    <div class="form-group">
                            <label class="control-label col-xs-3">Status</label>
                            <div class="col-xs-9">
                                <select name="status_edit" id="status2" class="form-control" style="width:460px;" required>
                                    <option value="">--Pilih Status--</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Publish">Publish</option>
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
		                        <input type="hidden" name="kode" id="textkode" value="">
		                        <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Data Pengumuman ini?</p></div>
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
				tampil_data_pengumuman();	//pemanggilan fungsi tampil barang.
				
						$('#mydata').dataTable();
						 
						//fungsi tampil barang
						function tampil_data_pengumuman(){
				    	$.ajax({
				        type  : 'ajax',
				        url   : '<?php echo base_url()?>pengumuman/data_pengumuman',
				        async : false,
				        dataType : 'json',
				        success : function(data){
				            var html = '';
				            var i;
				            for(i=0; i<data.length; i++){
				                html += '<tr>'+
				                		'<td>'+data[i].kode_news+'</td>'+
				                        '<td>'+data[i].tanggal+'</td>'+
				                        '<td>'+data[i].judul+'</td>'+
				                        '<td>'+data[i].perihal+'</td>'+
				                        '<td>'+data[i].konten+'</td>'+
				                        '<td>'+data[i].status+'</td>'+
				                        '<td style="text-align:right;">'+
		                                    '<a href="javascript:;" class="btn btn-info fa fa-pencil item_edit" title="Edit" data-toggle="tooltip" data="'+data[i].kode_news+'"></a>'+' '+
		                                    '<a href="javascript:;" class="btn btn-danger fa fa-trash item_hapus" title="Delete" data-toggle="tooltip" data="'+data[i].kode_news+'"></a>'+
		                                '</td>'+
				                        '</tr>';
				            }
				            $('#show_data').html(html);
				        }

				    });
				}

				//GET UPDATE
				$('#show_data').on('click','.item_edit',function(){
		            var kode_news=$(this).attr('data');
		            $.ajax({
		                type : "GET",
		                url  : "<?php echo base_url('pengumuman/get_pengumuman')?>",
		                dataType : "JSON",
		                data : {kode_news:kode_news},
		                success: function(data){
		                	$.each(data,function(kode_news, tanggal, judul, perihal, konten, status){
		                    	$('#ModalaEdit').modal('show');
		                    	$('[name="kode_news_edit"]').val(data.kode_news);
		            			$('[name="tanggal_edit"]').val(data.tanggal);
		            			$('[name="judul_edit"]').val(data.judul);
		            			$('[name="perihal_edit"]').val(data.perihal);
		            			$('[name="konten_edit"]').val(data.konten);
		            			$('[name="status_edit"]').val(data.status);
		            		});
		                }
		            });
		            return false;
		        });


				//GET HAPUS
				$('#show_data').on('click','.item_hapus',function(){
		            var kode_news=$(this).attr('data');
		            $('#ModalHapus').modal('show');
		            $('[name="kode"]').val(kode_news);
		        });

				//Simpan Barang
				$('#btn_simpan').on('click',function(){
		            var kode_news=$('#kode_news').val();
		            var tanggal=$('#tanggal').val();
		            var judul=$('#judul').val();
		            var perihal=$('#perihal').val();
		            var konten=$('#konten').val();
		            var status=$('#status').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('pengumuman/simpan_pengumuman')?>",
		                dataType : "JSON",
		                data : {kode_news:kode_news, tanggal:tanggal, judul:judul, perihal:perihal, konten:konten, status:status},
		                success: function(data){
		                    $('[name="kode_news"]').val("");
		                    $('[name="tanggal"]').val("");
		                    $('[name="judul"]').val("");
		                    $('[name="perihal"]').val("");
		                    $('[name="konten"]').val("");
		                    $('[name="status"]').val("");
		                    $('#ModalaAdd').modal('hide');
		                    tampil_data_pengumuman();
		                }
		            });
		            return false;
		        });

		        //Update Barang
				$('#btn_update').on('click',function(){
		            var kode_news=$('#kode_news2').val();
		            var tanggal=$('#tanggal2').val();
		            var judul=$('#judul2').val();
		            var perihal=$('#perihal2').val();
		            var konten=$('#konten2').val();
		            var status=$('#status2').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo base_url('pengumuman/update_pengumuman')?>",
		                dataType : "JSON",
		                data : {kode_news:kode_news, tanggal:tanggal, judul:judul, perihal:perihal, konten:konten, status:status},
		                success: function(data){
		                    $('[name="kode_news_edit"]').val("");
		                    $('[name="tanggal_edit"]').val("");
		                    $('[name="judul_edit"]').val("");
		                    $('[name="perihal_edit"]').val("");
		                    $('[name="konten_edit"]').val("");
		                    $('[name="status_edit"]').val("");
		                    $('#ModalaEdit').modal('hide');
		                    tampil_data_pengumuman();
		                }
		            });
		            return false;
		        });

		        //Hapus Barang
		        $('#btn_hapus').on('click',function(){
		            var kode=$('#textkode').val();
		            $.ajax({
		            type : "POST",
		            url  : "<?php echo base_url('pengumuman/hapus_pengumuman')?>",
		            dataType : "JSON",
		                    data : {kode: kode},
		                    success: function(data){
		                            $('#ModalHapus').modal('hide');
		                            tampil_data_pengumuman();
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
