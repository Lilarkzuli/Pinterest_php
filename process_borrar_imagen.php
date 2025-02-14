
<?php 
session_start();

$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");


if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;

}
$nom=$_SESSION["usuari"];
$borrar=$_GET['id'];
$resultat = mysqli_query($enlace, "SELECT * FROM users where name='$nom'");
$dato=mysqli_fetch_array($resultat);
$id=$dato[0];
$espacio=$dato[6];

$imagen = mysqli_query($enlace, "SELECT * FROM images where filename='$borrar' and user_id = '$id'");
$info=mysqli_fetch_array($imagen);
$idfoto=$info[0];

$borra= "Delete from images where user_id ='$id' and filename='$borrar'";
$borratok= "Delete from tokens where file_id ='$idfoto' ";
$nom=$_SESSION["usuari"];
$enlacebien=("uploads/".$nom."/");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Principal.css">
    <link rel="stylesheet" href="Css/Home.css">
    <title>Document</title>
</head>
<body>
<header>
<h2> Esto es un pinterest de mierda salu2</h2>
<div class="cent">

        <div class="uno">

            <li><a class="boton" href="user_home.php">Home</a><br></li>

        </div>
        <div class="dos">
            <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>
        
        </DIV>
        

</div>
</header>
<main>
<?php	

$usuari=$_SESSION["usuari"];


// $cont= 0;
// $contenido= "";


echo "<div class='mensaje'>";

if (isset($_GET['id'])) {
    $nombre_archivo = $_GET['id'];
 
    $archivo = $enlacebien  . $nombre_archivo;
    
    $espacio_archivo=filesize($archivo)/1024;
    print_r($espacio_archivo);
    print_r($espacio);
    $total=$espacio + $espacio_archivo;
    print_r($total);
 



    print_r($archivo);
    if (file_exists($archivo)) {
      unlink($archivo);
      $acab=mysqli_query($enlace, $borratok);
      $resul=mysqli_query($enlace, $borra);

      if (!$resul){
        echo " <p class='mensaje'> La imagen no ha podido ser borrada.</p>" ;
        echo "<li><a class='boton' href='user_mis_imagenes.php'>Home</a><br></li>";
        "</div>";
   
      }

      else{
        $cambi=("UPDATE users set quota='$total' where name='$nom'"); 
        $cambiar=mysqli_query($enlace, $cambi);
        echo "<p class='mensaje'>La imagen ha sido eliminada correctamente.</p>";
        echo "<li><a class='boton' href='user_mis_imagenes.php'>Home</a><br></li>";
  
        echo "</div>";
     
      }

    } else {
      echo " <p class='mensaje'> La imagen no existe.</p>" ;
      "</div>";
    }
  }




    

//      echo "<p class='borrar'>El Archivo no se ha podido borrar</p><br>";
// }


// else{
//     echo "<p class='borrar'>El Archivo se ha  borrado</p><br>";
// }
// $enlacebien = "userimages/".$_SESSION["usuari"].".txt";
// $fichero = fopen($enlacebien,"r");

// while (!feof($fichero)) {
//     $link=fgets($fichero);
//     if ($id != $cont){
       
//         $contenido = $contenido . $link;
        
  
        
//         $cont+=1;
        
//         }
            

     

//     else {
//             $cont+=1;
//         }
//     }


    

// fclose($fichero);   
//     $enlacebien= "userimages/" .$_SESSION["usuari"].".txt";
//     $fichero2 = fopen($enlacebien, "w");
//     fwrite($fichero2, $contenido);
//     fclose($fichero2);

//     echo "<p class='borrar'>El fitxer s'ha modificat</p><br>";


   

?>
</main>

<footer>
    <p> Copyright Helena 2023 </p>

</footer>
</body>
</html>


