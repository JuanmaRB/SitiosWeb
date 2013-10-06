<html>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="ministerio de educaci&oacute;n cultura ciencia y tecnologia,direccion de documentacion y produccion de contenidos,profesor jose simon, olga arguello, juan daniel estevez, base de datos, documentos digitales,chaco-resistencia." />
	
		<link href="../../mas/css/css.css" rel="stylesheet" type="text/css">
<head>
						<title>Base de Datos </title>
		
		<link text="text/css" rel="stylesheet" href="mas/css/css.css" />
		<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
		
		<script src="mas/js/funciones.js" type="text/javascript" language="javascript"></script>
		
</head>
	
	<body>
	
	
	<div id="body">
		 <pre id="link"> <h3>Inicio</h3></pre><hr />
	   <table width="700" cellspacing="15" align="center" cellpadding="2"  border="1">
	   <tr>
	  <td>
	    
	    <p> <form action="index.php" action="get" name="formBuscar" id="formBuscar">
	      <input type="hidden" name="mod" value="buscador">
	      <input type="hidden" name="acc" value="buscador">
	      <input class="inputB" name="q" id="q" type="text" size="20" value="">
        <a href="javascript:void(0)" onClick="document.formBuscar.submit()" >Buscar</a></p>	  </td></tr>
	      <br>
	      
	 
	

<?php
		require_once "config/bbdd2.php";
		$consulta = "SELECT * FROM informacion";
		$res = mysql_query($consulta);
	?>
			<?php while($row=mysql_fetch_array($res)): ?>
		

			<tr bgcolor="#BBDDDD">
			<td>T&iacute;tulo:</td>
			<td>Tipo</td>
			<td>N&uacute;mero:</td>
			<td>Resumen:</td>
			<td>Documento:</td>
			
			</tr>
			<tr>
			<td><?php echo $row['titulo']; ?></td>
			<td><?php echo $row['tipo']; ?> </td>
			
			<td><?php echo $row['numero']; ?> </td>
	        
			<td><?php echo $row['resumen']; ?> </td>
						
			<td><?php// echo $row['documento']; ?><a href="?mod=buscador&acc=detalle&id=<?php echo $row['id']; ?>"><img src="mas/img/ver.png" width="79" height="48"></a></td>
			</tr>
		
	
		<?php endwhile; ?>
	
	</table>
	</div>