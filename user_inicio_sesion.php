<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul class ="menu">
    <?php if ($user): ?>
        <li> <a href ="user_mis_imagenes.php"> imagenes </a> </li>
        <li> <a href ="user_cerrar_sesion.php"> Salir </a> </li>
    <?php else: ?>
        <li> <a href ="user_registro.php"> Registrarse </a> </li>
        <li> <a href ="user_inicio_sesion.php"> Iniciar Sesion </a> </li>
    <?php endif; ?>
 </ul>
<h2> Iniciar Sesion </h2>


    <form  action="process_user_inicio.php" method="post">
        <p> nom <input type="text" name="nom"></p>
      
        <p> Contraseña <input type="password" name="Contraseña"></p>
        
        <input type="submit">
       


    </form>

</body>
</html>