

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
    <link rel="stylesheet" href="Css/Formulario.css">
    <link rel="stylesheet" href="Css/Home.css">
    <title>Subir Imagenes</title>
</head>
<body>
<header>
<h2> Esto es un pinterest de mierda salu2</h2>

<div class="cent">
<h3> Subir Imagenes </h3>
    <div class="uno">
        <ul class="menu">
            

        
            <li><a class="boton" href='user_home.php'> Volver atras</a></li>
        </ul>
    </div>
    <div class="dos">
            <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>
    </div>


</header>
<main>
   
    <div class="cubo">
    <h2 class="texto"> Subir Imagen</h2>
        <form action="process_subir_imagen.php" method="post" enctype="multipart/form-data">
        <br><input type="file" name="url" id="url"><br><br>


        <input type="submit">
        <input type="reset">

        </form>
    </div>
</main>

<footer>
        <p> Copyright Helena 2023 </p>

</footer>


</body>
</html>