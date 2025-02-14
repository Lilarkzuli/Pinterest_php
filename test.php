<?php


    $enlace= mysqli_connect("localhost", "root", "Password#9231", "DB2");




    if (!$enlace){
        echo "No se ha podido connectar". mysqli_connect_error();

        
    }

    else{
        echo "Se ha podido conectar a la base";
    }




    echo date('d/M/y');



    $info=mysqli_query($enlace,"SELECT count(name) FROM users WHERE name='uwu'");


    $info2 =mysqli_fetch_array($info);

    echo $info2[0];
    echo $info;
?>


