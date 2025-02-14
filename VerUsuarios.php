<?php

$enlace=mysqli_connect("localhost", "root", "Password#9231", "DB2");

if (!$enlace){
    echo "Error en la base de datos" . mysqli_connect_error();
    exit;



}

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
   




    <table border="1">
    <tr><td>Id</td><td>Nom</td><td>Password</td></tr>
    <?php
    // Faig una consulta SQL a la base de dades
    $resultat = mysqli_query($enlace, "SELECT * FROM users");
    while ( $registre = mysqli_fetch_array($resultat) ) {
        echo "<tr>";
        echo "<td>" . $registre['id'] . "</td>";
        echo "<td>" . $registre['name'] . "</td>";
        echo "<td>" . $registre['password'] . "</td>";
        echo "</tr>";
    }
?>
</body>
</html>

