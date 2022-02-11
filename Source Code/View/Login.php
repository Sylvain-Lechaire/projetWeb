<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header("Location: ../View/");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v16/images/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="vendor/icon-font.css">
	<link rel="stylesheet" type="text/css" href="vendor/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('vendor/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">Account Login</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="../Controller/connect.php">
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>
