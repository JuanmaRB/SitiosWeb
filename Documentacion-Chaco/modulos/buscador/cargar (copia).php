<?php 
include("../repo/modulos/login/comprobar.php");
?>

<p> <h1>CARGAR DATOS EN COLUMNA 0 LA CUAL ESTA UBICADA EN LA PARTE SUPERIOR IZQUIERDA DE LA PANTALLA</h1></p>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd2.php";
		
		$titulo = $_POST['titulo'];$resumen = $_POST['resumen'];$texto = $_POST['texto'];$fecha = $_POST['fecha'];$file = $_POST['fileUpload'];
		
		$consulta = "insert into div1 values (null,'".$titulo."','".$resumen."','".$texto."','".$fecha."','".$file."')";
		
		$query = mysql_query($consulta);
		
		if(!$query):
	?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos no fueron grabados.");
			location.href="index.php?mod=inicio&acc=inicio";
		</script>
	<?php else: ?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos fueron grabados.");
			location.href="index.php?mod=buscador&acc=cargar";
		</script>
	<?php 
		endif; 
		
	}
	
	?>
	<style type="text/css">
<!--
.Estilo1 {
color: #0000FF;
}
.Estilo2 {color: #000000}

-->



</style>

<script ="text/javascript" language="javascript">
function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>


<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />


 

	<form action="" method="post" name="formNoticia" enctype="multipart/form-data">
	
	<table width="600" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">  


	

	<tr bgcolor="e9e9e9">

		<td width="15" >Titulo: </td>
		
		<td width="15" >resumen:</td>
		
		<td>texto:</td>



		<td>  Fecha:</td>
		
		
	
</tr>

		
	<tr>
		<td><input type="text" name="titulo" /> </td>
		
		<td><input type="text" name="resumen" /></td>
	
		<td><input type"text" name="texto" /></td>

		<td><input type="date" name="fecha" title="Indicar con DD/MM/AAAA" placeholder="12/08/2010"/></td>


</tr>
</table>


<tr bgcolor="e9e9e9">
	<td>	Documento</td>
	<td></td>

<?php

	if(isset($_POST["btoSubir"])){
		$src = $_FILES["documento"]["tmp_name"];
		$dst = "modulos/buscador/documentos/".utf8_decode($_FILES["documento"]["name"]);
		if(!move_uploaded_file($src,$dst)){
			exit($dst);
			echo "<script type='text/javascript'> location.href='index.php?mod=buscador&acc=cargar';</script>";
			exit();
		}
		$fileN = $_FILES["documento"]["name"];
		echo "<tr><td>Documento: $fileN <input type='hidden' name='fileUpload' value='$fileN'></td></tr>";
	}else{
		echo "<tr><td><input type='file' name='documento'/>
			  <input type='submit' name='btoSubir' value='Subir' >			 
			  </td>      ";
	}
	?>

	<td  colspan="3" align="right">
	<input type="submit" value="Grabar" name="btoGrabar">
	    <input type="button" value="Volver" onclick="history.back()">
	    <input type="reset" value="Limpiar">
	    <li><a href="index.php?mod=inicio&acc=inicio">inicio</a></li>
	    <li>	<a href="index.php?mod=buscador&acc=columnas">columnas</a></li>
	</td>
	    
	  </tr>
	</table>
  </form>
  </div>
