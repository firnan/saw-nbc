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
    <a class="navbar-brand" href="<?php echo base_url('main/dashboard'); ?>">Ilmu Komunikasi UPN Veteran Yogyakarta</a>
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
          <a href="#">Mahasiswa</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Data Mahasiswa</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Olah Pembimbing</a>
        </li>
        <li class="breadcrumb-item active">Hasil</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Hasil Analisis Dosen Pembimbing</div>
        <div class="card-body">
          <div class="table-responsive">
            
        <?php include "saw/koneksi.php"; ?>
		<?php include "saw/library.php"; ?>

		<?php 
			$con=mysqli_connect("localhost","root","","skripsi");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
		?>
		
		<div id="content">
		<!-- Page title -->
 			<div class="card mb-3">
        	<div class="card-header">
          	   <i class="fa fa-desktop"></i> Bobot Kriteria</div>
        		<div class="card-body">
         		  <div class="table-responsive">
            		<table class="table table-bordered"  width="100%" >
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Dosen</th>
            					<th>Konsentrasi</th>
            					<th>Kompetensi</th>
            					<th>Fungsional P1</th>
            					<th>Fungsional P2</th>
            					<th>Kuota P1</th>
            					<th>Kuota P2</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor2 = 1;
            				//$sql2 = "select nama_dosen, fungsional, kuota from ex_kriteria";
            				//$sql2 = "select ex_konsen.nama_dosen, ex_konsen.advert, ex_konsen.broadcast, ex_konsen.jurnal, ex_konsen.pr, ex_konsen.other, ex_kompetensi.csr, ex_kompetensi.film, ex_kompetensi.animasi, ex_kompetensi.papper, ex_kompetensi.kamera, ex_kriteria.fungsional, ex_kriteria.fungsional_2, ex_kriteria.kuota from ex_konsen join ex_kompetensi on ex_konsen.id_dosen=ex_kompetensi.id_dosen join ex_kriteria on ex_konsen.id_dosen=ex_kriteria.id_dosen";
            				$sql2 = "select k_konsentrasi.nama_dosen, k_konsentrasi.advert, k_konsentrasi.broadcast, k_konsentrasi.jurnal, k_konsentrasi.pr, k_konsentrasi.other, k_kompetensi.csr, k_kompetensi.strategi_pr, k_kompetensi.pemasaran, k_kompetensi.organisasi, k_kompetensi.semiotika, k_kompetensi.branding, k_kompetensi.politik, k_kompetensi.media, k_kompetensi.budaya, k_kompetensi.radio_tv_film, k_kriteria.jabfung_1, k_kriteria.jabfung_2, k_kriteria.kuota_1, k_kriteria.kuota_2 from k_konsentrasi join k_kompetensi on k_konsentrasi.id_konsen=k_kompetensi.id_kompetensi join k_kriteria on k_konsentrasi.id_konsen=k_kriteria.id_kriteria";
            				$hasil2 = mysqli_query($con, $sql2);
            				while ($dataku = mysqli_fetch_array($hasil2)) { ?>
            					<?php $konsen = $_POST['bobot_konsentrasi'];
			            		if ($konsen == "1") {
			            			$tb_konsen = $dataku['advert'];
			            		} elseif ($konsen == "2") {
			            			$tb_konsen = $dataku['broadcast'];
			            		} elseif ($konsen == "3") {
			            			$tb_konsen = $dataku['jurnal'];
			            		} elseif ($konsen == "4") {
			            			$tb_konsen = $dataku['pr'];
			            		} else {
			            			$tb_konsen = $dataku['other'];
			            		}


			            		//echo " ||===>Kompetensi = ";
			            		$kompetensi = $_POST['bobot_kompetensi'];
			            		if ($kompetensi == "1") {
			            			$tb_kompetensi = $dataku['csr'];
			            		} elseif ($kompetensi == "2") {
			            			$tb_kompetensi = $dataku['strategi_pr'];
			            		} elseif ($kompetensi == "3") {
			            			$tb_kompetensi = $dataku['pemasaran'];
			            		} elseif ($kompetensi == "4") {
			            			$tb_kompetensi = $dataku['organisasi'];
			            		} elseif ($kompetensi == "5") {
			            			$tb_kompetensi = $dataku['semiotika'];
			            		} elseif ($kompetensi == "6") {
			            			$tb_kompetensi = $dataku['branding'];
			            		} elseif ($kompetensi == "7") {
			            			$tb_kompetensi = $dataku['politik'];
			            		} elseif ($kompetensi == "8") {
			            			$tb_kompetensi = $dataku['media'];
			            		} elseif ($kompetensi == "9") {
			            			$tb_kompetensi = $dataku['budaya'];
			            		} else {
			            			$tb_kompetensi = $dataku['radio_tv_film'];
			            		}  ?>
            				<tr>
            					<td><?php echo $nomor=$nomor2++; ?></td>
            					<td><?php echo $dataku['nama_dosen']; ?></td>
            					<td><?php echo $tb_konsen; ?></td>
            					<td><?php echo $tb_kompetensi; ?></td>
            					<td><?php echo $dataku['jabfung_1']; ?></td>
            					<td><?php echo $dataku['jabfung_2']; ?></td>
            					<td><?php echo $dataku['kuota_1']; ?></td>
            					<td><?php echo $dataku['kuota_2']; ?></td>
            				</tr>
            				<?php }	?>                     				
            			</tbody>
            		</table>
            		</div>
		        </div>
		      </div>
		    </div>

           	<?php
           	// Konsentrasi
			#Cari nilai maximal
			$carimax = "SELECT max(advert) as max1,
							   max(broadcast) as max2,
							   max(jurnal) as max3,
							   max(pr) as max4,
							   max(other) as max5
							   FROM k_konsentrasi";
			$row_max = mysqli_query($con, $carimax);
			$max = mysqli_fetch_array($row_max);
			# Cari nilai minimal
			$carimin = "SELECT 	min(advert) as min1,
							   	min(broadcast) as min2,
				   			   	min(jurnal) as min3,
							 	min(pr) as min4,
								min(other) as min5
								FROM k_konsentrasi";
			$row_min = mysqli_query($con, $carimin);
			$min = mysqli_fetch_array($row_min);

			// Kompetensi
			#Cari nilai maximal
			$carimax2 = "SELECT max(csr) as max6,
								max(strategi_pr) as max7,
								max(pemasaran) as max8,
								max(organisasi) as max9,
								max(semiotika) as max10,
								max(branding) as max11,
								max(politik) as max12,
								max(media) as max13,
								max(budaya) as max14,
								max(radio_tv_film) as max15
								FROM k_kompetensi";			
			$row_max2 = mysqli_query($con, $carimax2);
			$max2 = mysqli_fetch_array($row_max2);
			# Cari nilai minimal
			$carimin2 = "SELECT min(csr) as min6,
							   	min(strategi_pr) as min7,
				   			   	min(pemasaran) as min8,
							 	min(organisasi) as min9,
								min(semiotika) as min10,
								min(branding) as min11,
							   	min(politik) as min12,
				   			   	min(media) as min13,
							 	min(budaya) as min14,
								min(radio_tv_film) as min15
								FROM k_kompetensi";
			$row_min2 = mysqli_query($con, $carimin2);
			$min2 = mysqli_fetch_array($row_min2);

			// Kriteria
			#Cari nilai maximal
			$carimax3 = "SELECT max(jabfung_1) as max16,
								max(jabfung_2) as max17,
								max(kuota_1) as max18,
								max(kuota_2) as max19
								FROM k_kriteria";
			$row_max3 = mysqli_query($con, $carimax3);
			$max3 = mysqli_fetch_array($row_max3);
			# Cari nilai minimal
			$carimin3 = "SELECT min(jabfung_1) as min16,
								min(jabfung_2) as min17,
								min(kuota_1) as min18,
								min(kuota_2) as min19
								FROM k_kriteria";
			$row_min3 = mysqli_query($con, $carimin3);
			$min3 = mysqli_fetch_array($row_min3);
			?>

			
			<div class="card mb-3">
        	<div class="card-header">
          	   <i class="fa fa-desktop"></i> Normalisasi</div>
        		<div class="card-body">
         		  <div class="table-responsive">
            		<table class="table table-bordered"  width="100%">
            			</thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Dosen</th>
            					<th>Konsentrasi</th>
            					<th>Kompetensi</th>
            					<th>Fungsional P1</th>
            					<th>Fungsional P2</th>
            					<th>Kuota 1</th>
            					<th>Kuota 2</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor3 = 1;
            				//$sql2 = "select nama_dosen, fungsional, kuota from ex_kriteria";
            				//$sql3 = "select ex_konsen.nama_dosen, ex_konsen.advert, ex_konsen.broadcast, ex_konsen.jurnal, ex_konsen.pr, ex_konsen.other, ex_kompetensi.csr, ex_kompetensi.film, ex_kompetensi.animasi, ex_kompetensi.papper, ex_kompetensi.kamera, ex_kriteria.fungsional, ex_kriteria.fungsional_2, ex_kriteria.kuota from ex_konsen join ex_kompetensi on ex_konsen.id_dosen=ex_kompetensi.id_dosen join ex_kriteria on ex_konsen.id_dosen=ex_kriteria.id_dosen";
            				$sql3 = "select k_konsentrasi.nama_dosen, k_konsentrasi.advert, k_konsentrasi.broadcast, k_konsentrasi.jurnal, k_konsentrasi.pr, k_konsentrasi.other, k_kompetensi.csr, k_kompetensi.strategi_pr, k_kompetensi.pemasaran, k_kompetensi.organisasi, k_kompetensi.semiotika, k_kompetensi.branding, k_kompetensi.politik, k_kompetensi.media, k_kompetensi.budaya, k_kompetensi.radio_tv_film, k_kriteria.jabfung_1, k_kriteria.jabfung_2, k_kriteria.kuota_1, k_kriteria.kuota_2 from k_konsentrasi join k_kompetensi on k_konsentrasi.id_konsen=k_kompetensi.id_kompetensi join k_kriteria on k_konsentrasi.id_konsen=k_kriteria.id_kriteria";
            				$hasil3 = mysqli_query($con, $sql3);
            				while ($dataku = mysqli_fetch_array($hasil3)) { ?>
            				<?php 
            					$konsen = $_POST['bobot_konsentrasi'];
			            		if ($konsen == "1") {
			            			$tbnor_konsen = round($dataku['advert']/$max['max1'],2);
			            		} elseif ($konsen == "2") {
			            			$tbnor_konsen = round($dataku['broadcast']/$max['max2'],2);
			            		} elseif ($konsen == "3") {
			            			$tbnor_konsen = round($dataku['jurnal']/$max['max3'],2);
			            		} elseif ($konsen == "4") {
			            			$tbnor_konsen = round($dataku['pr']/$max['max4'],2);
			            		} else {
			            			$tbnor_konsen = round($dataku['other']/$max['max5'],2);
			            		}

		            			$kompetensi = $_POST['bobot_kompetensi'];
			            		if ($kompetensi == "1") {
			            			$tbnor_kompetensi = round($dataku['csr']/$max2['max6'],2);
			            		} elseif ($kompetensi == "2") {
			            			$tbnor_kompetensi = round($dataku['strategi_pr']/$max2['max7'],2);
			            		} elseif ($kompetensi == "3") {
			            			$tbnor_kompetensi = round($dataku['pemasaran']/$max2['max8'],2);
			            		} elseif ($kompetensi == "4") {
			            			$tbnor_kompetensi = round($dataku['organisasi']/$max2['max9'],2);
			            		} elseif ($kompetensi == "5") {
			            			$tbnor_kompetensi = round($dataku['semiotika']/$max2['max10'],2);
			            		} elseif ($kompetensi == "6") {
			            			$tbnor_kompetensi = round($dataku['branding']/$max2['max11'],2);
			            		} elseif ($kompetensi == "7") {
			            			$tbnor_kompetensi = round($dataku['politik']/$max2['max12'],2);
			            		} elseif ($kompetensi == "8") {
			            			$tbnor_kompetensi = round($dataku['media']/$max2['max13'],2);
			            		} elseif ($kompetensi == "9") {
			            			$tbnor_kompetensi = round($dataku['budaya']/$max2['max14'],2);
			            		} elseif ($kompetensi == "10") {
			            			$tbnor_kompetensi = round($dataku['radio_tv_film']/$max2['max15'],2);
			            		}
		            		 
			            		$tbnor_fung = round($dataku['jabfung_1']/$max3['max16'],2); //nilai besar hasil besar
			            		//$tbnor_fung2 = round($dataku['jabfung_2']/$max3['max17'],2);
			            		$tbnor_fung2 = round($min3['min17']/$dataku['jabfung_2'],2);//nilai kecil hasil besar
			            		$tbnor_kuota1 = round($dataku['kuota_1']/$max3['max18'],2);
			            		//$tbnor_kuota2 = round($dataku['kuota_2']/$max3['max19'],2);
								$tbnor_kuota2 = round($min3['min19']/$dataku['kuota_2'],2);
		            		?>

            				<tr>
            					<td><?php echo $nomor=$nomor3++; ?></td>
            					<td><?php echo $dataku['nama_dosen']; ?></td>
            					<td><?php echo $tbnor_konsen; ?></td>
            					<td><?php echo $tbnor_kompetensi; ?></td>
            					<td><?php echo $tbnor_fung; ?></td>
            					<td><?php echo $tbnor_fung2; ?></td>
            					<td><?php echo $tbnor_kuota1; ?></td>
            					<td><?php echo $tbnor_kuota2; ?></td>
            				</tr>
            				<?php }	?>            				
            			</tbody>
            		</table>
            		</div>
		        </div>
		      </div>
		    </div>

			<!--
				C1	 | Konsentrasi  |  0.30
				C2   | Kompetensi   |  0.20
				C3   | Fungsional   |  0.25
				C4	 | kuota        |  0.25
			-->
			

			<div class="card mb-3">
        	<div class="card-header">
          	   <i class="fa fa-desktop"></i> <b> Rangking Dosen Pembimbing </b></div>
        		<div class="card-body">
         		  <div class="table-responsive">
            		<table class="table table-bordered" id="dataTable" width="100%" >
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Dosen</th>
            					<th>Nilai Pembimbing 1</th>
            					<th>Nilai Pembimbing 2</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor3=1;
							//$query = "select ex_konsen.nama_dosen, ex_konsen.advert, ex_konsen.broadcast, ex_konsen.jurnal, ex_konsen.pr, ex_konsen.other, ex_kompetensi.csr, ex_kompetensi.film, ex_kompetensi.animasi, ex_kompetensi.papper, ex_kompetensi.kamera, ex_kriteria.fungsional, ex_kriteria.fungsional_2,  ex_kriteria.kuota from ex_konsen join ex_kompetensi on ex_konsen.id_dosen=ex_kompetensi.id_dosen join ex_kriteria on ex_konsen.id_dosen=ex_kriteria.id_dosen";
							$query = "select k_konsentrasi.nama_dosen, k_konsentrasi.advert, k_konsentrasi.broadcast, k_konsentrasi.jurnal, k_konsentrasi.pr, k_konsentrasi.other, k_kompetensi.csr, k_kompetensi.strategi_pr, k_kompetensi.pemasaran, k_kompetensi.organisasi, k_kompetensi.semiotika, k_kompetensi.branding, k_kompetensi.politik, k_kompetensi.media, k_kompetensi.budaya, k_kompetensi.radio_tv_film, k_kriteria.jabfung_1, k_kriteria.jabfung_2, k_kriteria.kuota_1, k_kriteria.kuota_2 from k_konsentrasi join k_kompetensi on k_konsentrasi.id_konsen=k_kompetensi.id_kompetensi join k_kriteria on k_konsentrasi.id_konsen=k_kriteria.id_kriteria";
							$result = mysqli_query($con, $query);
            				while ($dataku = mysqli_fetch_array($result)) { ?>
            				<?php	
            					$konsen = $_POST['bobot_konsentrasi'];
		            			$kompetensi = $_POST['bobot_kompetensi'];

		            			////////////ADVERT///////////////
			            		if ($konsen == "1" && $kompetensi == "1") {
			            			$rangking1 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['csr']/$max2['max6'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking1,2);

			            		} elseif ($konsen == "1" && $kompetensi == "2") {
			            			$rangking2 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking2,2);

			            		} elseif ($konsen == "1" && $kompetensi == "3") {
			            			$rangking3 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['pemasaran']/$max2['max8'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking3,2);

			            		} elseif ($konsen == "1" && $kompetensi == "4") {
			            			$rangking4 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['organisasi']/$max2['max9'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking4,2);

			            		} elseif ($konsen == "1" && $kompetensi == "5") {
			            			$rangking5 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['semiotika']/$max2['max10'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking5,2);

			            		} elseif ($konsen == "1" && $kompetensi == "6") {
			            			$rangking6 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['branding']/$max2['max11'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking6,2);

			            		} elseif ($konsen == "1" && $kompetensi == "7") {
			            			$rangking7 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['politik']/$max2['max12'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking7,2);

			            		} elseif ($konsen == "1" && $kompetensi == "8") {
			            			$rangking8 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['media']/$max2['max13'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking8,2);

			            		} elseif ($konsen == "1" && $kompetensi == "9") {
			            			$rangking9 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['budaya']/$max2['max14'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking9,2);

			            		} elseif ($konsen == "1" && $kompetensi == "10") {
			            			$rangking10 = (($dataku['advert']/$max['max1'])*0.30)+(($dataku['radio_tv_film']/$max2['max15'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking10,2);

			            		///////////////BROADCASTING//////////////////////
			            		} elseif ($konsen == "2" && $kompetensi == "1") {
			            			$rangking11 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking11,2);

			            		} elseif ($konsen == "2" && $kompetensi == "2") {
			            			$rangking12 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking12,2);

			            		} elseif ($konsen == "2" && $kompetensi == "3") {
			            			$rangking13 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['pemasaran']/$max2['max8'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking13,2);

			            		} elseif ($konsen == "2" && $kompetensi == "4") {
			            			$rangking14 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['organisasi']/$max2['max9'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking14,2);

			            		} elseif ($konsen == "2" && $kompetensi == "5") {
			            			$rangking15 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['semiotika']/$max2['max10'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking15,2);

			            		} elseif ($konsen == "2" && $kompetensi == "6") {
			            			$rangking16 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['branding']/$max2['max11'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking16,2);

			            		} elseif ($konsen == "2" && $kompetensi == "7") {
			            			$rangking17 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['politik']/$max2['max12'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking17,2);

			            		} elseif ($konsen == "2" && $kompetensi == "8") {
			            			$rangking18 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['media']/$max2['max13'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking18,2);

			            		} elseif ($konsen == "2" && $kompetensi == "9") {
			            			$rangking19 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['budaya']/$max2['max14'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking19,2);

			            		} elseif ($konsen == "2" && $kompetensi == "10") {
			            			$rangking20 = (($dataku['broadcast']/$max['max2'])*0.30)+(($dataku['radio_tv_film']/$max2['max15'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking20,2);

			            		///////////////JURNALISTIK//////////////////////
			            		} elseif ($konsen == "3" && $kompetensi == "1") {
			            			$rangking21 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking21,2);

			            		} elseif ($konsen == "3" && $kompetensi == "2") {
			            			$rangking22 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking22,2);

			            		} elseif ($konsen == "3" && $kompetensi == "3") {
			            			$rangking23 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['pemasaran']/$max2['max8'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking23,2);

			            		} elseif ($konsen == "3" && $kompetensi == "4") {
			            			$rangking24 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['organisasi']/$max2['max9'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking24,2);

			            		} elseif ($konsen == "3" && $kompetensi == "5") {
			            			$rangking25 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['semiotika']/$max2['max10'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking25,2);

			            		} elseif ($konsen == "3" && $kompetensi == "6") {
			            			$rangking26 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['branding']/$max2['max11'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking26,2);

			            		} elseif ($konsen == "3" && $kompetensi == "7") {
			            			$rangking27 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['politik']/$max2['max12'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking27,2);

			            		} elseif ($konsen == "3" && $kompetensi == "8") {
			            			$rangking28 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['media']/$max2['max13'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking28,2);

			            		} elseif ($konsen == "3" && $kompetensi == "9") {
			            			$rangking29 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['budaya']/$max2['max14'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking29,2);

			            		} elseif ($konsen == "3" && $kompetensi == "10") {
			            			$rangking30 = (($dataku['jurnal']/$max['max3'])*0.30)+(($dataku['radio_tv_film']/$max2['max15'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking30,2);

			            		///////////////PR//////////////////////
			            		} elseif ($konsen == "4" && $kompetensi == "1") {
			            			$rangking31 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking31,2);

			            		} elseif ($konsen == "4" && $kompetensi == "2") {
			            			$rangking32 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking32,2);

			            		} elseif ($konsen == "4" && $kompetensi == "3") {
			            			$rangking33 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['pemasaran']/$max2['max8'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking33,2);

			            		} elseif ($konsen == "4" && $kompetensi == "4") {
			            			$rangking34 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['organisasi']/$max2['max9'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking34,2);

			            		} elseif ($konsen == "4" && $kompetensi == "5") {
			            			$rangking35 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['semiotika']/$max2['max10'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking35,2);

			            		} elseif ($konsen == "4" && $kompetensi == "6") {
			            			$rangking36 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['branding']/$max2['max11'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking36,2);

			            		} elseif ($konsen == "4" && $kompetensi == "7") {
			            			$rangking37 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['politik']/$max2['max12'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking37,2);

			            		} elseif ($konsen == "4" && $kompetensi == "8") {
			            			$rangking38 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['media']/$max2['max13'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking38,2);

			            		} elseif ($konsen == "4" && $kompetensi == "9") {
			            			$rangking39 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['budaya']/$max2['max14'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking39,2);

			            		} elseif ($konsen == "4" && $kompetensi == "10") {
			            			$rangking40 = (($dataku['pr']/$max['max4'])*0.30)+(($dataku['radio_tv_film']/$max2['max15'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking40,2);

			            		///////////////OTHER//////////////////////
			            		} elseif ($konsen == "5" && $kompetensi == "1") {
			            			$rangking41 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking41,2);

			            		} elseif ($konsen == "5" && $kompetensi == "2") {
			            			$rangking42 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['strategi_pr']/$max2['max7'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking42,2);

			            		} elseif ($konsen == "5" && $kompetensi == "3") {
			            			$rangking43 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['pemasaran']/$max2['max8'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking43,2);

			            		} elseif ($konsen == "5" && $kompetensi == "4") {
			            			$rangking44 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['organisasi']/$max2['max9'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking44,2);

			            		} elseif ($konsen == "5" && $kompetensi == "5") {
			            			$rangking45 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['semiotika']/$max2['max10'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking45,2);

			            		} elseif ($konsen == "5" && $kompetensi == "6") {
			            			$rangking46 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['branding']/$max2['max11'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking46,2);

			            		} elseif ($konsen == "5" && $kompetensi == "7") {
			            			$rangking47 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['politik']/$max2['max12'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking47,2);

			            		} elseif ($konsen == "5" && $kompetensi == "8") {
			            			$rangking48 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['media']/$max2['max13'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking48,2);

			            		} elseif ($konsen == "5" && $kompetensi == "9") {
			            			$rangking49 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['budaya']/$max2['max14'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking49,2);

			            		} elseif ($konsen == "5" && $kompetensi == "10") {
			            			$rangking50 = (($dataku['other']/$max['max5'])*0.30)+(($dataku['radio_tv_film']/$max2['max15'])*0.20)+(($dataku['jabfung_1']/$max3['max16'])*0.25)+(($dataku['kuota_1']/$max3['max18'])*0.25);
			            			$tb_rank = round($rangking50,2);

			            		} else {
			            			$tb_rank = round($dataku['other']/$max['max5']*1,2);
			            		}
			            	?>
			            	<?php 
			            		$rangking_p2 = (($min3['min17']/$dataku['jabfung_2'])*0.25)+(($min3['min19']/$dataku['kuota_2'])*0.25);
			            		$tb_rank_p2 = round($rangking_p2,2);
			            	?>
            				<tr>
            					<td><?php echo $nomor=$nomor3++; ?></td>
            					<td><?php echo $dataku['nama_dosen']; ?></td>
            					<td><?php echo $tb_rank; ?></td>
            					<td><?php echo $tb_rank_p2; ?></td>
            				</tr>
            				<?php }	?>            				
            			</tbody>
            		</table><br>
		
				<form action="/myskripsi/olahdata/update_pembimbing/" method="post" enctype="multipart/form-data">
					<label class="control-label col-xs-3"><b>Judul Proposal</b></label>
		        	<div class="col-xs-9">
					<input type="text" name="judul" value="<?php echo $data2_proposal->judul; ?>" class="form-control" style="width:460px;" readonly></div><br>
						<div class="form-group">
			                <label class="control-label col-xs-3"><b>Pembimbing 1</b></label>
			                <div class="col-xs-9">
			                <select name="pembimbing_1" id="pembimbing1" class="form-control" style="width:460px;">
			                	<option value="">--Pilih Dosen Pembimbing 1--</option>
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
			                <select name="pembimbing_2" id="pembimbing1" class="form-control" style="width:460px;">
			                	<option value="">--Pilih Dosen Pembimbing 2--</option>
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
							<br><center><button type="submit" class="btn btn-primary">UPDATE</button></center>
						</form>
            		</div>
		          </div>
		        <div class="card-footer small text-muted">Text Mining -> Naive Bayes Classifier -> Simple Additive Weighting</div>
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
