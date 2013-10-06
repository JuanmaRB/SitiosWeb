<?php
	require_once "config/bbdd1.php";
	/*
	*selecciona todos los campos de la tabla usuarios donde usuario = a 
	*usuario que envia el formulario login 
	*/
	$consulta = "select * from user_inscrip where user = '".$_POST['user']."' and pass = '".sha1($_POST['pass'])."'";
	/*
	*envia la consulta a la base de datos
	*/
	$query = mysql_query($consulta);
	/*
	*cantidad registros que genero la consulta
	*/
	$numero = mysql_num_rows($query);
	
	if($numero == 0){

		
?>

<script type="text/javascript" language="javascript"> 
			alert ("Incorrecto");
			location.href ='index.php';
</script>
<?php
	}else{
	/*
	*devuelve una matriz con los datos de la consulta
	*/
	
		$user = mysql_fetch_array($query);
		$_SESSION["id_user"]=$user['id_user'];
		/*
		*la matriz user contiene todos los datos de la consulta
		*/
		$_SESSION["permisos"]=$user['permisos'];
		$_SESSION["Usuario"]=$_POST['user'];
		$_SESSION["loginTrue"]=True;
	}
?>
        <script language='JavaScript'>;
		location.href ='index.php?mod=inicio&acc=inicio';
		</script>;

