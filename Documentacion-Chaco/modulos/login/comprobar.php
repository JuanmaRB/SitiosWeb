<?php

if($_SESSION["loginTrue"]){
	echo "SESION ACTIVA..";
	//NO HAGO NADA POR QUE ESTOY LOGUEADO

}else{
?>
	<script type="text/javascript" language="javascript"> 
			alert ("Debes iniciar sessi�n");
			location.href ='index.php?mod=login&acc=login';<!-- probar si anda esto -->
	</script>
<?php
	echo "NO ESTAS Login ... ";
	session_destroy();
	die;
}
?>
