<!--conexion a la base de datos-->


<?php
		require_once "config/bbdd1.php";
		
		$consulta7 = "SELECT * FROM div7 ORDER BY id DESC LIMIT 1" ;
		$res7 = mysql_query($consulta7);

	?>
			<?php while($row7=mysql_fetch_array($res7)): ?>



		<body>
<div id="templatemo_container">

    <div id="templatemo_top_panel">
        <div id="templatemo_sitetitle">
            Documentación
        </div>
        <div id="templatemo_searchbox">
            <!-- <form action="#" method="get">
                <input name="search" type="radio" value="thissite" checked="checked" />
              this site <input type="radio" name="search" value="theweb" />
            the web <br />
                <input type="text" name="q" size="10" id="searchfield" title="searchfield" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form> -->
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
        </div>
    </div> <!-- end of top panel -->
    
       <div id="templatemo_menu"> 
         <ul> <li><a href="index.php"  class="current">Inicio</a>
         </li> <li><a href="index.php?mod=inicio&acc=iniciocatalogos">Cátalogos</a></li>
          <li><a href="http://dirdocumentacion.blogspot.com.ar/" target="_blanck">BLOG</a>
          </li> <li><a href="#">Business</a></li>  
          <li><a href="#">Politics</a></li>  
          <li><a href="#">Entertainment</a></li> 
          <li><a href="#">Technology</a></li> 

	</div>
    
	<div id="templatemo_content">

    	<div id="templatemo_main_leftcol">
        	<div class="templatemo_leftcol_subcol1">
            
            	<div id="templatemo_topnews_detalle">
				<!--<img src="mas/img/templatemo_image_01.jpg" alt="i">-->
                    <!--<img src="mas/css/images/templatemo_image_01.jpg" alt="image" />-->
		    <h2><?php echo $row7['titulo']; ?></h2>

            <?php echo"<img src=\"modulos/buscador/documentos/".$row7['documento']."\"" ;?>
            <br>
            <!--<?php// echo $row1['fecha']; ?>-->
            <br>

			
	

                    <p align="justify">
                    <?php echo $row7['resumen']; ?>
                    <br>

					<!--<?php// echo $row1['texto']; ?>                    -->
       <!-- <?php// echo $row['documento']; ?><a href="?mod=buscador&acc=detalle&id=<?php// echo $row['id']; ?>"> Ver mas...</a>-->
<?php endwhile; ?>
				</div> 
                <!-- ////////***** galeria de imagenes por defecto-->
                <!--<div id="templatemo_gallery_section">
                	<h2>Today's Images</h2>
              <div id="image_section">
                        <a href="#"><img src="mas/css/images/templatemo_image_02.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_03.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_04.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_05.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_06.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_07.jpg" alt="image" /></a>
					</div>
                    <div class="view_all"><a href="#">View All Photos</a></div>
                </div>
            </div> end of left column -->
        	
            <!--<div class="templatemo_leftcol_subcol">
				<div class="regular_section">
                    <h2>General News</h2>
					<div class="newsbox"><img src="mas/css/images/templatemo_image_08.jpg" alt="image" /><span class="newstitle">News Title 01</span><br />
                        <p>
                        Lorem ipsum dolor sit amet,  adipiscing elit. Nunc quis sem nec tincidunt. Duis vitae velit sed dui malesuada. <a href="#">full story</a>                        </p>
				  </div>
                        
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Duis mollis aliquet ligula</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus.</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                        <li><a href="#">Quisque in diam a justo condimentum</a></li>
                    </ul>
                    <a href="#">Read all news for the last 24 hrs</a>
                </div>
                
                <div class="regular_section">
                    <h2>Sports</h2>
					<div class="newsbox"><img src="mas/css/images/templatemo_image_12.jpg" alt="image" /><span class="newstitle">News Title 02</span><br />
                        <p>
                        Morbi tristique, risus quis congue pulvinar, nisl nisi commodo diam, a porta nisi ligula ac massa. Vestibulum blandit <a href="#">full story</a>                        </p>
					</div>
                        
                    <ul>
                    	<li><a href="#">Quisque in diam a justo condimentum</a></li>
                        <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                    <a href="#">Read All Latest News</a>
                </div>-->
                
               <!-- <div class="regular_section">-->
                      <!--  <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>-->
<!--<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>-->
				</div>
            </div>
            <!--
            <div class="tab_section">
                <!-- start -->
               <!-- <ul id="countrytabs" class="shadetabs">
                    <li><a href="#" rel="health" class="selected">Health</a></li>
                    <li><a href="#" rel="entertainment">Entertainment</a></li>
                    <li><a href="#" rel="politics">Politics</a></li>
                    <li><a href="#" rel="business">Business</a></li>
                    <li><a href="#" rel="tech_science">Tech &amp; Science</a></li>
				</ul>
				
                <div class="tabcontent_section">
                    <div id="health" class="tabcontent">
                        <div class="topnews">
                            <img src="images/templatemo_image_08.jpg" alt="image" />
        <                    <h4>Health News</h4>
                            <p>
                            Nunc quis sem nec tincidunt. Lorem ipsum dolor sit amet, adipiscing elit. Duis vitae velit sed dui malesuada dignissim. <a href="#">Full Story</a>
                            </p>
                        </div>
                       --> <!--<div class="newslist">
                            <ul>
                            	<li><a href="#">Nunc blandit orci sit amet risus</a></li>
                                <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum.</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">Read All Latest News</a>
                        </div>
			    	</div>
    
                    <div id="entertainment" class="tabcontent">
	                    <div class="topnews">
                            <img src="images/templatemo_image_12.jpg" alt="image" />
                            <h4>Entertainment News</h4>
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
                            <h4>Politics News</h4>
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
                            <h4>Business News</h4>
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
                            <h4>Tech &amp; Science News</h4>
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
            <!-- end 

            </div>
    	</div> end of left column -->

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