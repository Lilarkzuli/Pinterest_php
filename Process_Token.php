<?php

session_start();


$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;

}

// NOMBREARCHIVO
$fechatim=$_POST["fecha"];
$fechastr=strtotime($fechatim);
$fecha=(int)$fechastr;

$archivo= $_POST["Archivo"];

$resul= mysqli_query($enlace, "SELECT * FROM images where filename='$archivo'");
$fila = mysqli_fetch_array($resul);
$date=date('Y-m-d');

$Carpeta = basename(__DIR__);

$idfoto=$fila[0];
$n=10;
function getName($n) {
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $randomString = '';
 
     for ($i = 0; $i < $n; $i++) {
         $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
     }
 
     return $randomString;
}
$token=getName($n); 
$tokens="INSERT INTO tokens VALUES ( '$token' ,'$idfoto', '$fecha','$date' )";



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

<main>
<?php



echo $fechatim;
echo $fechastr;
echo $archivo;
echo $idfoto;

if (!$fechatim)
{   
    echo "<div class='mensaje'>";
    echo  "<p class='mensaje'>no has introducido una fecha, vuelve atras y pon una </p>";
    
   

   $acabar=true;
}          

if ($fechatim < $date)
{   
    echo "<div class='mensaje'>";
    echo  "<p class='mensaje'>Esta fecha ya ha pasado </p>";
    
    
  
   $acabar=true;
}    

if ($acabar==true){

    echo"<li><a class='boton' href='user_mis_imagenes.php'> Volver atras</a></li>";
    echo "</div>";
}


else{
    
    
    $resultado=mysqli_query($enlace, $tokens);
    if (!$resultado){
        echo "<div class='mensaje'>";
         echo "<p class='mensaje'>registro fallido</p>
         <br>";
   
         echo "<li><a class='boton'  href='user_home.php'> Volver atras</a></li>";
         echo "</div>";
     }

    else{
        echo "<div class='mensaje'>";
         echo "<p class='mensaje'>registro completado </p><br> ";
         echo "<p class='mensaje'> aqui tienes la url </p><br>";
         echo "http://192.168.104.57/".$Carpeta."/Token.php?token=". $token;
         echo "</div>";

    }
}

?>


</main>

<footer>
    <p> Copyright Helena 2023 </p>


</footer>
</body>
</html>