<?php
    session_start();
    
    $enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");
  
    $nom=$_SESSION["usuari"];
    $resultat = mysqli_query($enlace, "SELECT * FROM users where name='$nom'");

  
    $dato =mysqli_fetch_array($resultat);
    
    
    $id=$dato[0];
    $admin=$dato[4];
    $quota=$dato[6];


    $_SESSION["id"]=$id;
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <link rel="stylesheet" href="Css/Home.css">
    <title>Document</title>
</head>
<body>
<header>



    <h2> Esto es un pinterest de mierda salu2</h2>
    <div class="cent">
        <div class="uno">
        <ul class ="menu">
        <li> <a  class="boton" href="user_mis_imagenes.php"> Imagenes </a></li>
            <li><a class="boton" href="subir_imagenes.php"> Subir Imagenes </a></li>
            <li><a  class="boton" href="user_cerrar_sesion.php"> Cerrar Sesion </a></li>

        </ul>
        </div>
        <div class="dos">
            <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>


        </div>

    </div>
</header>
<main class="home" >
    

<p><?=$_SESSION["id"];?></p>

 <p> Ver tablas </p>

 <?php

$query = "SELECT * FROM users";
$resultado = $conn->query($query);

?>

</main>


<footer>
        <p> Copyright Helena 2023 </p>

</footer>
</body>
</html>