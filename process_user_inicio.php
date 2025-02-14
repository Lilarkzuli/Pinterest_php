
<?php



$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");




    
$nom = $_POST['nom'];
$contraseña = $_POST['Contraseña'];


$encontrado = false;
$seleccion=mysqli_query($enlace, "SELECT * from users");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <title>Registrando</title>
</head>
<body>
    <?php 
    session_start();
    while ($datos = mysqli_fetch_array($seleccion)){
        if ($datos['name']== $nom && $datos['password']==$contraseña){
            
            $encontrado=true;
        }
    }
    
 
        // si no es troba el nom
        if (!$encontrado){
            // dades incorrectes
            header("Location: user_inicio_sesion.php");
            
    
        }else{
            // login correcte
            $_SESSION["usuari"]=$nom;
            header("Location: user_home.php");
        }
    


    
    ?>
   
</body>
</html>