
<?php
include "conexion.php";

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$sede = $_POST['sede'];
$insertar = mysql_query("INSERT INTO inscripcion VALUES (null,'".$nombre."','".$apellido."','".$dni."','".$sede."')");

if ($insertar) {
	echo "<a href='#' id='verPDF' >Ver PDF</a>";
}else{

	echo "mal";
}

 sleep( 1 );


?>
