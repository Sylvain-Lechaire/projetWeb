<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.1.1
date: 03.03.22
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
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/header-logo.png" />
	<link rel="stylesheet" type="text/css" href="vendor/icon-font.css">
	<link rel="stylesheet" type="text/css" href="vendor/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/main.css">
    <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (password != confirmPassword) {
                return false;
            }
            return true;
        }
    </script>
    <script>
        function erreur(){
            alert("il y a une erreur")
        }
    </script>
</head>


<body onload="<?php
if (isset($_GET['action'])){
    if($_GET['action']=='erreur'){
        echo 'erreur();';
    }
}
?>">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('vendor/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">New Account</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="../Controller/Register.php">
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="username" placeholder="Email" required>
						<span class="focus-input100" data-placeholder=""></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter firstName">
                        <input class="input100" type="text" name="realName" placeholder="first name" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter secondName">
                        <input class="input100" type="text" name="familyName" placeholder="second name" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder=""></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="confirm password">
                        <input class="input100" type="password" id="confirmPassword" placeholder="confirm password" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
					<div class="container-login100-form-btn m-t-32">
						<button onclick="return Validate()" class="login100-form-btn">Register</button>
					</div>
                    <div class="container-login100-form-btn m-t-32">
                        <p>or <a href="Login.php"> Login</a></p>
                    </div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>
