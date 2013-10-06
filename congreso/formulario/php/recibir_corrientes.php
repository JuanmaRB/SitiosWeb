
<?php
include "conexion.php";


	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	//$chaco = $_POST['chaco'];
//	$sede = $_POST['sede'];
	
$insertar = mysql_query("INSERT INTO corrientes VALUES (null,'".$apellido."','".$nombre."','".$dni."')");

if ($insertar) {

	//echo(Registrado);
	//echo "<a href='../loguear.php' >Ver constancia</a>";
	echo "<a href='#' id='verPDF' >Ver PDF</a>";
}else{

	echo "mal";
}

 sleep( 1 );


?>
