<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando</title>
</head>
<body>
    <a href="Index.php">Home</a><br>
    <?php 
    $nom = $_POST['nom'];
    $correo = $_POST['Correo']; 
    $contraseña = $_POST['Contraseña'];
    $contraseña2 = $_POST['Contraseña2'];
    $Fallar=false;

   /* echo "Registro Recibido! <br>" ;
    echo "nom:  $nom <br>"; 
    echo "Correo:  $Correo <br>";
    echo "Contraseña: $Contraseña <br>";
    echo "Contraseña2:  $Contraseña2 <br>"; */
    




    if ( $nom==""){
        echo "No hay nada en el campo nombre, pon algo e intentalo otra vez.<br>";
        $Fallar=true;
    }
    if( $correo==""){
        echo "No hay nada en el campo Correo, pon algo e intentalo otra vez.<br>";
        $Fallar=true;
    }   
    if ($contraseña=="" ||  $contraseña2=="") {
        echo "Las contraseñas no coinciden.<br>";
        $Fallar=true;

    }

   

    if ( $contraseña != $contraseña2){
        echo "las contraseñas no coinciden.<br>";
        $Fallar=true;


    }   
    if ($Fallar==true){
            echo"<a href='user_registro.php'>Volver atras</a>";
    }


    $encontrado = false ;
    $fichero = fopen ("usuarios.txt","r");
       
    while (!feof($fichero)){
    
        $nom_fichero = fgets($fichero);
        $correo_fichero= fgets($fichero);
        $pass_fichero=  fgets($fichero);
     
        if ($nom == substr($nom_fichero,0,strlen($nom_fichero)-1)){
            $encontrado = true;
        }

    }
    fclose($fichero);






            

            

    
if (!$encontrado){
    $fichero = fopen("usuarios.txt" , "a");
    fwrite( $fichero, $nom ."\n");
    fwrite( $fichero, $correo ."\n"); 
    fwrite( $fichero, $contraseña ."\n");
    fclose($fichero);



    echo "te has registrado correctamente.<br>";
    echo "<a href='Index.php'>Volver a Inicio</a><br>";
        }

else {

    
        echo "el usuario ya existe<br>";
        echo"<a href='user_registro.php'> Volver atras</a>";

    }

    
    ?>
   
</body>
</html>