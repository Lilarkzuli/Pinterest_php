
<?php 
session_start();

$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");
if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;

}
$nom=$_SESSION["usuari"];
$resultat = mysqli_query($enlace, "SELECT * FROM users where name='$nom'");

$nomarchivo=$_FILES['url']['name'];
if (strpos($_FILES['url']['name'], ' ') !== false) {


    $nomarchivo=str_replace(' ', '', $nomarchivo);
}

$dato=mysqli_fetch_array($resultat);
$id=$dato[0];
$espacio=$dato[6];




// $url = $_POST['url'];
$enlacebien=("uploads/".$nom);


$filetype= pathinfo($_FILES['url']['name'], PATHINFO_EXTENSION);
$fecha=date('Y-m-d');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Home.css">
    <link rel="stylesheet" href="Css/Principal.css">
    
    <title>Document</title>
</head>
<body>
    <header>
    <h2> Esto es un pinterest de mierda salu2</h2>
    <div class="cent">

        <div class="uno">

            <h3>Subir Imagen</h3>

        </DIV>


        <div class="dos">
            <li class="persona"><p class="pers"> Bienvenido/a,<?=$_SESSION["usuari"];?></p></li>
        
        </DIV>
    </div>
    </header>

<main>
<?php
$acabar=false;

echo "<div class='mensaje'>";



if ($nomarchivo==""){
  
    echo "<p class='texto'>no hay nada en la imagen, vuelve y intentalo de nuevo </p><br>";
    $acabar=true;

 }


$file_size = $_FILES["url"]["size"] / 1024;
$cambio = $espacio - $file_size;
$imagen="INSERT INTO images VALUES ( DEFAULT ,'$nomarchivo', '$enlacebien','$file_size','$id','$fecha' )";




$cambi=("UPDATE users set quota='$cambio' where name='$nom'"); 


 if ($file_size > 2000) {
    
        echo "<p class='texto'>Sorry, your file is too large. </p>";

        $acabar=true;
 
 }


 if ($cambio==0){

    echo "<p class='texto'>Lo siento has superado tu quota, borra e intentalo de nuevo </p>";

    $acabar=true;
 }


if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg") {
echo $filetype;

  echo "<p class='texto'>Sorry, only JPG, JPEG, PNG files are allowed.</p>";
  
  $acabar=true;
  

}
if (file_exists($enlacebien) && is_file($enlacebien."/".$nomarchivo)) {
    echo "<p class='texto'>El archivo ya existe en la carpeta. </p>";
      
  $acabar=true;
}


if ($acabar==true){

     echo"<a class='boton' href='subir_imagenes.php'>Volver atras</a>";
     echo "</div>";
}



 else{

// Set the target directory.

// Get the name of the uploaded file.

echo  "<br>.$nomarchivo";
echo " <br>.$filetype";
echo " <br>.$cambio";
echo " <br>.$tamaño";
echo  "<br>. $file_size.<br>";
echo $_FILES["url"]["tmp_name"] ."<br>";
echo $target_file ."<br>";
echo "<br>.$espacio";



// Create a new file path.


if (!file_exists($enlacebien)){
    mkdir("uploads/".$_SESSION["usuari"],777,true);
    chown ($enlacebien, "www-data");
    chmod($enlacebien, 0777);

   
        
    if (move_uploaded_file($_FILES["url"]["tmp_name"], $enlacebien."/".$nomarchivo)) {
        $total=mysqli_query($enlace, $imagen);
        $cambiar=mysqli_query($enlace, $cambi);
        echo "<div class='mensaje'>";
        echo "Si no funciona  a la primera refresca la pagina y lo hara.<br>";    
        echo "La foto se registro en el servidor.<br>";
        echo "<p class='blanco'>se ha escrito correctamente</p>";
       
        echo"<li><a  class='boton' href='user_home.php'> Volver a home</a></li>";
        echo "</div>";
        }  
        
        
        
        else{
            echo "<div class='mensaje'>";
            echo "no se ha podido escribir en el servidor el archivo";

            echo $_FILES["url"]["error"];
            echo "</div>";
        }

    }



   
  
    
else{

  
    if (move_uploaded_file($_FILES["url"]["tmp_name"], $enlacebien."/".$nomarchivo)) {
       
        $total=mysqli_query($enlace, $imagen);
        $cambiar=mysqli_query($enlace, $cambi);
        echo "<div class='mensaje'>";
        echo "Si no funciona  a la primera refresca la pagina y lo hara.<br>";    
        echo "<p class='blanco'>La foto se registro en el servidor. </p><br>";
        echo "<p class='blanco'>se ha escrito correctamente</p>";
        
        echo"<li><a class='boton' href='user_home.php'> Volver a home</a></li>";
        echo "</div>";
     

        }  
        
        
        
    else{


        echo "<div class='mensaje'>";
            echo "no se ha podido escribir en el servidor el archivo";
            echo"<li><a class='boton' href='user_home.php'> Volver a home</a></li>";
        echo "</div>";    
           
    
        }

}

 }


// Move the uploaded file to the target directory.

// }
//    
    




?>


</main>

<footer>
    <p> Copyright Helena 2023 </p>


</footer>
</body>
</html>