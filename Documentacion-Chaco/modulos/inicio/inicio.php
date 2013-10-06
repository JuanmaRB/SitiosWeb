<?php require_once "config/bbdd1.php"; ?>
<body>

<div id="templatemo_container">

    <div id="templatemo_top_panel">
      
          <div id="templatemo_sitetitle">
     
               <div id="templatemo_searchbox">
</div>
      
</div> 
    

<div id="templatemo_menu"> 

</div>
</div>
      



<!--        columnas 1 2 3 7 de mi derecha  -->
    
<div id="templatemo_content">

    <div id="templatemo_main_leftcol">
           
        <div class="templatemo_leftcol_subcol">
           
              <div id="templatemo_topnews">
  <hr>
  General |
  <hr>
      <!-- columna nº 1-->
       <?php $consulta1 = "SELECT * FROM div1 ORDER BY id DESC LIMIT 1" ; 

          $res1 = mysql_query($consulta1); ?> 

          <?php while($row1=mysql_fetch_array($res1)): ?>    
    
  <h2>

  <a href="index.php?mod=buscador&acc=detallediv1&id=<?php echo $row1['id']; ?>"> 

          <?php echo $row1['titulo']; ?> </a> 

  </h2>

  <p align="justify">
    
    <!--<?php// echo $row1['fecha']; ?> -->


          <?php echo"<img src=\"modulos/buscador/documentos/".$row1['documento']."\"height='160px' width='300px'" ;?> 
  
  
          <?php echo (substr($row1['resumen'],0,500));?>

  </p>
    
          <?php endwhile; ?>

<!-- fin culumna nº 1-->






<!--	columna nº 2-->
<hr>
Efemérides  |  <a href="index.php?mod=buscador&acc=efemerides">Efemérides</a>
<hr>
<?php  $consulta2 = "SELECT * FROM div2 ORDER BY id DESC LIMIT 3" ; $res2 = mysql_query($consulta2); ?> <?php while($row2=mysql_fetch_array($res2)): ?>
<h2>
<a href="index.php?mod=buscador&acc=detallediv2&id=<?php echo $row2['id']; ?>"> <?php echo $row2['titulo']; ?> </a>
</h2>
<!-- <?php// echo $row2['fecha']; ?>  -->
<br>
<?php echo"<img src=\"modulos/buscador/documentos/".$row2['documento']."\"height='160px' width='300px' " ;?> 
<br>

<?php echo (substr($row2['resumen'],0,500));?>

<hr>
<?php endwhile; ?>

<!-- 	columna nº 2-->





<!--  	columna nº 3 	-->

Derechos Humanos | <a href="index.php?mod=buscador&acc=derechos">Cátedra Libre de Derechos Humanos</a> 
<hr>
    <?php  $consulta3 = "SELECT * FROM div3 ORDER BY id DESC LIMIT 1" ; $res3 = mysql_query($consulta3); ?> <?php while($row3=mysql_fetch_array($res3)): ?> 
   <h2> <a href="?mod=buscador&acc=detallediv3&id=<?php echo $row3['id']; ?>"> <?php echo $row3['titulo']; ?> </a> </h2>
     <?php echo $row3['fecha']; ?>
    <br><?php echo"<img src=\"modulos/buscador/documentos/".$row3['documento']."\"height='160px' width='300px'  " ;?> 
    <br><br><?php echo (substr($row3['resumen'],0,500));?>
    <?php endwhile; ?>
 <br>

<!-- 		fin columna nº 3-->



<!-- columna nº 4 --> 
<hr>
Educación | <a href="index.php">Titulares Educativos</a><br>
<hr>

<?php $consulta4 = "SELECT * FROM div4 ORDER BY id DESC LIMIT 1" ; $res4 = mysql_query($consulta4); ?> 
<?php while($row4=mysql_fetch_array($res4)): ?>
<h2> 
<a href="?mod=buscador&acc=detallediv4&id=<?php echo $row4['id']; ?>"> <?php echo $row4['titulo']; ?> </a> 
</h2>
<?php// echo $row4['fecha']; ?> 
<br>
<?php echo"<img src=\"modulos/buscador/documentos/".$row4['documento']."\" height='160px' width='300px' " ;?> 
<br>
<br>
<?php echo (substr($row4['resumen'],0,500));?>
<?php endwhile; ?>
<br>
<!-- fin columna nº 4 --> 






<!-- columna nº 5 --> 

<hr>
Para la Reflexión | <a href="">Reflexión y el Aula</a>
<hr>    

<?php  $consulta5 = "SELECT * FROM div5 ORDER BY id DESC LIMIT 1" ; $res5 = mysql_query($consulta5); ?> <?php while($row5=mysql_fetch_array($res5)): ?>
<h2>
<a href="?mod=buscador&acc=detallediv5&id=<?php echo $row5['id']; ?>"> <?php echo $row5['titulo']; ?> </a> 
</h2>
<?php// echo $row5['fecha']; ?> 
<br>
<br>
<?php echo"<img src=\"modulos/buscador/documentos/".$row5['documento']."\"height='160px' width='300px' " ;?> 
<br>
<br>
<?php echo (substr($row5['resumen'],0,500));?>
<?php endwhile; ?>
<br>
<!-- fin columna nº 5 --> 





<!-- columna nº 6 --> 
<!--
<hr>
<hr>

<?php//  $consulta6= "SELECT * FROM div6 ORDER BY id DESC LIMIT 1" ; $res6 = mysql_query($consulta6); ?> <?php// while($row6=mysql_fetch_array($res6)): ?> 
<h2>
<a href="?mod=buscador&acc=detallediv6&id=<?php// echo $row6['id']; ?>"> <?php// echo $row6['titulo']; ?> </a> </h2>
   <?php// echo $row6['fecha']; ?>
<br>-->
<!--
<?php// echo"<img src=\"modulos/buscador/documentos/".$row6['documento']."\"height='160px' width='300px' " ;?> 
<br>
<br>
<?php// echo htmlentities(substr($row6['resumen'],0,500));?>
<?php// endwhile; ?>
<br>-->
<!-- fin columna nº 6 --> 




<!-- 		columna nº 7 -->
<!--<hr>
<hr>

<?php// $consulta7 = "SELECT * FROM div7 ORDER BY id DESC LIMIT 1" ; $res7 = mysql_query($consulta7); ?> 
<?php// while($row7=mysql_fetch_array($res7)): ?>    
    <h2><a href="?mod=buscador&acc=detallediv7&id=<?php// echo $row7['id']; ?>"> 
    <?php// echo $row7['titulo']; ?> </a> </h2>-->
   <!-- <?php// echo $row7['fecha']; ?> -->
    <!--<br><?php// echo"<img src=\"modulos/buscador/documentos/".$row7['documento']."\"height='160px' width='300px' " ;?> -->
    <!--<br><br>
    <?php// echo (substr($row7['resumen'],0,500));?>
    <?php// endwhile; ?>
<br>
7-->
<!-- fin columna nº 7-->




<!-- columna nº 8 --> 
<!--<hr>
<hr>

<?php// $consulta8 = "SELECT * FROM div8 ORDER BY id DESC LIMIT 1" ; $res8 = mysql_query($consulta8); ?> 
<?php// while($row8=mysql_fetch_array($res8)): ?>    
    <h2><a href="?mod=buscador&acc=detallediv8&id=<?php// echo $row8['id']; ?>"> 
    <?php// echo $row8['titulo']; ?> </a> </h2>-->
   <!-- <?php// echo $row8['fecha']; ?> -->
    <!--<br><?php// echo"<img src=\"modulos/buscador/documentos/".$row8['documento']."\"height='160px' width='300px' " ;?> 
    <br><br>
    <?php// echo (substr($row8['resumen'],0,500));?>
    <?php// endwhile; ?>
<br>    -->
<!--
                <img src="images/templatemo_image_01.jpg" alt="image" />
                    <h1>Free CSS Template for everyone</h1>
                    <p align="justify">
                    This website template is provided by <a href="http://www.templatemo.com/" target="_parent">TemplateMo.com</a> for FREE of charge. Feel free to use this web layout for your websites. Photos are from <a href="http://www.publicdomainpictures.net/" target="_blank">PublicDomainPictures</a>.</p>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  Duis pulvinar scelerisque ante.  <a href="#">full story</a></p>
                  <span class="updatedtime">updated 12 minutes ago</span> -->
				</div> 

<!--fin columna nº 8 -->






<!--//////////////**********************     Imagenes columna de mi izquierda ******************//////////////////-->                

   
            <div id="templatemo_gallery_section">
        <!--        	<h2>Todas Images</h2>-->
              <div id="image_section">

    <!--                    <a href="" target="_blanck"><img src="mas/img/013.jpg" alt="image" whidt="100" height="100" /></a>
                        agregar contenido agregar contenido
                        agregar contenido
                        agregar contenidoagregar contenidoagregar contenido
                        agregar contenidoagregar contenido
                        agregar contenido
                        agregar contenido
contenido agregar conte-->
                        <!--<a href="http://www.dirdocumentacion.com.ar/Documentacion-Chaco/mas/img/florecen1000.jpg" target="_blanck"><img src="mas/img/florecen1000.jpg" alt="image" whidt="100" height="100"/></a>-->
                        <!--<a href="#"><img src="mas/img/02.jpg" alt="image" whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/Estudiantes-Solidarios.jpg" alt="image"  whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/.jpg" alt="image" whidt="100" height="100"/></a>
                        <a href="#"><img src="mas/img/.jpg" alt="image" whidt="100" height="100"/></a>-->
					</div>
                   <!-- <div class="view_all"><a href="#">View All Photos</a></div>      -->
                </div>
            



            </div>
 <!-- fin imagenes -->







        	
            <!-- ////////****** comienzo  columna central  ****************////////////-->
<!--            <div class="templatemo_leftcol_subcol">
				<div class="regular_section">-->
                  <!--  <h2>General News</h2>-->
			








<!-- columna nº 9 --> 
<!--
<hr>
<hr>

<?php//  $consulta9= "SELECT * FROM div9 ORDER BY id DESC LIMIT 1" ; $res9 = mysql_query($consulta9); ?> <?php// while($row9=mysql_fetch_array($res9)): ?> 
   <h2><a// href="?mod=buscador&acc=detallediv9&id=<?php// echo $row9['id']; ?>"> <?php// echo $row9['titulo']; ?> </a> </h2>
   <?php// echo $row9['fecha']; ?>
   <br><?php// echo"<img src=\"modulos/buscador/documentos/".$row9['documento']."\"height='130px' width='180px' " ;?> 
   <br><br><?php// echo htmlentities(substr($row9['resumen'],0,500));?>
   <?php// endwhile; ?>
    <br>-->
<!-- fin columna nº 9 --> 






<!-- columna nº 10 --> 
<!--
<hr>
<hr>

<?php//  $consulta10= "SELECT * FROM div10 ORDER BY id DESC LIMIT 1" ; $res10 = mysql_query($consulta10); ?> <?php// while($row10=mysql_fetch_array($res10)): ?> 
   <h2><a href="?mod=buscador&acc=detallediv10&id=<?php// echo $row10['id']; ?>"> <?php// echo $row10['titulo']; ?> </a> </h2>
   <?php// echo $row10['fecha']; ?>
   <br><?php// echo"<img src=\"modulos/buscador/documentos/".$row10['documento']."\"height='130px' width='180px' " ;?> 
   <br><br><?php// echo htmlentities(substr($row10['resumen'],0,500));?>
   <?php// endwhile; ?>
    <br>-->
<!-- fin columna nº 10 --> 








<!-- 	enlaces recomendados-->
   <!-- <hr>
    <hr>

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
               <hr>
		<hr>
                </br>

-->
             <!--////////*******seccion de css3 **********///////-->   
   <!--             <div class="regular_section">
                        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>
-->
     <!-- ////////****** fin columnas central ****************////////////-->












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
                  

                  <!--   <h2><a href="http://www.youtube.com/results?search_query=dirdocu&oq=dir&gs_l=youtube.3.0.35i39j0l9.1585.1774.0.3015.3.3.0.0.0.0.241.509.0j2j1.3.0...0.0...1ac.1.wefpHZeQ_yg">Nuestros Videos</a></h2> -->
                  
                    <div class="video_box">
                  <!--   <iframe width="120" height="115" src="http://www.youtube.com/embed/zsG3eTIB0fk" frameborder="0" allowfullscreen></iframe>     -->
                        <!--<img src="mas/css/images/templatemo_image_09.jpg" alt="image" />-->
                        <!-- <a href="http://www.youtube.com/watch?v=zsG3eTIB0fk"><span>Play en Youtube:</span>Película Isidro Velazquez</a>            -->         </div>
                    <div class="video_box">
                        <!--<img src="images/templatemo_image_10.jpg" alt="image" />-->
                   <!--      
                        <iframe width="120" height="115" src="http://www.youtube.com/embed/pdDo-_g_Lgo" frameborder="0" allowfullscreen></iframe>                    
                        <a href="http://www.youtube.com/watch?v=pdDo-_g_Lgo"><span>Play en Youtube</span>Día Internacional de la Mujer</a>
                   -->  </div> 
                    <div class="video_box">
                        <!--<img src="images/templatemo_image_11.jpg" alt="image" />-->
                        <iframe width="220" height="115" src="http://www.youtube.com/embed/7rxKfJihUNg" frameborder="0" allowfullscreen></iframe>    
                        <a href="http://www.youtube.com/watch?v=7rxKfJihUNg"><span>Play en Youtube:</span>HIMNO NACIONAL ARGENTINO DE LOS BICENTENARIOS</a>                    
                    </div>
                    <div class="view_all"><a href="http://www.youtube.com/user/dirdocu3412">Visite Nuestro Canal en Youtube</a></div>
				</div>
            </div>
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_newsletter_section">
                    <h2>Buscar en Nuestra Base de DATOS</h2>
                <a href="http://www.dirdocumentacion.com.ar/repo/" target="_blanck"><img src="mas/img/buscarrepositorio.jpg"></a>                     
                    
                    <!--<form method="get" action="#">
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
                    </form>-->
				</div>
            </div> 
            <!-- fin videos base de datos y suscripcion-->
            
<!-- //////////////////******* gadget   o imagenes con enlaces *********/////////////////////-->
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_blog_section">
                    
                    
                    <div class="blog_box">
                        <h3> 
                            Calendario Escalar 2013<br>
                            <a href="http://www.juandanielestevez.com.ar/calendario-escolar-2013/" target="_blanck"><img src="mas/img/cabecale13blog.jpg"></a>
                            <br><hr>
			    
			  <a href="http://www.dirdocumentacion.com.ar/repo/modulos/buscador/documentos/DIRECTORIO-2013.pdf" target="_blanck"><img src="mas/img/directorio2013.jpg"></a>
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


                            Agenda Ambiental <br>
                            <a href="http://www.dirdocumentacion.com.ar/Agenda-Ambiental/AGENDA-AMBIENTAL.index.html" target="_blanck"><img src="mas/img/ambiental.jpg"></a>
                            <br>

                            
                                

                    
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
				<!--<a href="#">Mainpage</a><br />
              	<a href="#">Company</a><br />
                <a href="#">Advertise</a><br />
                <a href="#">Feedback</a><br />-->
			</div>
            <div class="footer_subcol">
				<!--<a href="#">English</a><br />
				<a href="#">Japanese</a><br />
				<a href="#">Chinese</a><br />
				<a href="#">German</a><br />
                <a href="#">French</a>-->
                </div>
            <div class="footer_subcol">
				<!--<a href="#">Terms</a><br />
                <a href="#">Privacy</a><br />
                <a href="#">Sitemap</a><br />
                <a href="#">Contact</a><br />
                <a href="#">Help</a>-->
			</div>
        </div>
        
    </div> <!-- end of footer -->

</div>

</body>
</html>