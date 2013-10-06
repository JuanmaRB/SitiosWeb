<!--conexion a la base de datos-->


<?php
		require_once "config/bbdd1.php";
		
		$consulta4 = "SELECT * FROM div4 WHERE id = '".$_GET['id']."'";
		$res4 = mysql_query($consulta4);

	?>
			<?php while($row4=mysql_fetch_array($res4)): ?>

<body>
<div id="templatemo_container">

    <div id="templatemo_top_panel">
      
        <div id="templatemo_sitetitle">
     
        </div>
      
        <div id="templatemo_searchbox">
        </div>
      
    </div> 
    

       <div id="templatemo_menu"> 

</div>	<div id="templatemo_content">

    	<div id="templatemo_main_leftcol">
        	<div class="templatemo_leftcol_subcol1">
            
            	<div id="templatemo_topnews_detalle">
				<!--<img src="mas/img/templatemo_image_01.jpg" alt="i">-->
                    <!--<img src="mas/css/images/templatemo_image_01.jpg" alt="image" />-->
		    <h2><?php echo $row4['titulo']; ?></h2>

            <?php echo"<img src=\"modulos/buscador/documentos/".$row4['documento']."\"" ;?>
            <br>
            <!--<?php// echo $row1['fecha']; ?>-->
            <br>

			
	

                    <p aling="justify">
                    <?php echo $row4['resumen']; ?>
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