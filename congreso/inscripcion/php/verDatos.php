<?php

include "../fpdf/fpdf.php";
include "conexion.php";

/**
 * 
 */
 class MIPDF extends FPDF {
 	
 	public function Header() {
 		$this -> Image( "../img/LOGOS-EDUCACION.jpg" ,30 ,10 ,80 ,30);
 		$this -> SetFont('Arial' , 'b', '20');
 		$this -> Cell( 60, 5, "Direccion de Educacion Superior", 4, 10, 'c');
 		$this -> Ln(30);
 	}
 } 

$cabeceraT = array( "nombre", "apellido","dni","sede" );

 $MIPDF = new MIPDF();

 $MIPDF -> addPage();

for ($i = 0; $i < count($cabeceraT) ; $i++)
{
	$MIPDF -> SetFont( 'Arial' , 'B' , 12);
	$MIPDF -> SetTextColor( 155, 155, 155);
	$MIPDF -> Cell ( 50 , 10 , $cabeceraT[ $i ], 1, 0,'c',true );

}

 $MIPDF -> Ln(10);

 $consulta = mysql_query("SELECT * FROM inscripcion ORDER BY id DESC LIMIT 1");

 
 while ($datos = mysql_fetch_array($consulta)) {
 
 	$nombre = $datos [ 'nombre'];
 	$apellido = $datos [ 'apellido'];
 	$dni = $datos [ 'dni'];
 	$sede = $datos [ 'sede'];

 	
 	$MIPDF -> Cell ( 50, 10 , $nombre, 1, 0, 'c', true);
 	$MIPDF -> Cell ( 50, 10 , $apellido, 1, 0, 'c', true);
 	$MIPDF -> Cell ( 50, 10 , $dni, 1, 0, 'c', true);
 	$MIPDF -> Cell ( 50, 10 , $sede, 1, 0, 'c', true);
 	$MIPDF -> Ln(10);
 }

 $MIPDF -> Output();


?>