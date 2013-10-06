<?php
	include("../repo/modulos/login/comprobar.php");
	require_once "config/bbdd1.php"; 
	$consulta = "delete from informacion where id = '".$_GET['id']."'";
	$query = mysql_query($consulta);
	if(!$query):
?>
	<script type="text/javascript" >
		alert("NO se Elimino.");
		location.href="index.php?mod=buscador&acc=buscadorEditar";
	</script>
<?php else: ?>
	<script type="text/javascript" >
		alert("Se Elimino.");
		location.href="index.php?mod=inicio&acc=inicio";
	</script>
<?php endif; ?>
