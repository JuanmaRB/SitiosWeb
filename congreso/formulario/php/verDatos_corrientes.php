<?php

include "../fpdf/fpdf.php";
include "conexion.php";

/**
 * 
 */
 class MIPDF extends FPDF {
 	
 	public function Header() {
 		$this -> Image( "../img/bienal.png" ,30 ,10 ,150 ,30);
 		$this -> SetFont('Arial' , 'b', '14');
 		//$this -> Cell( 30, 1, utf8_decode("Dirección de Educación Superiór"), 4, 1, 'c');
 		$this -> Ln(30);
 	}
 } 

//$cabeceraT = array( "nombre", "apellido","dni","sede" );

 $MIPDF = new MIPDF();

 $MIPDF -> addPage();

//for ($i = 0; $i < count($cabeceraT) ; $i++)
{
	$MIPDF -> SetFont( 'Arial' , 'B' , 12);
	$MIPDF -> SetTextColor( 155, 155, 155);
	//$MIPDF -> Cell ( 100 , 10 , $cabeceraT[ $i ], 1, 1,'l',false);

}

 $MIPDF -> Ln(10);
$eldni = $_GET['eldni'];
 $consulta = mysql_query("SELECT * FROM corrientes where dni = '".$eldni."' ");

//echo "SELECT * FROM inscripcion where dni = '".$eldni."' ";
//die; 
 while ($datos = mysql_fetch_array($consulta)) {
 	$id = $datos ['id'];
 	$apellido = $datos [ 'apellido'];
 	$nombre = $datos [ 'nombre'];
 	$dni = $datos [ 'dni'];
 //	$chaco = $datos ['chaco'];
 //	$sede = $datos [ 'sede'];
 	

 	$MIPDF -> Cell (120, 10,utf8_decode("La Dirección de Educación Superiór inscribe a:  "), 12, true);
 	$MIPDF -> Ln(10);

 	$MIPDF -> Cell (0, 10,"Apellido : ".utf8_decode($apellido)."" ,12);
 	$MIPDF -> Ln(10);


 	$MIPDF -> Cell (0, 10,"Nombre : ".utf8_decode($nombre)."" ,12);//( 0, 10 , $nombre, 1, 1, 'r', false);
 	$MIPDF -> Ln(10);

 	
 	$MIPDF -> Cell (0, 10,"DNI : ".utf8_decode($dni)."" ,12);
 	//	$MIPDF -> Cell ( 0, 10 , $dni, 1, 1, 'r', false);
 	$MIPDF -> Ln(10);

 	
//
 	$MIPDF -> Cell (0, 10,"Provincia : Corrientes".utf8_decode($corrientes)."" ,12);
	$MIPDF -> Ln(10);

	//$MIPDF -> Cell (0, 10,"localidad : ".utf8_decode($sede)."" ,12);
	//$MIPDF -> Ln(10);
 	
 	$MIPDF -> Cell (1, 10,utf8_decode("Nº inscripción:     ".utf8_decode($id)."") ,12, true);
 	$MIPDF -> Ln(10);
 	

 	//$MIPDF -> Cell (0, 10,utf8_decode("a la Bienal de Arte 2013 de Educación Superiór  ") , 12, true);
 	//$MIPDF -> Cell (0, 10,utf8_decode("a llevarse a cabo los días 29 - 30 - y 31 de Agosto de 2013") , 12, true);
 	
 	//$MIPDF -> Cell (0, 10,utf8_decode("Avenida Wilde Nº 1300") , 12, true);


 	//$MIPDF -> Cell (120, 10,utf8_decode("En el Domo del Centenario Resistencia - Chaco"), 12, true);
 //	$MIPDF -> Ln(10);
 	
 	////$MIPDF -> Cell (120, 10,utf8_decode(" !!ATENCIÓN!!   Para su acreditación llevar impreso este formulario de inscripción"), 12, true);
 	//$MIPDF -> Ln(10);
 	//$MIPDF -> Ln(10);
 	$MIPDF -> Ln(10);
 	//$MIPDF -> Cell ( 0, 10 , $sede, 1, 1, 'r', false);

 	}

 $MIPDF -> Output();


?>