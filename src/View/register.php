<?php
/**
 * @file      View/singleProduct.php
 * @brief     This file is to display register page
 * @author    Created by Ethann.SCHNEIDER
 * @version   13-MAY-2022
 */

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header("Location: index.php?action=home");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../Assets/images/header-logo.png" />
    <link rel="stylesheet" type="text/css" href="../Vendor/icon-font.css">
    <link rel="stylesheet" type="text/css" href="../Vendor/util.css">
    <link rel="stylesheet" type="text/css" href="../Vendor/main.css">
    <link href="../Vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body onload="<?php
if (isset($error)){
    echo "error('".$error."')";
}
?>">
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        if (password != confirmPassword) {
            document.getElementById("error").innerText = "Les deux mots de passe ne correspondent pas";
            document.getElementById("error").removeAttribute("hidden");
            return false;
        }
        return true;
    }

    function error(error){
        document.getElementById("error").innerText = error;
        document.getElementById("error").removeAttribute("hidden");
    }
    </script>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../Vendor/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">New Account</span>
                <div class="alert alert-danger" role="alert" id="error" hidden></div>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="?action=register">
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="username" placeholder="Email" required>
						<span class="focus-input100" data-placeholder=""></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter firstName">
                        <input class="input100" type="text" name="realName" placeholder="first name" required>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter secondName">
                        <input class="input100" type="text" name="surname" placeholder="second name" required>
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
                        <p>or <a href="?action=loginPage"> Login</a></p>
                    </div>
				</form>
			</div>
		</div>
	</div>
<div id="dropDownSelect1"></div>
</body>
</html>

