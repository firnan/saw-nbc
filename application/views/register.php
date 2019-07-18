<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up Now!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="<?php echo base_url() ?>assets/login_form/images/icons/favicon-ilkom.ico"/ rel="icon" type="image/png">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/vendor/animate/animate.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
	<link href="<?php echo base_url() ?>assets/login_form/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/vendor/animsition/css/animsition.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/vendor/select2/select2.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
	<link href="<?php echo base_url() ?>assets/login_form/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link href="<?php echo base_url() ?>assets/login_form/css/util.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/login_form/css/main.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" <?php echo form_open('auth/register')?>
					
					<span class="login100-form-title p-b-20">
						Sign Up Now!
					</span>
					
					<?php if(!empty(@$notif)){ ?>
                    <div id="signupalert" class="alert alert-<?php echo @$notif['type'];?>">
                        <p><?php echo @$notif['message'];?></p>
                        <span></span>
                    </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="namalengkap" value="<?php echo $this->input->post('namalengkap');?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nim" value="<?php echo $this->input->post('nim_nip');?>">
						<span class="focus-input100"></span>
						<span class="label-input100">NIM (mahasiswa) atau NIP (dosen)</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" name="email" value="<?php echo $this->input->post('email');?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" value="<?php echo $this->input->post('password');?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="confirm_password" value="<?php echo $this->input->post('confirm_password');?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div> 

					<!-- value="<?php echo $this->input->post('level');?>" -->
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit">
							Sign Up
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							 Please <a href="<?php echo site_url('auth/index'); ?>">Sign In</a>
						</span>
					</div>

					<?php echo form_close()?>
				</form>
				
				<div class="login100-more" style="background-image: url('<?php echo base_url() ?>assets/login_form/images/bg-04.jpg?>');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/login_form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login_form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login_form/js/main.js"></script>

</body>
</html>