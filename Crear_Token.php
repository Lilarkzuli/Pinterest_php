<?php

session_start();


$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;

}

// NOMBREARCHIVO
$id= $_GET["id"];









?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <link rel="stylesheet" href="Css/Home.css">
    <link rel="stylesheet" href="Css/Formulario.css">
    <title>Document</title>
</head>
<body>
    <header>
    <h2> Esto es un pinterest de mierda salu2</h2>
    <div class="cent">
    <h3> Crear Token </h3>
        <div class="uno">
            <ul class ="menu">
                <li><a  class="boton" href='user_home.php'> Volver atras</a></li>
            </ul>
        </div>
        <div class="dos">
            <ul class ="menu">
                <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>

            </ul>
        </div>

    </div>
    </header>

<main>
<?php


?>
    <div class="cubo">
    <h2 class="texto"> Crear Fecha Limite </h2>
        <form  action="Process_Token.php" method="POST">
            <p><input type='date' name="fecha"> </p>
            <p> <input type='hidden' name="Archivo" value="<?php echo $id; ?>"></p>           
        
            <input type="submit" value="Enviar">
        </form>

    </div>




</main>

<footer>
    <p> Copyright Helena 2023 </p>


</footer>
</body>
</html>