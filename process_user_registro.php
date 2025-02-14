<?php



$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;



}



    
$nom = $_POST['nom'];
$correo = $_POST['Correo']; 
$contraseña = $_POST['Contraseña'];
$contraseña2 = $_POST['Contraseña2'];
$Fallar=false;

$fecha=date('Y-m-d');
$insertar="INSERT INTO users VALUES ( DEFAULT ,'$nom', '$correo','$contraseña',0,'$fecha', 20480 )";


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
<header>
    
<h2> Esto es un pinterest de mierda salu2</h2>
    <ul class="menu">
        <li><a class="boton" href="Index.php">Home</a><br></li>
    </ul>
</header>
<main>

<?php 





//    echo "Registro Recibido! <br>" ;
//     echo "nom:  $nom <br>"; 
//     echo "Correo:  $correo <br>";
//     echo "Contraseña: $contraseña <br>";
//     echo "Contraseña2:  $contraseña2 <br>"; 
    




    if ( $nom==""){
        echo "<p class='alerta'> No hay nada en el campo nombre, pon algo e intentalo otra vez.<br></p>";
        $Fallar=true;
    }
    if( $correo==""){
        echo "<p class='alerta'>No hay nada en el campo Correo, pon algo e intentalo otra vez.<br>";
        $Fallar=true;
    }   
    if ($contraseña=="" ||  $contraseña2=="") {
        echo " <p class='alerta'> Las contraseñas no contienen nada.<br>";
        $Fallar=true;

    }

   

    if ( $contraseña != $contraseña2){
        echo "<p class='alerta'>las contraseñas no coinciden.<br>";
        $Fallar=true;


    }   
    if ($Fallar==true){
            echo"<li><a href='user_registro.php'>Volver atras</a></li>";
    }



if ($fallar ==false){

    $info=mysqli_query($enlace,"SELECT count(name) FROM users WHERE name='$nom'");


    $info2 =mysqli_fetch_array($info);




    echo $info2[0];


    if ($info2[0]>0){
        $encontrado=true;
        echo "<p class='alerta'>el usuario que querias registrar ya existe, prueba otro e intentalo de nuevo";
        echo"<li><a href='user_registro.php'>Volver atras</a></li>";
    }
            

                

        
    if (!$encontrado){
        $encontrado = false ;
          
        $resultado =mysqli_query($enlace, $insertar);
          

        if (!$resultado){
            echo "registro fallido
            <br>";

        }

        else{
            echo "registro completado";
        }
    }
        

}




    ?>

</main>
<footer>
        <p> Copyright Helena 2023 </p>

</footer>  
</body>
</html>