<?php
include "conexion.php";
$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];
$sql="INSERT INTO servicios VALUES('','$nom','$dir','$rfc','$tel','$clasif','$foto','$lat','$longit')";
$reg=mysqli_query($conn,$sql);

if($reg){
echo "Datos Recibidos en el Servidor: Nombre: ".$nom."\nDireccion: ".$dir."\nRFC: ".$rfc.
"\nTel: ".$tel."\nClasificacion: ".$clasif."\nFoto: ".$foto."\nLatitud: ".$lat."\nLongitud: ".$longit;
}else{
	echo"Error al registrar los datos".mysqli_error();

}
mysqli_close($conn);

?>