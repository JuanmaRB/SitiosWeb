
<div id="body">
<?php 
include("../repo/modulos/login/comprobar.php");
?>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd1.php";
		
		$titulo = $_POST['titulo'];$tipo = $_POST['tipo'];$numero = $_POST['numero'];$publicado = $_POST['publicado']; $autor = $_POST['autor']; $fecha = $_POST['fecha']; $resumen = $_POST['resumen']; $coleccion = $_POST['coleccion'];$modifica = $_POST['modifica'];$modificada_por = $_POST['modificada_por'];$estado = $_POST['estado'];$geografico = $_POST['geografico']; 
		$file = $_POST['fileUpload'];
		
		$consulta = "insert into informacion values (null,'".$titulo."','".$tipo."','".$numero."','".$publicada."','".$autor."','".$fecha."','".$resumen."','".$coleccion."','".$modifica."','".$modificada_por."','".$estado."','".$geografico."','".$file."')";
		
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
	
	<table width="600" height="25" border="0" cellpadding="1" cellspacing="1" id="borde-redon">  


	

	<tr>

		<td width="15" >Titulo: </td>
		
		<td width="15" >Tipo:</td>

	</tr>
	<tr>
		<td><input type="text" name="titulo" title="Breve referencia al tema en no mas de 100 caracteres" onChange="conMayusculas(this)"/> </td>
		
		<td><input type="text" name="tipo" title=" Indicar con: LE (ley), DE (decreto), RM (resolución ministerial), DI (disposición),"onChange="conMayusculas(this)"/></td>
	</tr>	




<tr>
		<td>N&uacute;mero:</td>

		<td>P&uacute;blicado en: </td>

</tr>

<tr>

	
		<td><input type"text" name="numero" title="Completar hacia el márgen izquierdo con ceros hasta 5 dígitos" onChange="conMayusculas(this)"/></td>

		<td><input type"text" name="publicada" title="Indicar con: B.O. 12/08/24 (boletin oficial), LEG.EDUC.Nº, HOJA INFORMATIVA Nº" onChange="conMayusculas(this)" /></td>
		

</tr>

<tr>

		<td>Autor:</td>

		<td>  Fecha:</td>
	</tr>	
	


	
</tr>

		
		<td><input type="text" name="autor" title="M.E.C.C y T" onChange="conMayusculas(this)" /></td>

		

		<td><input type="date" name="fecha" title="Indicar con DD/MM/AAAA" placeholder="12/08/2010"/></td>


</tr>

<tr>
<td>estado </td>

		<td>Resumen:</td>
</tr>

<tr>


		<td>
      <label><input type="radio" name="estado"  value="VIGENTE" <?php echo $row["estado"]; ?>/>Vigente</label>
      
  <label><input type="radio" name="estado"  value="MODIFICADA" <?php echo $row["estado"]; ?>/>Modificada</label>
      
  <label><input type="radio" name="estado"  value="DEROGADA" <?php echo $row["estado"]; ?>/>Derogada</label>
</td>


<td><input type"text" name="resumen" title="Descripción de lo dispuesto en la norma en no mas de 350 caracteres" onChange="conMayusculas(this)"/></td>



</tr>


<tr>



		<td>Descriptor</td>

	<td>	Modifica A </td>


</tr>

<tr>

		<td><input type"tex" name="coleccion" title="Visete la pagina que figura abajo para ver el tesauro" onChange="conMayusculas(this)"/> </td>
	   
		<td> <input type"text" name="modifica"  title="A que instrumento modifica" onChange="conMayusculas(this)"/></td>


</tr>



<tr>
	<td>	Modificada por</td>

		

		<td> Descriptor gegráfico</td>


</tr>
<tr>

		<td><input type"text" name="modificada_por" title="por que instrumento es o fue modificado" onChange="conMayusculas(this)"/></td>

		
		<td><input type"text" name="geografico" title="Chaco" onChange="conMayusculas(this)" /></td>
</tr>





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
	</td>
	    
	  </tr>
	</table>
  </form>
  </div>
</div>