<?php require_once "config/bbdd1.php"; ?>
<body>
<div id="templatemo_container">

	<div id="templatemo_top_panel">
        <div id="templatemo_sitetitle">
     
        </div>
        <div id="templatemo_searchbox">
            <!--formulario de busqueda-->
     <!--       <form action="#" method="get">
                <input name="search" type="radio" value="thissite" checked="checked" />
              this site <input type="radio" name="search" value="theweb" />
            the web <br />
                <input type="text" name="q" size="10" id="searchfield" title="searchfield" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>-->
        </div>
        <div id="templatemo_currentdate">
			<script type="text/javascript">
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
			</script>
            <p>Visitas
            <img src="http://juandanielestevez.com.ar/CounterFolder/counter.php?ARCH=counter&COUNT=10256"/></p>
        </div>
    </div> <!-- end of top panel -->
    
       <div id="templatemo_menu"> 
         <ul> <li><a href="index.php"  class="current">Inicio</a>
         </li> <li><a href="index.php?mod=inicio&acc=iniciocatalogos">Cátalogos</a></li>
          <li><a href="http://dirdocumentacion.blogspot.com.ar/" target="_blanck">BLOG</a>
          </li> <li><a href="#">Business</a></li>  
          <li><a href="#">Politics</a></li>  
          <li><a href="#">Entertainment</a></li> 
          
<?php if($_SESSION['permisos']==1): ?> 
<li><a href="index.php?mod=buscador&acc=columnas">cargar</a></li>  
<li><a href="index.php?mod=login&acc=logout">Cerrar sesion</a></li>     
<?php elseif($_SESSION['permisos']==0): ?>
<li><a href="index.php?mod=login&acc=loguear">Administracion</a></li> 
<?php endif; ?></ul> </ul>  
</div>
<!--columnas 1 2 3 7 -->
    
	<div id="templatemo_content">

    	<div id="templatemo_main_leftcol">
        	<div class="templatemo_leftcol_subcol">
            
            	<div id="templatemo_topnews">
    
    <?php $consulta1 = "SELECT * FROM div1 ORDER BY id DESC LIMIT 1" ; $res1 = mysql_query($consulta1); ?> <?php while($row1=mysql_fetch_array($res1)): ?>    
    <h2><a href="?mod=buscador&acc=detallediv1&id=<?php echo $row1['id']; ?>"> <?php echo $row1['titulo']; ?> </a> </h2>
    <!--<?php// echo $row1['fecha']; ?> -->
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row1['documento']."\"height='130px' width='180px'  " ;?> 
    <br><br>
    <?php echo (substr($row1['resumen'],0,500));?>
    <?php endwhile; ?>
<br>
<hr>

                 <?php  $consulta2 = "SELECT * FROM div2 ORDER BY id DESC LIMIT 1" ; $res2 = mysql_query($consulta2); ?> <?php while($row2=mysql_fetch_array($res2)): ?>
    <h2><a href="?mod=buscador&acc=detallediv2&id=<?php echo $row2['id']; ?>"> <?php echo $row2['titulo']; ?> </a></h2>
   <!-- <?php// echo $row2['fecha']; ?>  -->
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row2['documento']."\"height='130px' width='180px' " ;?> 
    <br><br><?php echo (substr($row2['resumen'],0,500));?>
    <?php endwhile; ?>
<br>
<hr>   


    <?php  $consulta3 = "SELECT * FROM div3 ORDER BY id DESC LIMIT 1" ; $res3 = mysql_query($consulta3); ?> <?php while($row3=mysql_fetch_array($res3)): ?> 
   <h2> <a href="?mod=buscador&acc=detallediv3&id=<?php echo $row3['id']; ?>"> <?php echo $row3['titulo']; ?> </a> </h2>
     <?php echo $row3['fecha']; ?>
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row3['documento']."\"height='130px' width='180px'  " ;?> 
    <br><br><?php echo (substr($row3['resumen'],0,500));?>
    <?php endwhile; ?>
 <br>
<hr>

<?php $consulta7 = "SELECT * FROM div7 ORDER BY id DESC LIMIT 1" ; $res7 = mysql_query($consulta7); ?> 
<?php while($row7=mysql_fetch_array($res7)): ?>    
    <h2><a href="?mod=buscador&acc=detallediv7&id=<?php echo $row7['id']; ?>"> 
    <?php echo $row7['titulo']; ?> </a> </h2>
   <!-- <?php// echo $row7['fecha']; ?> -->
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row7['documento']."\"height='130px' width='180px' " ;?> 
    <br><br>
    <?php echo (substr($row7['resumen'],0,500));?>
    <?php endwhile; ?>
<br>
<hr>


                    <img src="images/templatemo_image_01.jpg" alt="image" />
                    <h1>Free CSS Template for everyone</h1>
                    <p align="justify">
                    This website template is provided by <a href="http://www.templatemo.com/" target="_parent">TemplateMo.com</a> for FREE of charge. Feel free to use this web layout for your websites. Photos are from <a href="http://www.publicdomainpictures.net/" target="_blank">PublicDomainPictures</a>.</p>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  Duis pulvinar scelerisque ante.  <a href="#">full story</a></p>
                  <span class="updatedtime">updated 12 minutes ago</span>
				</div> 

<!--finn -->
<!--//////////////**********************     Imagenes  ******************//////////////////-->                


                <div id="templatemo_gallery_section">
                	<h2>Today's Images</h2>
              <div id="image_section">

                        <a href="" target="_blanck"><img src="mas/img/013.jpg" alt="image" whidt="100" height="100" /></a>
                        <!--<a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/mas/img/florecen1000.jpg" target="_blanck"><img src="mas/img/florecen1000.jpg" alt="image" whidt="100" height="100"/></a>-->
                        <!--<a href="#"><img src="mas/img/02.jpg" alt="image" whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/Estudiantes-Solidarios.jpg" alt="image"  whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/.jpg" alt="image" whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/.jpg" alt="image" whidt="100" height="100"/></a>-->
					</div>
                    <div class="view_all"><a href="#">View All Photos</a></div>
                </div>
            </div> <!-- fin imagenes -->
        	
            <!-- ////////****** columnas 4 5 6  titulo 1 titulo 2****************////////////-->
            <div class="templatemo_leftcol_subcol">
				<div class="regular_section">
                  <!--  <h2>General News</h2>-->
			<?php  $consulta4 = "SELECT * FROM div4 ORDER BY id DESC LIMIT 1" ; $res4 = mysql_query($consulta4); ?> <?php while($row4=mysql_fetch_array($res4)): ?>
    <h2><a href="?mod=buscador&acc=detallediv4&id=<?php echo $row4['id']; ?>"> <?php echo $row4['titulo']; ?> </a> </h2>
    <?php echo $row4['fecha']; ?> 
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row4['documento']."\" height='130px' width='180px' " ;?> 
    <br>   <br><?php echo (substr($row4['resumen'],0,500));?>
    <?php endwhile; ?>
    <br>
    <hr>		

    <?php  $consulta5 = "SELECT * FROM div5 ORDER BY id DESC LIMIT 1" ; $res5 = mysql_query($consulta5); ?> <?php while($row5=mysql_fetch_array($res5)): ?>
    <h2><a href="?mod=buscador&acc=detallediv5&id=<?php echo $row5['id']; ?>"> <?php echo $row5['titulo']; ?> </a> </h2>
    <?php echo $row5['fecha']; ?> <br>
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row5['documento']."\"height='130px' width='180px' " ;?> 
    <br><br><?php echo (substr($row5['resumen'],0,500));?>
    <?php endwhile; ?>
<br>
<hr>

<?php  $consulta6= "SELECT * FROM div6 ORDER BY id DESC LIMIT 1" ; $res6 = mysql_query($consulta6); ?> <?php while($row6=mysql_fetch_array($res6)): ?> 
   <h2><a href="?mod=buscador&acc=detallediv6&id=<?php echo $row6['id']; ?>"> <?php echo $row6['titulo']; ?> </a> </h2>
   <?php echo $row6['fecha']; ?>
   <br><?php echo"<img src=\"modulos/buscador/documentos/".$row6['documento']."\"height='130px' width='180px' " ;?> 
   <br><br><?php echo htmlentities(substr($row6['resumen'],0,500));?>
   <?php endwhile; ?>
    <br>
    <hr>
     <!-- ////////****** fin columnas 4 5 6 ****************////////////-->



                    <div class="newsbox"><img src="mas/img/mani.jpg" alt="image" width="60" heigth="40"/>
                        <span class="newstitle">Enlaces Recomendados</span><br />
                        <p>
                        En este espacio ofrecemos algunos enlaces par su información referido e educación<a href="#">full story</a>                        </p>
				  </div>
                        
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Duis mollis aliquet ligula</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus.</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                        <li><a href="#">Quisque in diam a justo condimentum</a></li>
                    </ul>
                    <a href="#">Leer las noticias de las ultimas 24 horas</a>
                </div>
                
                <div class="regular_section">
                    <h2>Enlaces Recomendados</h2>
					<div class="newsbox"><img src="mas/img/mani.jpg" alt="image" width="60" heigth="40"/><span class="newstitle">News Title 02</span><br />
                        <p>
                        En este espacio ofrecemos algunos enlaces par su información referido eDerechos humanos <a href="#">full story</a>                        </p>
					</div>
                        
                    <ul>
                    	<li><a href="#">Quisque in diam a justo condimentum</a></li>
                        <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                    <a href="#">Leer todas las noticias</a>
                </div>
                </br>

             <!--////////*******seccion de css3 **********///////-->   
                <div class="regular_section">
                        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>

<!--///////////////*** seccion estatuto resoluciones decretos leyes disposiciones   ********//////-->
           

            <div class="tab_section">
                <ul id="countrytabs" class="shadetabs">
                    <li><a href="#" rel="health" class="selected">Estatuto del Docente</a></li>
                    <li><a href="#" rel="entertainment">Resoluciones</a></li>
                    <li><a href="#" rel="politics">Decreto</a></li>
                    <li><a href="#" rel="business">Leyes</a></li>
                    <li><a href="#" rel="tech_science">Disposiciones</a></li>
				</ul>
				
                <div class="tabcontent_section">
                    <div id="health" class="tabcontent">
                        <div class="topnews">
                            <!--<img src="images/templatemo_image_08.jpg" alt="image" />-->
                            <h4>Ley N°3529 (t.o.Ley 5125) y Decreto 1217/91</h4>
                            <p>
                            <br><a href="http://www.dirdocumentacion.com.ar/repo/modulos/buscador/documentos/Ley%205125%20edicion%202012%20actualizado%2022-02-2013.pdf">Estatuto del Docente PDF</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <h4>Modificaciones al Estatuto del Docente</h4>
                            <ul>
                            	<li><a href="http://www.dirdocumentacion.com.ar/repo/modulos/buscador/documentos/LEY-07086.pdf">LEY Nº 07086</a></li>
                                <li><a href="http://www.dirdocumentacion.com.ar/ley%205125%20edicion%202011/archivos%20pdf/Ley%206667.pdf">LEY N° 06667</a></li>
                                <li><a href="http://www.dirdocumentacion.com.ar/ley%205125%20edicion%202011/archivos%20pdf/Ley%206876.pdf">LEY N° 06876</a></li>
                                <li><a href="http://www.dirdocumentacion.com.ar/DOCUMENTOSWEB/blog%2014-06-12/DECRETO%2001204-12.pdf">DECRETO Nº 01204-12</a></li>
                                <li><a href="http://www.dirdocumentacion.com.ar/repo/modulos/buscador/documentos/DECRETO-01824-12.pdf">DECRETO Nº 01824-12</a></li>
                                ELECCIONES MIEMBROS DE JUNTA DE CLASIFICACIÓN 
                                <li><a href="http://www.dirdocumentacion.com.ar/repo/modulos/buscador/documentos/RESOLUCION-08395-12.PDF">RESOLUCIÓN Nº 08395-12</a></li>
                                <!--<li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>-->
                            </ul>
                           <!-- <a href="#">Read All Latest News</a>-->
                        </div>
			    	</div>
    
                    <div id="entertainment" class="tabcontent">
	                    <div class="topnews">
                            <img src="images/templatemo_image_12.jpg" alt="image" />
                            <h4>Resoluciones</h4>
                            <p>
                            Duis vitae velit sed dui malesuada dignissim. Lorem ipsum dolor sit amet, adipiscing elit. Nunc quis sem nec tincidunt. <a href="#">Full Story</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                                <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                            </ul>
                            <a href="#">Read All Latest News</a>
                        </div>
                    </div>
                    
                    <div id="politics" class="tabcontent">
	                    <div class="topnews">
                            <img src="images/templatemo_image_08.jpg" alt="image" />
                            <h4>Decretos</h4>
                            <p>
                            Fusce sollicitudin nisl a lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#">Full Story</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
                           		<li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                                <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">Read All Latest News</a>
                        </div>
                    </div>
                    
                    <div id="business" class="tabcontent">
    	                <div class="topnews">
                            <img src="images/templatemo_image_12.jpg" alt="image" />
                            <h4>Leyes</h4>
                            <p>
                           Pellentesque odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed leo. <a href="#">Full Story</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
                            	<li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                            </ul>
                            <a href="#">Read All Latest News</a>
                        </div>
                    </div>
                    <div id="tech_science" class="tabcontent">
    	                <div class="topnews">
                            <img src="images/templatemo_image_08.jpg" alt="image" />
                            <h4>Disposiciones</h4>
                            <p>
                            Fusce sollicitudin nisl a lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#">Full Story</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                                <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">Read All Latest News</a>
                        </div>
                    </div>
				</div>


			<script type="text/javascript">
            
            var countries=new ddtabcontent("countrytabs")
            countries.setpersist(true)
            countries.setselectedClassTarget("link") //"link" or "linkparent"
            countries.init()
            
            </script>
            

            </div>
    	</div> 
        <!-- fin estatuto resoluciones decretos leyes disposiciones -->

<!--/////////////////****************** videos base de datos y suscripcion *********************///////////////-->
        <div id="templatemo_main_rightcol">
        	<div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_video_section">
                    <h2><a href="http://www.youtube.com/results?search_query=dirdocu&oq=dir&gs_l=youtube.3.0.35i39j0l9.1585.1774.0.3015.3.3.0.0.0.0.241.509.0j2j1.3.0...0.0...1ac.1.wefpHZeQ_yg">Nuestros Videos</a></h2>
                    <div class="video_box">
                    <iframe width="120" height="115" src="http://www.youtube.com/embed/zsG3eTIB0fk" frameborder="0" allowfullscreen></iframe>    
                        <!--<img src="mas/css/images/templatemo_image_09.jpg" alt="image" />-->
                        <a href="http://www.youtube.com/watch?v=zsG3eTIB0fk"><span>Play en Youtube:</span>Película Isidro Velazquez</a>                    </div>
                    <div class="video_box">
                        <!--<img src="images/templatemo_image_10.jpg" alt="image" />-->
                        
                        <iframe width="120" height="115" src="http://www.youtube.com/embed/pdDo-_g_Lgo" frameborder="0" allowfullscreen></iframe>                    
                        <a href="http://www.youtube.com/watch?v=pdDo-_g_Lgo"><span>Play en Youtube</span>Día Internacional de la Mujer</a>
                    </div> 
                    <div class="video_box">
                        <!--<img src="images/templatemo_image_11.jpg" alt="image" />-->
                        <iframe width="120" height="115" src="http://www.youtube.com/embed/7rxKfJihUNg" frameborder="0" allowfullscreen></iframe>    
                        <a href="http://www.youtube.com/watch?v=7rxKfJihUNg"><span>Play en Youtube:</span>HIMNO NACIONAL ARGENTINO DE LOS BICENTENARIOS</a>                    
                    </div>
                    <div class="view_all"><a href="http://www.youtube.com/results?search_query=dirdocu&oq=dir&gs_l=youtube.3.0.35i39j0l9.1585.1774.0.3015.3.3.0.0.0.0.241.509.0j2j1.3.0...0.0...1ac.1.wefpHZeQ_yg">Visite Nuestro Canal en Youtube</a></div>
				</div>
            </div>
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_newsletter_section">
                    <h2>Buscar en Nuestra Base de DATOS</h2>
                <a href="http://www.dirdocumentacion.com.ar/repo/" target="_blanck"><img src="mas/img/buscarrepositorio.jpg"></a>                     
                    
                    <form method="get" action="#">
                        <div class="form_row">	

                            Suscribirse
                         <label>elgir boletin</label>
                        <select>
                            <option> suscri </option>
                            <option>Breaking News</option>
                            <option>Sport News</option>                        
                            <option>Entertainment News</option>                        
                        </select>
                        </div>
                        <div class="form_row"><label>Email address</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                       <input class="button" type="submit" name="Submit" value="Subscribe" />
                    </form>
				</div>
            </div> 
            <!-- fin videos base de datos y suscripcion-->
            
<!-- //////////////////******* gadget   o imagenes con enlaces *********/////////////////////-->
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_blog_section">
                    <h2>Gadget Laterales </h2>
                    
                    <div class="blog_box">
                        <h3> 
                            Calendario Escalar 2013<br>
                            <a href="http://www.juandanielestevez.com.ar/calendario-escolar-2013/" target="_blanck"><img src="mas/img/cabecale13blog.jpg"></a>
                            <br><hr>

                            PORTAL CHACO
                            <br>
                            <a href="http://portal1.chaco.gov.ar/" target="_blanck"><img src="mas/img/portalchaco.jpg"></a>
                            <br><hr>    
                            
                            Ministerio de Educación de la Nación <br>
                            <a href="http://portal.educacion.gov.ar/" target="_blanck"><img src="mas/img/mineducnacion.jpg"></a>
                            <br><hr>

                            <a href="http://www.dgpse-chaco.com.ar/" target="_blanck"><img src="mas/img/politicassoc.jpg"></a>
                            <br><hr>    
                            
                            <a href="http://nivelesymodalidades.blogspot.com.ar/" target="_blanck"><img src="mas/img/nivelesymod.jpg"></a>
                            <br><hr>

                            CÁTEDRA LIBRE DE DERECHOS HUMANOS
                            <a href="http://catedralibredeerechoshumanos.blogspot.com.ar/" target="_blanck"><img src="mas/img/zamudio.jpg"></a>
                            <br><hr>

                            MALVINAS   <br> 
                            <a href="http://documentacionchaco.blogspot.com.ar/" target="_blanck"><img src="mas/img/malvinasblog.jpg"></a>
                            <br><hr>
    


                            <a href="http://www.educ.ar/" target="_blanck"><img src="mas/img/educar.jpg"></a>
                            <br><hr>

                            BIBLIOTECA NACIONAL DE MAESTROS
                            <a href="http://www.bnm.me.gov.ar/" target="_blanck"><img src="mas/img/bnm.jpg"></a>
                            <br><hr>

                            DIRECCIÓN DE BIBLIOTECAS <br>
                            <a href="http://direcciondebibliotecas.blogspot.com.ar/" target="_blanck"><img src="mas/img/direccionbiblioteca.jpg"></a>
                            <br><hr>

                            Sistema Nacional de Información Educativa
                            <a href="http://www.bnm.me.gov.ar/redes_federales/snie/" target="_blanck"><img src="mas/img/snie.jpg"></a>
                            <br><hr>

                            ejemplo la bnm <br>
                            <a href="" target="_blanck"><img src="mas/img/templatemo.jpg"></a>
                            <br>

                            Agenda Ambiental <br>
                            <a href="http://www.dirdocumentacion.com.ar/Agenda-Ambiental/AGENDA-AMBIENTAL.index.html" target="_blanck"><img src="mas/img/ambiental.jpg"></a>
                            <br>

                            Galería de Imágenes 1<br>
                            <a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/galeria_1/index.html" target="_blanck"><img src="mas/img/1.jpg" height='50px' width='154px'></a>
                             <br>   

                             Galería de Imágenes 2<br>
                            <a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/galeria_2/index.html" target="_blanck"><img src="mas/img/2.jpg" height='50px' width='154px'></a>
                             <br>   

                             Galería de Imágenes 3<br>
                            <a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/galeria_3/index.html" target="_blanck"><img src="mas/img/3.jpg" height='50px' width='154px'></a>
                             <br>   


                            Galería de Imágenes 4<br>
                            <a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/galeria_4/index.html" target="_blanck"><img src="mas/img/6.jpg" height='50px' width='154px'></a>
                             <br>   
                             
                             Galería de Imágenes 5<br>
                            <a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/galeria/index.html" target="_blanck"><img src="mas/img/lights2.jpg" height='50px' width='154px'></a>
                             <br>   
                            
                                


                            ejemplo niveles  y modalidades <br>
                            <a href="" target="_blanck"><img src="mas/img/webdesignmo.jpg"></a>
                        </h3>
                        <h3><a href="#">Quisque rhoncus nulla quis sem</a></h3>
                        Posted by <a href="#"><span>Dolor Sit Amet</span></a> in <a href="#"><span>Duis vitae</span></a><br />
                        Aliquam tristique lacus in sapien. Suspendisse potenti. Ut sed pede.<br />
                        <div class="datetime">15:00 January 25th, 2048</div>
                    </div>
                    
                    <div class="blog_box">
                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        Posted by <a href="#"><span>Dolor Sit Amet</span></a> in <a href="#"><span>Duis vitae</span></a><br />
                        Integer imperdiet odio ac eros. Ut id massa. Nullam nunc. Vivamus sagittis varius lorem.<br />
                        <div class="datetime">13:00 January 21st, 2048</div>
                    </div>   
                                       
                    <div class="more_button"><a href="#">View All</a></div>
                    
				</div>                                                              
            </div> 
            
            <!--<div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_poll_section">
                    <h2>Poll</h2>
                    <img src="images/templatemo_image_08.jpg" alt="image" />
                    <p>
                    Lorem ipsum nunc quis sem dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt.</p>
                <input type="radio" name="poll" value="yes" checked="checked" />Yes <br />
                    <input type="radio" name="poll" value="no" />No <br /><br />
                    <input class="button" type="submit" name="Submit" value="Vote" /> <a href="#">Viwe Result</a>
				</div>
            </div>-->
        </div>
    </div>
    <!--fin gadget o imagenes con enlces -->
    
 <!--//////*******  footer o pie de pagina  ********///////-->
    <div id="templatemo_footer">
    	<div class="footer_leftcol">
	        Copyright © 2013 <a href="#"><strong>M.E.C.C Y T</strong></a><br />
			DIRECCIÓN DE DOCUMENTACIÓN Y PREODUCCIÓN DE CONTENIDOS<br /><br />
            <p>GESTION CAPITANICH </p>
            <P>GOBIERNO DEL PUEBLO DE LA PROVINCIA DEL CHACO</p>
        </div>
        <div class="footer_rightcol">
        	<div class="footer_subcol">
				<a href="#">Mainpage</a><br />
              	<a href="#">Company</a><br />
                <a href="#">Advertise</a><br />
                <a href="#">Feedback</a><br />
			</div>
            <div class="footer_subcol">
				<a href="#">English</a><br />
				<a href="#">Japanese</a><br />
				<a href="#">Chinese</a><br />
				<a href="#">German</a><br />
                <a href="#">French</a>
                </div>
            <div class="footer_subcol">
				<a href="#">Terms</a><br />
                <a href="#">Privacy</a><br />
                <a href="#">Sitemap</a><br />
                <a href="#">Contact</a><br />
                <a href="#">Help</a>
			</div>
        </div>
        
    </div> <!-- end of footer -->

</div>

</body>
</html>