<?php
/*$servidor="localhost";
$usuario="root";
$pwd="";
$BD="servicios_libres";*/

$servidor="mysql.hostinger.es";
$usuario="u635226489_user1";
$pwd="hernandez";
$BD="u635226489_serv";
$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
