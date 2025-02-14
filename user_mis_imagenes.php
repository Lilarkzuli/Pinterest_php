
<?php 


    session_start();

    $enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

    if (!$enlace){
        echo "Error en la base de datos" . mysqli_connect_error();
        exit;

}
$nom=$_SESSION["usuari"];
$toke=$_SESSION["id"];
$enlacebien=("uploads/".$nom);


$quiero=mysqli_query($enlace,"SELECT * from images where user_id ='$toke' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Home.css">
    <link rel="stylesheet" href="Css/Imagenes.css">
    
    <link rel="stylesheet" href="Css/Principal.css">
  
    <title>Document</title>
</head>
<body>
<header>
<h2> Esto es un pinterest de mierda salu2</h2>

    <div class="cent">
    <h3> Ver Imagenes </h3>
        <div class="uno">
            <ul class ="menu">
                <li><a class="boton" href='user_home.php'> Volver atras</a></li>
            </ul>
        </div>
        <div class="dos">
            <ul class ="menu">
                <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>

            </ul>
        </div>

    </div>

</header>


<main class="img">
<?php 
    
    echo "<div class='todo'>";
        // $enlacebien=("userimages/".$_SESSION["usuari"].".txt");
        // $fp = fopen($enlacebien, "r");
        $id= 0;
    $carpeta = $enlacebien;
 
        // Obtener la lista de archivos de la carpeta
    $archivos = scandir($enlacebien);

// Mostrar las imágenes en la página
    foreach ($archivos as $archivo) {
  // Saltar los archivos ocultos
     if ($archivo[0] === '.') continue;
  
  // Obtener la extensión del archivo
    $extension = pathinfo($archivo, PATHINFO_EXTENSION);

  // Mostrar solo las imágenes
    if (in_array($extension, array('jpg', 'jpeg', 'png'))) {
        echo "<div class='ubo'>";
        echo '<img src=' . $carpeta . '/' . $archivo . '>';
        
        echo "<a class='Borra' href='process_borrar_imagen.php?id=".$archivo."'> Borrar</a> ";
        echo "<a class='Token' href='Crear_Token.php?id=".$archivo."'> Crear Token</a> ";
        echo "</div>";
  }
}

        
    //     while ($imagenes = mysqli_fetch_array($quiero)){
    //         $imagen=$imagenes[1];
        
    //         if (!$imagen=""){
             
    //             echo "<div class='ubo'>";
    //                 $imagen=$imagenes[1];
                 
    //                 echo "<img src='$imagen'>";
    //                 echo $imagenes[0]."<a class='Borra' href='process_borrar_imagen.php?nombre=".$imagenes[0]."'> Borrar</a> ";
    //             echo "</div>";
    //             $id+=1;

    //     }
    // }
    echo"<div>";

?>
</main>

<footer>
    <p> Copyright Helena 2023 </p>


</footer>
</body>
</html>
