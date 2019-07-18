<?php include "koneksi.php"; ?>
<?php include "library.php"; ?>

<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-desktop"></i> Hasil Analisa</h5>
			</div>

			<?php
        		$nomor = 0;
            	$hasil = mysql_query("select * from ex_konsen, ex_kompetensi where ex_konsen.id_dosen=ex_kompetensi.id_dosen");
            	while ($dataku = mysql_fetch_array($hasil)) { 
            		echo "<br>".$nomor=$nomor+1;  
            		echo "&nbsp;&nbsp;".$dataku['nama_dosen']; 
            		echo "===>Konsentrasi = ";

            		$konsen = $_POST['bobot_konsentrasi'];
            		if ($konsen == "1") {
            			echo $dataku['advert'];
            		} elseif ($konsen == "2") {
            			echo $dataku['broadcast'];
            		} elseif ($konsen == "3") {
            			echo $dataku['jurnal'];
            		} elseif ($konsen == "4") {
            			echo $dataku['pr'];
            		} else {
            			echo $dataku['other'];
            		}

            		echo " ||===>Kompetensi = ";
            		$kompetensi = $_POST['bobot_kompetensi'];
            		if ($kompetensi == "1") {
            			echo $dataku['csr'];
            		} elseif ($kompetensi == "2") {
            			echo $dataku['film'];
            		} elseif ($kompetensi == "3") {
            			echo $dataku['animasi'];
            		} elseif ($kompetensi == "4") {
            			echo $dataku['papper'];
            		} else {
            			echo $dataku['kamera'];
            		}
            	}
            	echo "<br>";
            	$nomor2 = 0;
            	$hasil2 = mysql_query("select nama_dosen, fungsional, kuota from ex_kriteria");            		 
            	while ($dataku = mysql_fetch_array($hasil2)) {
					echo "<br>".$nomor2=$nomor2+1;  
            		echo "&nbsp;&nbsp;".$dataku['nama_dosen']; 
					echo " ===>Fungsional = ";
					echo $dataku['fungsional'];
					echo " ||===>Kuota = ";
					echo $dataku['kuota'];          	
            	}  
            ?>


           	<?php
           	// Konsentrasi
			#Cari nilai maximal
			$carimax = mysql_query("SELECT max(advert) as max1,
											max(broadcast) as max2,
											max(jurnal) as max3,
											max(pr) as max4,
											max(other) as max5
											FROM ex_konsen");
			$max = mysql_fetch_array($carimax);
			# Cari nilai minimal
			$carimin = mysql_query("SELECT min(advert) as min1,
											min(broadcast) as min2,
											min(jurnal) as min3,
											min(pr) as min4,
											min(other) as min5
											FROM ex_konsen");
			$min = mysql_fetch_array($carimin);

			// Kompetensi
			#Cari nilai maximal
			$carimax2 = mysql_query("SELECT max(csr) as max6,
											max(film) as max7,
											max(animasi) as max8,
											max(papper) as max9,
											max(kamera) as max10
											FROM ex_kompetensi");
			$max2 = mysql_fetch_array($carimax2);
			# Cari nilai minimal
			$carimin2 = mysql_query("SELECT min(advert) as min6,
											min(broadcast) as min7,
											min(jurnal) as min8,
											min(pr) as min9,
											min(other) as min10
											FROM ex_kompetensi");
			$min2 = mysql_fetch_array($carimin);

			// Kriteria
			#Cari nilai maximal
			$carimax3 = mysql_query("SELECT max(fungsional) as max11,
											max(kuota) as max12
											FROM ex_kriteria");
			$max3 = mysql_fetch_array($carimax3);
			# Cari nilai minimal
			$carimin3 = mysql_query("SELECT min(fungsional) as min11,
											min(kuota) as min12
											FROM ex_kriteria");
			$min3 = mysql_fetch_array($carimin3);
			?>

			<div class="panel panel-default">
			<h5><i class="fa fa-desktop"></i> Normalisasi</h5>
			<div class="datatable">
				<?php 
					$nomor = 0;
            		$hasil = mysql_query("select * from ex_konsen, ex_kompetensi where ex_konsen.id_dosen=ex_kompetensi.id_dosen");
            		while ($dataku = mysql_fetch_array($hasil)) { 
            		echo "<br>".$nomor=$nomor+1;  
            		echo "&nbsp;&nbsp;".$dataku['nama_dosen']; 
            		echo "===>Normalisasi Konsentrasi = ";

            		$konsen = $_POST['bobot_konsentrasi'];
	            		if ($konsen == "1") {
	            			echo round($dataku['advert']/$max['max1'],2);
	            		} elseif ($konsen == "2") {
	            			echo round($dataku['broadcast']/$max['max2'],2);
	            		} elseif ($konsen == "3") {
	            			echo round($dataku['jurnal']/$max['max3'],2);
	            		} elseif ($konsen == "4") {
	            			echo round($dataku['pr']/$max['max4'],2);
	            		} else {
	            			echo round($dataku['other']/$max['max5'],2);
	            		}

	            	echo " ||===>Normalisasi Kompetensi = ";
            		$kompetensi = $_POST['bobot_kompetensi'];
	            		if ($kompetensi == "1") {
	            			echo round($dataku['csr']/$max2['max6'],2);
	            		} elseif ($kompetensi == "2") {
	            			echo round($dataku['film']/$max2['max7'],2);
	            		} elseif ($kompetensi == "3") {
	            			echo round($dataku['animasi']/$max2['max8'],2);
	            		} elseif ($kompetensi == "4") {
	            			echo round($dataku['papper']/$max2['max9'],2);
	            		} else {
	            			echo round($dataku['kamera']/$max2['max10'],2);
	            		}
            		}

            		echo "<br>";
	            	$nomor2 = 0;
	            	$hasil2 = mysql_query("select nama_dosen, fungsional, kuota from ex_kriteria");            		 
	            	while ($dataku = mysql_fetch_array($hasil2)) {
					echo "<br>".$nomor2=$nomor2+1;  
            		echo "&nbsp;&nbsp;".$dataku['nama_dosen']; 
					echo " ===>Fungsional = ";
					echo round($dataku['fungsional']/$max3['max11'],2);
					echo " ||===>Kuota = ";
					echo round($min3['min12']/$dataku['kuota'],2);
					}
				 ?>
			</div>
			</div>
			</div>

			<!--
				C1	 | Konsentrasi  |  1
				C2   | Kompetensi   |  0.5
				C3   | Fungsional   |  0.75
				C4	 | kuota        |  0.75
			-->
			<div class="panel panel-default">
			<h5><i class="fa fa-desktop"></i> Perangkingan Dosen Pembimbing 1</h5>
			<div class="datatable">
			<?php 
				$nomor3=0;
				$hasil = mysql_query("select ex_konsen.nama_dosen, ex_konsen.advert, ex_konsen.broadcast, ex_konsen.jurnal, ex_konsen.pr, ex_konsen.other, ex_kompetensi.csr, ex_kompetensi.film, ex_kompetensi.animasi, ex_kompetensi.papper, ex_kompetensi.kamera, ex_kriteria.fungsional, ex_kriteria.kuota from ex_konsen join ex_kompetensi on ex_konsen.id_dosen=ex_kompetensi.id_dosen join ex_kriteria on ex_konsen.id_dosen=ex_kriteria.id_dosen");
				while ($dataku = mysql_fetch_array($hasil)) {
					echo "<br>".$nomor3=$nomor3+1;  
            		echo "&nbsp;&nbsp;".$dataku['nama_dosen'];
            		echo " ===>Perangkingan = ";

            		$konsen = $_POST['bobot_konsentrasi'];
            		$kompetensi = $_POST['bobot_kompetensi'];
	            		if ($konsen == "1" && $kompetensi == "1") {
	            			$rangking1 = (($dataku['advert']/$max['max1'])*1)+(($dataku['csr']/$max2['max6'])*0.5)+(($dataku['fungsional']/$max3['max11'])*0.75)+(($min3['min12']/$dataku['kuota'])*0.75);
	            			echo round($rangking1,2);
	            		} elseif ($konsen == "1" && $kompetensi == "2") {
	            			$rangking2 = (($dataku['advert']/$max['max1'])*1)+(($dataku['film']/$max2['max6'])*0.5)+(($dataku['fungsional']/$max3['max11'])*0.75)+(($min3['min12']/$dataku['kuota'])*0.75);
	            			echo round($rangking2,2);
	            		} elseif ($konsen == "1" && $kompetensi == "3") {
	            			$rangking3 = (($dataku['advert']/$max['max1'])*1)+(($dataku['animasi']/$max2['max6'])*0.5)+(($dataku['fungsional']/$max3['max11'])*0.75)+(($min3['min12']/$dataku['kuota'])*0.75);
	            			echo round($rangking3,2);
	            		} elseif ($konsen == "4") {
	            			echo round($dataku['pr']/$max['max4']*1,2);
	            		} else {
	            			echo round($dataku['other']/$max['max5']*1,2);
	            		}
				}	
			?>

			<form method="post" action="kembali_hasil.php">
				<br><br><button type="submit">Kembali</button>
			</form>

</div>