
<?php 


    session_start();

  
    echo"<a href='user_home.php'> Volver atras</a>";

    echo "<br>";
    
    echo "<br>";
    $enlacebien=("userimages/".$_SESSION["usuari"].".txt");
    $fp = fopen($enlacebien, "r");
    $id= 1;
    while (!feof($fp)){
        $url = fgets($fp);
        if ($url!=""){
            echo "$id ";
            echo "<img src=$url  border='0' width='300' height='200' margin-top:'30'>";
            echo "<a href='process_borrar_imagen.php?id=".$id."'> Borrar</a> ";
            $id+=1;

        }
    }


?>