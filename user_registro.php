<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<p> <a href="user_inicio_sesion.php">Iniciar sesion </a></p>
<a href="Index.php">Volver Atras</a>


    <h2> Registrate </h2>
    
    <form  action="process_user_registro.php" method="post">
        <p> nom <input type="text" name="nom"></p>
        <p> Correo <input type="email" name="Correo"></p>
        <p> Contraseña <input type="password" name="Contraseña"></p>
        <p>Repetir Contraseña  <input type="password" name="Contraseña2"></p>
        <input type="submit">
       


    </form>
</body>
</html>