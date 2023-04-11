
<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <style>
        img{
            width:300px;
            
        }
    </style>
</head>
<body>



    <h2> Esto es un pinterest de mierda salu2</h2>
<?php

if ($_SESSION["usuari"] ){


    echo $_SESSION['usuari'];
}

?>



    <p> <a href="user_inicio_sesion.php">Iniciar sesion </a></p>
    <p> <a href="user_registro.php">Registro </a></p>
    <p> <a href="user_cerrar.php">Cerrar sesion</a></p>
    <h3> Imagenes </h3>
    <img src="https://elcorreoweb.es/binrepository/761x400/43c0/675d400/none/10703/NECT/eca-gatos-colores-2_20937334_20221026082307.jpg"/>
    <img src="https://www.cadenadial.com/wp-content/uploads/2021/09/cancer-en-gatos-2-e1632400021130.jpg"/>  
</body>
</html>