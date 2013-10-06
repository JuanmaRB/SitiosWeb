<div id="bland2">

<?php 
	require_once "config/bbdd1.php"; 
	$consulta = "select * from inscripcion where id ='".$_GET['id']."'";
	$query = mysql_query($consulta);
?>


<?php if($row = mysql_fetch_array($query)):?>

<div id="fecha1">
<blockquote>
<P>N&uacute;mero inscripci&oacute;n:</p>
<?php echo $row['id'];?> 
<br>
<br>
<p>Nombre:</p> <?php echo htmlentities ($row['nombre'],null,"UTF-8"); ?>
<br>
<br>
<p>Apellido:</p><?php echo htmlentities($row['apellido'],null,"UTF-8");?>
<br>
<br>
<p>DNI:</p><?php echo $row['dni'];?>
<br>
<br>	
<p>Sede:</p><?php echo $row['sede'];?>
<br>
<br>
<p>Tel&eacute;fono</p><?php echo $row['tele'];?>
<br>
<br>
<p>Domicilio:</p><?php echo $row['domi']; ?>
<br>
<br>
<p>E-mail:	</p><?php echo $row['mail'];?> 
<br>
<br>
<p>T&iacute;tulo:</p><?php echo $row['titu'];?> 
<br>
<br>
<p>Instituci&oacute;n:</p><?php echo $row['insti'];?> 
<br>
<br>
<p>Otros t&iacute;tulos:</p><?php echo $row['otro'];?> 
<br>
<br>
<p>Instituci&oacute;n:</p><?php echo $row['insti2'];?> 
<br>
<br>	
<p>Datos laborales:</p>
<br>
<br>
<p>Trabaja:</p><?php echo $row['sino'];?> 
<br>
<br>
<p>Instituci&oacute;n:</p><?php echo $row['insti3'];?> 
<br>
<br>	
<p>Cargo:</p><br><?php echo $row['cargo'];?> 
<br>
<br>
<p>localidad de la instituci&oacute;n:</p><?php echo $row['loca2'];?> 
<br>
<br>
<p>Labor socio educativa</p><?php echo $row['insti4'];?> 
<br>
<br>
<p>Carta Presentaci&oacute;n:</p><?php echo $row['carta'];?> 
<br>
<br>
<br>
<br>
</blockquote>
<!--<p>Ver / Descargar Documento:	<br><a href="../repo/modulos/buscador/documentos/<?php// echo $row['documento'];?>" id="link" target="_blank"><img src="mas/img/GIFPDF.jpg"></a>-->
</div>

<?php endif; ?>
 
</div>
