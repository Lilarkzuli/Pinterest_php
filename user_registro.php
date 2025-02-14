

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <link rel="stylesheet" href="Css/Formulario.css">
    <title>Registro</title>
</head>
<body>
<header>
    
<h2> Esto es un pinterest de mierda salu2</h2>
    <ul class="menu">
        <li><a href="Index.php">Volver Atras</a></li>
        <li> <a href="user_inicio_sesion.php">Iniciar sesion </a></li>
       
    </ul>
</header>

<main>

    <div class="cubo">
    <h2 class="texto"> Registrate </h2>
        <form  action="process_user_registro.php" method="post">
            <p> nom <input type="text" name="nom"></p>
            <p> Correo <input type="email" name="Correo"></p>
            <p> Contraseña <input type="password" name="Contraseña"></p>
            <p>Repetir Contraseña  <input type="password" name="Contraseña2"></p>
            <input type="submit">
        </form>
       
    <div>

  
</main>

<footer>
        <p> Copyright Helena 2023 </p>

</footer>
</body>
</html>