
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
    <h2>Guardar Imagen</h2>
</body>
</html>

<?php
$acabar=false;


$url = $_POST['url'];

if ($url==""){
    echo "no hay nada en la imagen, vuelve y intentalo de nuevo<br>";
    $acabar=true;

}




else{

    $enlace='/userimages';

    $enlacebien=("userimages/".$_SESSION["usuari"].".txt");
    
}







$texto=substr($url , -4);


echo $texto;


echo $enlacebien;



if ($texto != ".png" && $texto != ".jpg"){


    echo "la imagen no acaba eb png ni en jpg, vuelve a intentarlo con un archivo correcto<br>";
    $acabar=true;

}


if ($acabar==true){

    echo"<a href='subir_imagenes.php'>Volver atras</a>";

}



else{


    if (is_file($enlacebien))
    {


        echo "hola";
        $fichero = fopen ($enlacebien,"a");
        fwrite($fichero, $url."\n");
        fclose($fichero);
        echo "se ha escrito correctamente";
        echo"<a href='user_home.php'> Volver atras</a>";
    
        
        

    }

    else 
    {
        echo "hola";
        $fichero = fopen ($enlacebien,"w");
        fwrite( $fichero, $url ."\n");
        fclose($fichero);
        echo "se ha escrito correctamente";
    
        echo"<a href='user_home.php'> Volver atras</a>";

    }


}





?>