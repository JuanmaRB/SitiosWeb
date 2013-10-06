<?php
include("../Documentacion-Chaco/modulos/login/comprobar.php");
 		require_once "config/bbdd1.php";
		
		if(isset($_POST["btoGrabar"])){

		$titulo = $_POST['titulo'];$resumen = $_POST['resumen'];$file = $_POST['fileUpload'];
		
		$consulta = "insert into div7 values (null,'".$titulo."','".$resumen."','".$file."')";
		
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
			location.href="index.php?mod=inicio&acc=inicio";
		</script>
	<?php endif;  
}	
	?>
<form action="" method="post" name="formNoticia" enctype="multipart/form-data">
	


<div style="width: 100%; heigth: 400px;">
	<textarea name="titulo" rows=5 cols=40>
		<?php $titulo; ?>
	</textarea>
	 </script>

  </div>

  <div>
<textarea name="resumen" rows=5 cols=40>
		<?php $resumen; ?>
	</textarea>
	 </script>

</div>



 
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
