<?php
	require_once "config/bbdd1.php";

	/*
	*selecciona todos los campos de la tabla usuarios donde usuario = a 
	*usuario que envia el formulario login 
	*/

	$consulta = "SELECT * FROM corrientes WHERE id";
	
	/*
	*envia la consulta a la base de datos
	*/

	$query = mysql_query($consulta);
	
	/*
	*cantidad registros que genero la consulta
	*/

	$numero = mysql_num_rows($query);
	
	if($numero >= 500){
		
?>

<script type="text/javascript" language="javascript"> 
			alert ("Número máximo de Inscriptos");
			location.href ='index.html';
</script>


<?php
	}else{
	/*
	*devuelve una matriz con los datos de la consulta
	*/
	
		$numero = mysql_fetch_array($query);
		$query["id"]=$numero['id'];
		/*
		*la matriz user contiene todos los datos de la consulta
		*/
	
		
	}
?>
        <script language='JavaScript'>;
		location.href ='formulario/index_corrientes.html';
		</script>;

