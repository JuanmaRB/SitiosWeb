<?php 
include("../repo/modulos/login/comprobar.php");
?>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd2.php";
		
		$titulo = $_POST['titulo']; $autor = $_POST['autor']; $fecha = $_POST['fecha']; $resumen = $_POST['resumen']; $coleccion = $_POST['coleccion']; 
		$file = $_POST['fileUpload'];
		
		$consulta = "insert into informacion values (null,'".$titulo."','".$autor."','".$fecha."','".$resumen."','".$coleccion."','".$file."')";
		
		$query = mysql_query($consulta);
		
		if(!$query):
	?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos no fueron grabados.");
			location.href="index.php?mod=buscador&acc=cargar";
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
	<script language=""="JavaScript">
    function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}
</script>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
<div id="body"> 
Cargar <!--index.php?mod=buscador&acc=grabar-->
<form action="" method="post" name="formNoticia" enctype="multipart/form-data">
	<table width="837" height="234" align="center">
	<tr>
	  <td><!-- titulo: &nbsp;&nbsp;&nbsp; &nbsp;
	    <label>Nombre:</label><input input="text" name="nombre" value="" onChange="conMayusculas(this)">-->
		<label>Titulo:</label><input type="text" name="titulo" onChange="conMayusculas(this)"/></td></tr>
	<tr>
	  <td><!--autor:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;-->
	    <label>Autor:</label><input type="text" name="autor" title="M.E.C.C y T" onChange="conMayusculas(this)" placeholder="algo"/></td></tr>
	<tr><!--placeholder="algo"-->
	  <td>Fecha:
	    <input type="date" name="fecha" placeholder="12/08/2010"/></td></tr>
	<tr>
	  <td><!--resumen:&nbsp;-->
	    <label>Resumen:</label><input type"text" name="resumen" title="resumen" onChange="conMayusculas(this)"/></td></tr>
	<tr><td><!--coleccion:&nbsp;&nbsp;--><label>Coleccion:</label><input type"tex" name="coleccion" onChange="conMayusculas(this)"/></td></tr>
	 
	<?php
	if(isset($_POST["btoSubir"])){
		$src = $_FILES["documento"]["tmp_name"];
		$dst = "modulos/buscador/documentos/".$_FILES["documento"]["name"];
		if(!move_uploaded_file($src,$dst)){
			exit($dst);
			echo "<script type='text/javascript'> location.href='index.php?mod=buscador&acc=cargar';</script>";
			exit();
		}
		$fileN = $_FILES["documento"]["name"];
		echo "<tr><td>Documento: $fileN <input type='hidden' name='fileUpload' value='$fileN'></td></tr>";
	}else{
		echo "<tr><td><fieldset><legend>Documento</legend><input type='file' name='documento'/></fieldset></td></tr>
			  <tr><td><fieldset><legend>Imagen</legend><input type='file' name='image'/></fieldset><br><input type='submit' name='btoSubir' value='Subir' ></td></tr>";
	}
	?>
	<td  colspan="3" align="right">
	<input type="submit" value="Grabar" name="btoGrabar">
	<input type="button" value="Volver" onclick="history.back()">
	<input type="reset" value="Limpiar">
	</table>
  </form>
  </div>

