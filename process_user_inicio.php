<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando</title>
</head>
<body>
    <?php 

    session_start();
    $nom = $_POST['nom'];
    $contraseña = $_POST['Contraseña']; 
 


    $encontrado = false;
    $fitxer = fopen("usuarios.txt","r");
    while (!feof($fitxer)) {
        $nom_fitxer = fgets($fitxer);
        $correu_fitxer = fgets($fitxer);
        $pwd_fitxer = fgets($fitxer);
        if ($nom."\n" == $nom_fitxer && $contraseña ."\n" == $pwd_fitxer){
            $encontrado = true;
            break;
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