<?php



$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;

}

// NOMBREARCHIVO
$toke= $_GET['token'];


$tokens="select * from tokens where token='$toke'";

$resultado=mysqli_query($enlace, $tokens);
$info=mysqli_fetch_array($resultado);

$token=$info[0];
$file_id=$info[1];
$expiracion=$info[2];



$Foto= "select * from images where id ='$file_id'";

$Foto=mysqli_query($enlace, $Foto);
$Datos_Foto=mysqli_fetch_array($Foto);

$id=$Datos_Foto[0];
$filename=$Datos_Foto[1];
$filepath=$Datos_Foto[2];

$date = date('Y-m-d', $expiracion);

$fecha=date('Y-m-d');


$borrar= "Delete from tokens where token=$token'";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <link rel="stylesheet" href="Css/Home.css">
    <link rel="stylesheet" href="Css/Imagenes.css">
   
    <title>Document</title>
</head>
<body>
    <header>
    <h2> Esto es un pinterest de mierda salu2</h2>
    <div class="cent">
    <h3> Descarga </h3>
        <div class="uno">
            <ul class ="menu">
                <li><a  class="boton" href='Index.php'> Volver atras</a></li>
            </ul>
        </div>
        <div class="dos">
            <ul class ="menu">
                

            </ul>
        </div>

    </div>
    </header>

<main>
<?php

echo $nose ."<br>";
echo $nose2."<br>";


// echo " $token";
// echo $file_id."<br>";

// echo $expiracion."<br>";;
// echo $date."<br>";
// echo $fecha;

// echo $filepath;
// echo $filename;


if (!$token){
    echo "<div class='mensaje'>";
     echo "<p class='texto'>lo siento el archivo buscado no existe</p>";

    $acabar=true;


}


 if ($fecha < $fechaexp)

{

    echo "<div class='mensaje'>";
     echo "<p class='texto'>lo siento ha pasado el tiempo limite</p>";
     $resul=mysqli_query($enlace, $borrar);

    $acabar=true;


}




 if ($acabar==true){


    echo"<p class='texto'>Pidele a quien ha subido el archivo que lo ponga de nuevo</p>";
    echo"<a class='boton' href='Index.php'>Home</a>";
    echo "</div>";
 }



 else{
    
    echo "</div>";
    echo "<div class='ubo2'  >";
    $rutaImagen = $filepath . '/' . $filename;

    echo '<img  class="grande" src="' . $rutaImagen . '" alt="Imagen">';

    $botonDescarga = '<a href="' . $rutaImagen . '" download>Descargar imagen</a>';

    echo "<a class='descarga' $botonDescarga </a>";
    echo "</div>";





 }



?>


</main>

<footer>
    <p> Copyright Helena 2023 </p>


</footer>
</body>
</html>
