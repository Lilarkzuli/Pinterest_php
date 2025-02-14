
<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <title>Pagina</title>
    <style>
        img{
            width:300px;
            
        }
    </style>
</head>
<body>



    
<?php

?>

<header>


    <h2> Esto es un pinterest de mierda salu2</h2>
    <ul class ="menu">
        <?php if ($user): ?>
            <li> <a href ="user_mis_imagenes.php"> imagenes </a> </li>
            <li> <a href ="user_cerrar_sesion.php"> Salir </a> </li>
        <?php else: ?>
            <li> <a class="boton" href ="Index.php"> Home </a> </li>
            <li> <a class="boton" href ="user_registro.php"> Registrarse </a> </li>
            <li> <a class="boton" href ="user_inicio_sesion.php"> Iniciar Sesion </a> </li>
       
            
        <?php endif; ?>
    </ul>
</header>

<main>

    <h3> Imagenes </h3>
    <img src="https://elcorreoweb.es/binrepository/761x400/43c0/675d400/none/10703/NECT/eca-gatos-colores-2_20937334_20221026082307.jpg"/>
   <img src="https://www.cadenadial.com/wp-content/uploads/2021/09/cancer-en-gatos-2-e1632400021130.jpg"/> 
</main>   
<footer>
        <p> Copyright Helena 2023 </p>

</footer>
</body>
</html>