<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.dirdocumentacion.com.ar">
<html xmlns="http://www.dirdocumentacion.com.ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documentación Chaco</title>
<meta name="keywords" content="M.E.C.C.y T, DIRECCION DE DOCUMENTACION CHACO, CENTRO DE DOCUMENTACION" />
<meta name="description" content="<M.E.C.C.y T, DIRECCION DE DOCUMENTACION CHACO, CENTRO DE DOCUMENTACION"/>
<link href="mas/img/favicon.ico" rel="icon" type="image/x-icon" />
<link href="mas/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="mas/css/tabcontent.css" />

<script type="text/javascript" src="mas/css/tabcontent.js"/></script>
<script type="text/javascript" src="mas/css/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="mas/js/sliderman.1.3.7.js"></script>
<link rel="stylesheet" type="text/css" href="mas/css/sliderman.css" />
<script type="text/javascript" src="mas/js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="mas/css/sliderman.css" />


<!--PRUEBA -->


	<!-- sliderman.js -->
	
	<!-- /sliderman.js -->
<!--PRUEBA-->
<!--<center><img src="mas/img/banner.jpg" width="1000" height="90"/></center>-->
<div id="localidad">&nbsp;&nbsp;&nbsp;Resistencia - Chaco &nbsp; Republica Argentina &nbsp;&nbsp;&nbsp; |	&nbsp;&nbsp;<script type="text/javascript">
				<!--
				var m_names = new Array("Diciembre","Enero", "Febrero", ">Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre");
				var d_names = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
				
				var currentTime = new Date()
				var day = currentTime.getDay()
				var month = currentTime.getMonth() + 1
				var date = currentTime.getDate()
				var year = currentTime.getFullYear()
				document.write( d_names[day] + ", " + date + " " + m_names[month] + " " + year + ", ")
				var currentTime = new Date()
				var hours = currentTime.getHours()
				var minutes = currentTime.getMinutes()
				if (minutes < 10){
				minutes = "0" + minutes
				}
				document.write(hours + ":" + minutes + " ")
				if(hours > 11){
				document.write("PM")
				} else {
				document.write("AM")
				}
				//-->
			</script> &nbsp;&nbsp;|&nbsp;&nbsp;Visitas <img src="http://juandanielestevez.com.ar/CounterFolder/counter.php?ARCH=counter&COUNT=10256"/>
<hr>
</div>
<div id="cabeza_titulo">

	<div aling="left">

<!--<img src="mas/img/banner.jpg" height="60px" width="1004">-->

</div>
</div>
<div id="galeri">
		<div id="examples_outer">
			
			<div id="slider_container_3">

				<div id="SliderName_3" class="SliderName_3">
					
					<img src="mas/img/gobernacionchaco.jpg">
					<img src="mas/img/educacionchaco.jpg">
					<img src="mas/img/documentacionchaco.jpg">
					<!--<img src="mas/img/dirdocumentacion.png">
					<img src="mas/img/zamudio.jpg">
					<img src="mas/img/06.jpg">
					<img src="mas/img/07.jpg">
					<img src="mas/img/08.jpg">
					<img src="mas/img/09.jpg">
					<img src="mas/img/10.jpg">-->
				</div>
				<div class="c"></div>

				<script type="text/javascript">

					demo3Effect1 = {name: 'myEffect31', top: true, move: true, duration: 400};
					demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400};
					demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400};
					demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400};
					demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 50, duration: 100, order: 'random', fade: true};
					demo3Effect6 = {name: 'myEffect36', rows: 2, cols: 4, delay: 100, duration: 400, order: 'random', fade: true, chess: true};

					effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];

					var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width: 1000, height: 200, effects: effectsDemo3, display: {autoplay: 3000}});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>

		<div class="c"></div>


</div>

<!--	barra menu  -->
       <div id="templatemo_menu"> 

<!---************prueba menu***********-->

<ul class="mi-menu">
  <li><a href="index.php"> Inicio </a>
  <ul>
  <li><a href="http://dirdocumentacion.blogspot.com.ar/" target="_blanck">BLOG</a>
    </ul>
    </li>
 <li> <a href="index.php?mod=buscador&acc=efemerides">Efemérides</a></li>
  
   <li><a href="index.php?mod=buscador&acc=derechos">Derechos Humanos</a>
    <ul>
      <li><a href="http://catedralibredeerechoshumanos.blogspot.com.ar/" target="_blanck"> Blog Cátedra libre</a></li>
      <li><a href="http://documentacionchaco.blogspot.com.ar/" target="_blanck">Blog Malvinas</a></li>
      </ul>
  </li>
 <li><a href="index.php?mod=buscador&acc=titulares">Titulares Educativos</a></li>
 <li><a href="index.php?mod=buscador&acc=reflexion">Reflexión y el Aula</a></li>
 <li><a href="index.php?mod=buscador&acc=catalogos">Cátalogos</a></li>

<?php if($_SESSION['permisos']==1): ?> 
<li><a href="index.php?mod=buscador&acc=columnas">cargar</a></li>  
<li><a href="index.php?mod=login&acc=logout">logout</a></li>     
<?php elseif($_SESSION['permisos']==0): ?>
<li><a href="index.php?mod=login&acc=loguear">Administracion</a></li> 
<?php endif; ?>


</ul>

        <!--menu nuevo-->
         
  
         
          
  
</div>

</head>