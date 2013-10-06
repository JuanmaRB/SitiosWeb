<?php 
	require_once "config/bbdd2.php"; 
	$consulta = "select * from informacion where id ='".$_GET['id']."'";
	$query = mysql_query($consulta);
?>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
<div id="body">

<?php if($row = mysql_fetch_array($query)):?>
<table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">


<tr bgcolor="e9e9e9">
<td class="tit-verde">Id:</td> <td class="tit-verde">T&iacute;tulo:</td><td class="tit-verde">Tipo </td> <td class="tit-verde"> N&uacute;mero:</td> <td class="tit-verde"> P&uacute;blicado en: </td>
</tr>

<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['id']; ?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['titulo']; ?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['tipo'];?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['numero'];?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['publicada'];?></div></td>
</tr>


<tr bgcolor="e9e9e9">
<td class="tit-verde">Autor:</td> 
<td class="tit-verde">Fecha:</td>
<td class="tit-verde">Resumen:</td>
<td class="tit-verde">Descriptores: </td>
<td class="tit-verde">Modifica A:</td>
</tr>


<tr>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['autor']; ?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['fecha']; ?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['resumen'] ;?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['coleccion'];?></div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['modifica'];?> </div></td>
</tr>


<tr bgcolor="e9e9e9">
<td class="tit-verde">Modificada Por:</td>
<td class="tit-verde">Estado: </td>
<td class="tit-verde"> Geogr&aacute;fico:</td>
<td class="tit-verde">Click Para Eliminar:</td>
<td class="tit-verde">Click Para Cancelar:</td>
</tr>

<tr>

<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['modificada_por'];?> </div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['estado'];?> </div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><?php echo $row['geografico'];?>   </div></td>
<td class="texto-chico"><div align="left" class="texto-comun"><a href="index.php?mod=buscador&acc=eliminar&id=<?php echo $row['id']; ?>" ><img src="mas/img/eliminar.png" width="30"></a></div>
<td class="texto-chico"><div align="left" class="texto-comun"><a href="index.php?mod=inicio&acc=inicio&id=<?php echo $row['id']; ?>" ><img src="mas/img/editar.png" width="30"></a></div>
</tr>


		
<?php endif; ?>
		
  </table>
</div>
