
<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="user_home.php">Home</a><br>

<?php	

$usuari=$_SESSION["usuari"];

$id= $_GET["id"];
$cont= 1;
$contenido= "";



$enlacebien = "userimages/".$_SESSION["usuari"].".txt";
$fichero = fopen($enlacebien,"r");
   
while (!feof($fichero)) {
    if ($id != $cont){
        $contenido = $contenido . fgets($fichero);
        echo fgets($fichero);
        }
            

        $cont+=1;
    }
    $enlacebien= "userimages/" .$_SESSION["usuari"].".txt";
    $fichero = fopen($enlacebien, "w");
    fwrite($fichero, $contenido);
    fclose($fichero);

    echo "El fitxer s'ha modificat<br>";


   

?>
</body>
</html>


