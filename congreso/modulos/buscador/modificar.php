<div id="body">
<?php 
	include("../repo/modulos/login/comprobar.php");
	if ($_SESSION['permisos']!=1):
	
?>	
	<script type="text/javascript" language="javascript"> 
			alert ("Debes iniciar sessión");
			location.href ='index.php?mod=login&acc=loguear';
	</script>
<?php

		endif;
	require_once("config/bbdd2.php");
	$query = mysql_query("select * from informacion where id = ".$_GET["id"]);
if($row = mysql_fetch_array($query,MYSQL_ASSOC)):
?>

<script language=""="JavaScript">
    function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}



</script>

<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />

<div id="body">


<form action="index.php?mod=buscador&acc=actualizar" method="post" name="formNoticia">

<table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">


<tr bgcolor="e9e9e9">
<td class="tit-verde"> Id Registro:</td> <td class="tit-verde"> Titulo:</td> <td class="tit-verde"> Tipo:</td> <td class="tit-verde"> N&uacute;mero::</td> <td> P&uacute;blicado en:</td> </tr>

<tr> 
<td class="texto-comun"><input type="text" name="id" value="<?php echo htmlentities (substr ($row['id'],0,250),null,"UTF-8"); ?>"/></td> 
<td class="texto-comun"><input type="text" name="titulo" value="<?php echo htmlentities (substr ($row['titulo'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input type="text" name="tipo" value="<?php echo htmlentities (substr ($row['tipo'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input type="text" name="numero" value="<?php echo htmlentities (substr($row['numero'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td> 
<td class="texto-comun"><input type="text" name="publicada" value="<?php echo htmlentities (substr ($row['publicada'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
</tr>

<tr bgcolor="e9e9e9"> <td class="tit-verde"> Autor:</td><td class="tit-verde"> Fecha:</td> <td class="tit-verde"> Resumen:</td> <td class="tit-verde"> Descriptores:</td> <td class="tit-verde"> Modifica A:</td> </tr>

<tr>
<td class="texto-comun"><input type="text" name="autor" value="<?php echo htmlentities (substr($row['autor'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" /></td>
<td class="texto-comun"> <input type="date" name="fecha"  title="Indicar con DD/MM/AAAA" value="<?php echo htmlentities (substr($row['fecha'],0,250),null,"UTF-8"); ?>"/></td>
<td class="texto-comun"><input name="resumen" type="text" value="<?php echo htmlentities (substr ($row['resumen'],0,250),null,"UTF-8"); ?>"/></td>
<td class="texto-comun"><input type="text" name="coleccion" value="<?php echo htmlentities (substr($row['coleccion'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input name="modifica" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['modifica'],0,250),null,"UTF-8"); ?>"/></td>

</tr>

<tr bgcolor="e9e9e9"><td class="tit-verde"> Modificado Por:</td><td class="tit-verde"> Estado:</td><td class="tit-verde"> Descriptor Geogr&aacute;fico:</td><td class="tit-verde"> Documento:</td><td></td></tr>

<tr>
<td class="texto-comun"><input name="modificada_por" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['modificada_por'],0,250),null,"UTF-8"); ?>" /></td>
<td class="texto-comun"><input type="radio" name="estado" value="VIGENTE" <?php echo $row["estado"]; ?>/>Vigente<br>
<input type="radio" name="estado" value="MODIFICADA" <?php echo $row["estado"]; ?>/>Modificada <br>
<input type="radio" name="estado" value="DEROGADA" <?php echo $row["estado"]; ?>/>Derogada</td>


<td class="texto-comun"><input name="geografico" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['geografico'],0,250),null,"UTF-8"); ?>"/></td>
<td class="texto-comun"><input type="text" name="documento" value="<?php echo htmlentities(substr($row['documento'],0,250),null,"UTF-8"); ?>"/>	</td>
<td height="44" colspan="3" align="center" class="texto-comun">
<input type="button" value="Grabar" onclick="enviar('formNoticia')">
<input type="button" value="Volver" onclick="history.back()">
<input type="reset" value="Limpiar">
</td>
</tr>
</table>
</form>
<?php endif; ?>
</div>
</div>