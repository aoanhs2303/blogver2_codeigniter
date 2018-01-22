<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>loginform/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>loginform/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>loginform/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php echo base_url(); ?>login/xacthuc" class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
					</div>

					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<?php if(isset($_SESSION["ErrorMessage"])) { ?>
						<p class="text-danger text-center">Incorrect username or password</p>
					<?php } ?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>