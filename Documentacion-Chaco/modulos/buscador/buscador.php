<link text="text/css" rel="stylesheet" href="mas/css/css.css" />
		<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />

<link text="text/css" rel="stylesheet" href="mas/Zebra_pagination/public/css/Zebra_pagination.css" />		
<?php

require_once "config/bbdd2.php"; 
// Aqui se incluye la conexion a la base de datos

//$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Rs = 5;// este numero es el numero de resultados que quieren que se vean por pagina pueden poner algo asi: $maxRows_Rs = 6; para ver paginas con 6 resultados

$pageNum_Rs = 0;

if (isset($_GET['pageNum_Rs'])) {

$pageNum_Rs = $_GET['pageNum_Rs'];

}

$startRow_Rs = $pageNum_Rs * $maxRows_Rs;


mysql_select_db($selectdb,$conectar);//llama a variable conexion selectdb

$query_Rs = "SELECT * FROM informacion WHERE 
					id like '%".$_GET['q']."%' OR
					titulo like '%".$_GET['q']."%' OR
					tipo like '%".$_GET['q']."%' OR
					numero like '%".$_GET['q']."%' OR
					publicada like '%".$_GET['q']."%' OR
					autor like '%".$_GET['q']."%' OR
					fecha   like '%".$_GET['q']."%' OR
					estado like '%".$_GET['q']."%' OR
					resumen like '%".$_GET['q']."%' OR
					coleccion like '%".$_GET['q']."%' OR
					modifica like '%".$_GET['q']."%' OR
					modificada_por like '%".$_GET['q']."%' OR
					geografico like '%".$_GET['q']."%' OR
					documento like'%".$_GET['q']."%'
					"; 

                    // SELECT Anterior

/*

*
**					
*					
					*/

//Continúa en la página siguiente

if ($_GET['q']) // Si existe la variable "id" en la barra url...

{

$id = $_GET['q'];

$query_Rs = "SELECT * FROM informacion WHERE id = '$id' ORDER BY id DESC";

}

//*BUSCADOR DE REGISTROS!*/

if ($_GET['q'])

{

$buscador = $_GET['q'];


$query_Rs ="SELECT * FROM informacion WHERE id LIKE \"%$buscador%\" OR titulo LIKE \"%$buscador%\" OR numero LIKE \"%$buscador%\" OR resumen LIKE \"%$buscador%\" OR coleccion LIKE \"%$buscador%\" ORDER BY id DESC" ;

}

$query_limit_Rs = sprintf("%s LIMIT %d, %d", $query_Rs, $startRow_Rs, $maxRows_Rs);

$Rs = mysql_query($query_limit_Rs, $conectar) or die(mysql_error());

$row_Rs = mysql_fetch_assoc($Rs);


if (isset($_GET['totalRows_Rs'])) {

$totalRows_Rs = $_GET['totalRows_Rs'];

} else {

$all_Rs = mysql_query($query_Rs);

$totalRows_Rs = mysql_num_rows($all_Rs);

}

$totalPages_Rs = ceil($totalRows_Rs/$maxRows_Rs)-1;

$queryString_Rs = "";

if (!empty($_SERVER['QUERY_STRING'])) {

$params = explode("&", $_SERVER['QUERY_STRING']);

$newParams = array();

foreach ($params as $param) {

if (stristr($param, "pageNum_Rs") == false &&

stristr($param, "totalRows_Rs") == false) {

array_push($newParams, $param);

}

}

if (count($newParams) != 0) {

$queryString_Rs = "&" . htmlentities(implode("&", $newParams));

}

}

$queryString_Rs = sprintf("&totalRows_Rs=%d%s", $totalRows_Rs, $queryString_Rs);

?>
<!--<table width="570" height="35" border="0" align="center" cellpadding="0" cellspacing="0">

<tr bgcolor="#fCfcfC">

bggolor=FCFCFC  color de la tabla formulario buscar
<td width="10" class="Estilo10"><p> </p> </td>-->

<!--<td width="442" class="Estilo10"><!--<img src="images/icn_arrow.gif" width="6" height="6"><span class="titulo-naranja"><strong>datos encontrados</strong></span>-->


<!--</td>-->

<!--<td width="318" class="txtNoticia"><div align="right" class="text-bordo">-->

<!--</div></td>-->

<!--
</table>


</tr>

</table>-->
<!--
<table width="770" border="0" aling="center" cellpadding="0" cellspacing="0">

<tr>

<td width="161" valign="top"><?php// include "includes/menu-izq.php"; ?></td>

<td width="609" valign="top"><table width="580" border="0" align="right" cellpadding="0" cellspacing="0">
-->


<!--tabla de los titulos de la tabla-->
<tr>

<td><table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">

<!--<form action="index.php" action="get" name="formBuscar" id="formBuscar">
	      <input type="hidden" name="mod" value="buscador">
	      <input type="hidden" name="acc" value="buscador">
	      <input class="inputB" name="q" id="q" type="text" size="20" value="">
        <a href="javascript:void(0)" onClick="document.formBuscar.submit()" >Buscar</a>-->
<tr bgcolor="e9e9e9">

<td width="105" class="tit-verde">Id Registro </td>

<td width="90" class="tit-verde">Título </td>

<td width="64" class="tit-verde">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo </td>

<td width="71" class="tit-verde">Número</td>

<td width="95" class="tit-verde">Fecha </td>

<td width="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estado </td>

<td width="129" class="tit-verde">Resumen</td>

<td width="164" class="enlaces"><div align="center" class="tit-verde">Documento</div></td>

</tr>

<!--</table>-->

<!--muestra los resultados-->

<!--<table width="575" border="2" align="center" cellpadding="2" cellspacing="2">-->

<?php do { ?>

<tr>
<td width="50" height="20" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['id']; ?></div></td>

<td width="300" height="20" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['titulo']; ?></div></td>

<td width="75" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['tipo']; ?></div></td>

<td width="100" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['numero']; ?></div></td>

<td width="100" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['fecha']; ?></div></td>

<td width="105" height="20" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['estado']; ?></div></td>

<td width="350" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['resumen']; ?></div></td>

<td width="50" class="texto-chico"><div align="left" class="texto-comun">

<div class="texto-comun" aling="left"><strong><br><br><a href="index.php?mod=buscador&acc=detalle&id=<?php echo $row_Rs['id']; ?>"><?php echo $row_Rs['documento']; ?> </a>

<!--*************editar************************-->
<?php
	if($_SESSION['permisos']==1):
	
	?>

<a href="index.php?mod=buscador&acc=modificar&id=<?php echo $row_Rs['id']; ?>" ><img src="mas/img/editar.png" width="30"></a>

<a href="index.php?mod=buscador&acc=eliminarSIoNO&id=<?php echo $row_Rs['id']; ?>" ><img src="mas/img/eliminar.png" width="30"></a>
	<?php
	elseif($_SESSION['permisos']==2):
	
	?>


   
  
  

	<?php
	else:;
	?>
 
	<?php endif; ?>

<!--*******************************************-->
</td>
</td></strong></div>

</div></td>

</tr>


<?php } while ($row_Rs = mysql_fetch_assoc($Rs));

if ($colorfila==0){


$color= "#DEDEBE";


$colorfila=1;


}else{


$color="#F0F0F0";


$colorfila=0;


}

?>

</table></td>

</tr>

<tr>

<td><table width="590" border="0" cellspacing="0" cellpadding="0">

<!--<tr>

<td height="10"><table width="590" height="34" border="0" cellpadding="0" cellspacing="0">
-->
<tr bgcolor="#FBFBFB">

<!--Continúa en la página siguiente-->
<td width="65" class="texto-chico"><div align="center">

<?php if ($pageNum_Rs > 0) { // Show if not first page ?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, 0, $queryString_Rs); ?>" class="txt-paginador"><strong>Primero</strong></a>

<?php } // Show if not first page ?>

</div></td>

<td width="80" class="texto-chico"><div align="center">

<?php if ($pageNum_Rs > 0) { // Show if not first page ?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, max(0, $pageNum_Rs - 1), $queryString_Rs); ?>" class="txt-paginador"><strong> &lt; Anterior</strong></a>

<?php } // Show if not first page ?>

</div></td>

<td width="312"><div align="center" class="titCategoria"><strong>

<?php

$last=$totalPages_Rs+1;

$current=$pageNum_Rs+1;

for ($i = 1; $i <= $last; $i++) {

if($current==$i){

echo $i." -";

}else{?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $i-1), $queryString_Rs); ?>"><? echo $i;?></a>

<?

}

}

?>

</strong></div></td>

<td width="77"><div align="right" class="txt-paginador">

<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>

<div align="center"><a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $pageNum_Rs + 1), $queryString_Rs); ?>" class="txt-paginador"><strong>Siguiente &gt; </strong></a> </div>

<?php } // Show if not last page ?>

</div></td>

<td width="56"><div align="right">

<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>

<div align="center" class="txt-paginador"><span class="titCategoria"><a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, $totalPages_Rs, $queryString_Rs); ?>" class="txt-paginador"><strong>Ultimo</strong></a></span> </div>

<?php } // Show if not last page ?>

</div></td>

</tr>

</table>

<!--Continúa en la página siguiente-->


<div align="left"></div>

<table width="590" border="0" align="left" cellpadding="0" cellspacing="0">

<tr>

<td height="26"><div align="right" class="text-marroncito"><strong>Est&aacute; en la Página:

<?

if($totalPages_Rs==0){

echo "0/0";

}else{

echo $pageNum_Rs+1;

echo "/";

echo $totalPages_Rs+1;

}

?>

</strong></div></td>

</tr>

</table></td>

</tr>

</table></td>

</tr>

</table></td>

</tr>

</table>

</body>

</html>

<?php

mysql_free_result($Rs);

?>
