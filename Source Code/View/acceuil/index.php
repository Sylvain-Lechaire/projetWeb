<?php
/*
Projet: Tank&Cio
Author: Ethann Schneider
Version: 1.0
date: 04.02.22
*/

session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['username']; ?></h1>
    <h1><?php echo $_SESSION['Fullname']; ?></h1>
    <form action="../../Controller/disconnect.php" method="post">
        <input type="submit" value="Disconnect">
    </form>
</body>
</html>