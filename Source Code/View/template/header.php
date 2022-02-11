<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="../view"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../view">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
                        echo '<a class="nav-link" href="../Controller/disconnect.php">Disconnect</a>';
                    }else{
                        echo '<a class="nav-link" href="Login.php">Login</a>';
                    }
                    ?>


                </li>
            </ul>
        </div>
    </div>
</nav>