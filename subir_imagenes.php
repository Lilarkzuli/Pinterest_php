

<?php 
    session_start();
    ?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagenes</title>
</head>
<body>
<a href="user_home.php">Home</a>


    <h2> Subir Imagen</h2>
    <form action="process_subir_imagen.php" method="post">
        <p> URL <input type="text" name="url" size="80"></p>


    <input type="submit">
    <input type="reset">

    </form>






</body>
</html>