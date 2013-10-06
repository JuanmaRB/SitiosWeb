<!--conexion a la base de datos-->
<?php require_once "config/bbdd2.php"; ?>
            
<body>

<div id="templatemo_container">


<div id="templatemo_top_panel"> 

<div id="templatemo_sitetitle"> Centro de Documentación </div>

<div id="templatemo_searchbox"> <form action="#" method="get"> <input name="search" type="radio" value="thissite" checked="checked" />   este sitio <input type="radio" name="search" value="theweb" /> en la web <br /> <input type="text" name="q" size="10" id="searchfield" title="searchfield" />  <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" /> </form>
        
</div>
        
<div id="templatemo_currentdate"><script type="text/javascript"> 
				<!--
				var m_names = new Array("enero", "febrero", "marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				var d_names = new Array("domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");
				
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
			</script>  </div>  </div> <!-- end of top panel -->
    
    <div id="templatemo_menu"> 
         <ul> <li><a href="index.php"  class="current">Inicio</a>
         </li> <li><a href="index.php?mod=inicio&acc=iniciocatalogos">Cátalogos</a></li>
          <li><a href="#">Sports</a></li> <li><a href="#">Business</a></li>  
          <li><a href="#">Politics</a></li>  
          <li><a href="#">Entertainment</a></li> 
          <li><a href="#">Technology</a></li> 

<?php if($_SESSION['permisos']==1): ?> 
<li><a href="index.php?mod=buscador&acc=columnas">cargar</a></li>  
<li><a href="index.php?mod=login&acc=logout">Cerrar sesion</a></li> 	
<?php elseif($_SESSION['permisos']==0): ?>
<li><a href="index.php?mod=login&acc=loguear">Administracion</a></li> 
<?php endif; ?></ul> </ul> 	
</div>

<!-- inicio columas 2izquierda superior--> 

<div id="lateral">
    <div id="seccion1" style="position: static; background-color: #ff9; padding: 10px; width: 300px;"><!--columna 1--> 
    <?php $consulta1 = "SELECT * FROM div1 ORDER BY id DESC LIMIT 1" ; $res1 = mysql_query($consulta1); ?> <?php while($row1=mysql_fetch_array($res1)): ?>    
    <a href="?mod=buscador&acc=detallediv1&id=<?php echo $row1['id']; ?>"> <?php echo $row1['titulo']; ?> </a> 
    <br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row1['documento']."\"" ;?> 
    <br><br><?php echo $row1['fecha']; ?> 
    <br><br><?php echo $row1['resumen']; ?>
    <?php endwhile; ?>
<hr>
</div>
        
    <div id="seccion2" style="position: static; background-color: #ff9; padding: 10px; width: 300px;"><!--columna 2--> 
    <?php  $consulta2 = "SELECT * FROM div2 ORDER BY id DESC LIMIT 1" ; $res2 = mysql_query($consulta2); ?> <?php while($row2=mysql_fetch_array($res2)): ?>
    <a href="?mod=buscador&acc=detallediv2&id=<?php echo $row2['id']; ?>"> <?php echo $row2['titulo']; ?> </a>  
    <br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row2['documento']."\"" ;?> 
    <br><br><?php echo $row2['fecha']; ?>
    <br><br><?php echo $row2['resumen']; ?>
    <?php endwhile; ?>

<hr>
</div>


<div id="seccion3" style="position: static; background-color: #ff9; padding: 10px; width: 300px;">
<?php  $consulta3 = "SELECT * FROM div3 ORDER BY id DESC LIMIT 1" ; $res3 = mysql_query($consulta3); ?> <?php while($row3=mysql_fetch_array($res3)): ?> 
<a href="?mod=buscador&acc=detallediv3&id=<?php echo $row3['id']; ?>"> <?php echo $row3['titulo']; ?> </a> 
<br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row3['documento']."\"" ;?> 
<br> <br> <?php echo $row3['fecha']; ?>
<br><br><?php echo $row3['resumen']; ?>  
<?php endwhile; ?>
 
<hr>                 
</div>


<div id="principal">

    <div id="seccion4" style="position: static; background-color: #ff9; padding: 10px; width: 300px;"><!--columna 2--> 
    <?php  $consulta4 = "SELECT * FROM div4 ORDER BY id DESC LIMIT 1" ; $res4 = mysql_query($consulta4); ?> <?php while($row4=mysql_fetch_array($res4)): ?>
    <a href="?mod=buscador&acc=detallediv4&id=<?php echo $row4['id']; ?>"> <?php echo $row4['titulo']; ?> </a> 
    <br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row4['documento']."\"" ;?> <br> 
    <br><br><?php echo $row4['fecha']; ?> 
    <br> <?php echo $row4['resumen']; ?>
    
    <?php endwhile; ?>

    <hr>
</div>

    <div id="seccion5" style="position: static; background-color: #ff9; padding: 10px; width: 300px;"><!--columna 2--> 
    <?php  $consulta5 = "SELECT * FROM div5 ORDER BY id DESC LIMIT 1" ; $res5 = mysql_query($consulta5); ?> <?php while($row5=mysql_fetch_array($res5)): ?>
    <a href="?mod=buscador&acc=detallediv5&id=<?php echo $row5['id']; ?>"> <?php echo $row5['titulo']; ?> </a> 
    <br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row5['documento']."\"" ;?> 
    <br><br> <?php echo $row5['fecha']; ?> <br>
    <br><br><?php echo $row5['resumen']; ?>
    
    <?php endwhile; ?>

<hr>
</div>

<div id="seccion6" style="position: static; background-color: #ff9; padding: 10px; width: 300px;">
   <?php  $consulta6= "SELECT * FROM div6 ORDER BY id DESC LIMIT 1" ; $res6 = mysql_query($consulta6); ?> <?php while($row6=mysql_fetch_array($res6)): ?> 
   <a href="?mod=buscador&acc=detallediv6&id=<?php echo $row6['id']; ?>"> <?php echo $row6['titulo']; ?> </a> 
   <br><br><?php echo"<img src=\"modulos/buscador/documentos/".$row6['documento']."\"" ;?> 
   <br> <br> <?php echo $row6['fecha']; ?>
   <br><br><?php echo $row6['titulo']; ?>
   <?php echo $row6['resumen']; ?>
   <?php endwhile; ?>
    <hr></div>              

</div>

   
</div>    
</div>
<div id="templatemo_topnews">
		    		
 mostramos la imagen titulo resumen desde la base 1

	
 </div>
    	</div>
                 galeria de imagenes  columna ubicada debajo de la columna superior izquierda


<div id="templatemo_gallery_section">
                    <h2>Imagenes</h2>
 
                        <a href="#"><img src="mas/css/images/templatemo_image_02.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_03.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_04.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_05.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_06.jpg" alt="image" /></a>
                        <a href="#"><img src="mas/css/images/templatemo_image_07.jpg" alt="image" /></a>
	  </div>
                    <div class="view_all"><a href="#">Ver Albunes de fotos</a></div>
                </div>
    </div> 
            final de la columna izquierda superior Nº 0 
        	
           <div class="templatemo_leftcol_subcol"> 
				<div class="regular_section">
                    <!--columna 1-->



                <hr>
                        
                  


               <img src="mas/css/images/templatemo_image_08.jpg" alt="image" /><span class="newstitle">News Title 01</span><br />
                        <p>
                        Lorem ipsum dolor sit amet,  adipiscing elit. Nunc quis sem nec tincidunt. Duis vitae velit sed dui malesuada. <a href="#">full story</a>                        </p>

                        
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
             div3 columna ubicada debajo de columna central superior 
                <div class="regular_section">
                    <h2>div3</h2>
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
                </div>
                
                <div class="regular_section">
                        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>
            
            <div class="tab_section">
                 start 
                <ul id="countrytabs" class="shadetabs">
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
                            <h4>Health News</h4>
                            <p>
                            Nunc quis sem nec tincidunt. Lorem ipsum dolor sit amet, adipiscing elit. Duis vitae velit sed dui malesuada dignissim. <a href="#">Full Story</a>
                            </p>
                        </div>
                        <div class="newslist">
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
             end 

            </div>
    	</div> end of left column
        
        <div id="templatemo_main_rightcol">
        	<div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_video_section">
                    <h2>Latest Videos</h2>
                    <div class="video_box">
                        <img src="images/templatemo_image_09.jpg" alt="image" />
                        <a href="#"><span>Play:</span> Lorem ipsum dolor sit amet</a>
                    </div>
                    <div class="video_box">
                        <img src="images/templatemo_image_10.jpg" alt="image" />
                        <a href="#"><span>Play:</span> Nunc quis sem nec tincidunt</a>                    
                    </div> 
                    <div class="video_box">
                        <img src="images/templatemo_image_11.jpg" alt="image" />
                        <a href="#"><span>Play:</span> Duis vitae velit sed dui</a>                    
                    </div>
                    <div class="view_all"><a href="#">View All</a></div>
				</div>
            </div>
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_newsletter_section">
                    <h2>Subscribe Newsletter</h2>
                    <form method="get" action="#">
                        <div class="form_row">	
                        <label>Choose Newsletter</label>
                        <select>
                            <option>Daily News</option>
                            <option>Breaking News</option>
                            <option>Sport News</option>                        
                            <option>Entertainment News</option>                        
                        </select>
                        </div>-->
                        <div class="form_row"><label>Email address</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                       <input class="button" type="submit" name="Submit" value="Subscribe" />
                    </form>
				</div>
            </div> 
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_blog_section">
                    <h2>Blog Entries</h2>
                    
                    <div class="blog_box">
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
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_poll_section">
                    <h2>Poll</h2>
                    <img src="images/templatemo_image_08.jpg" alt="image" />
                    <p>
                    Lorem ipsum nunc quis sem dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt.</p>
                <input type="radio" name="poll" value="yes" checked="checked" />Yes <br />
                    <input type="radio" name="poll" value="no" />No <br /><br />
                    <input class="button" type="submit" name="Submit" value="Vote" /> <a href="#">Viwe Result</a>
				</div>
            </div>
        </div>
    </div>
    
    





   <div id="templatemo_footer">
    	<div class="footer_leftcol">
	        Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a><br />
			<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a><br /><br />
            <p>Lorem ipsum nunc quis sem dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt. Duis mollis aliquet ligula.</p>
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
        
 <!-- end of footer -->
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 

<div align=center></div>
		</body>
</html>