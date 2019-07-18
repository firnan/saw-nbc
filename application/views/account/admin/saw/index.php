<?php include "koneksi.php"; ?>
<?php include "library.php"; ?>

		<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-desktop"></i> Halaman Admin</h5>
			</div>
			<!-- /page title -->

            <!-- Right labels -->
            <form class="form-horizontal" action="hasil.php" method="post" role="form">
            	<div class="panel panel-default">
            		<div class="panel-heading"><h6 class="panel-title"><i class="fa fa-pencil"></i> Analisa Penerimaan Beasiswa</h6></div>
            		<div class="panel-body">
            			
            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C1. Konsentrasi:</label>
            				<div class="col-sm-8">
            					<select name='bobot_konsentrasi' class="required select">
            						<option value="1">Advert</option>
            						<option value="2">Broadcast</option>
            						<option value="3">Jurnal</option>
            						<option value="4">PR</option>
            						<option value="5">Other</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C2. Kompetensi:</label>
            				<div class="col-sm-8">
            					<select name='bobot_kompetensi' class="required select">
            						<option value="1">CSR</option>
            						<option value="2">Film</option>
            						<option value="3">Animasi</option>
            						<option value="4">Papper</option>
            						<option value="5">Kamera</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-action text-right">
            				<input type="submit" name="simpan" value="Proses" class="btn btn-primary">
            				<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
            			</div>

            		</div>
            	</div>
            </form>