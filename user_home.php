<?php
    session_start();

    if ($_SESSION["usuari"]==""){
        header("location: Index.php");

    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <a href="user_mis_imagenes.php"> Imagenes </a>

    <a href="subir_imagenes.php"> Subir Imagenes </a>
</header>

<a href="user_cerrar_sesion.php"> Cerrar Sesion </a>
<p> Bienvenido/a,<?=$_SESSION["usuari"];?></p>

</body>
</html>