<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="../assets/images/header-logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/flex-slider.css">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="?"><img src="../assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=about">About Us</a>
                </li>
                <?php
                if(isset($_SESSION['username'])){
                    echo '<li class="nav-item">';
                    echo '    <a class="nav-link" href="?action=logout">Disconnect</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '    <a class="nav-link" href="?action=showCart">Cart</a>';
                    echo '</li>';
                }else{
                    echo '<li class="nav-item">';
                    echo '    <a class="nav-link" href="?action=loginPage">Login</a>';
                    echo '</li>';
                }
                ?>



            </ul>
        </div>
    </div>
</nav>

<?= $content ?>

<!-- Footer Starts Here -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img src="../assets/images/header-logo.png" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-menu">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ends Here -->


<!-- Sub Footer Starts Here -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text">
                    <p>Copyright &copy; 2022 Tank&Cie</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Footer Ends Here -->


<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/owl.js"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>

<script src="../assets/js/isotope.js"></script>
<script src="../assets/js/flex-slider.js"></script>


</body>

</html>
