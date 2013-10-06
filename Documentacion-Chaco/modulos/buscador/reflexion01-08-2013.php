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

      <!-- columna nº de mi izquierda-->
      <hr>
      Reflexión y Aula |
      <hr>
   
    <?php $consulta5 = "SELECT * FROM div5 ORDER BY id DESC LIMIT 8" ; $res5 = mysql_query($consulta5); ?> <?php while($row5=mysql_fetch_array($res5)): ?>    
    <h2>
    <a href="?mod=buscador&acc=detallediv5&id=<?php echo $row5['id']; ?>"> <?php echo $row5['titulo']; ?> </a> 
    </h2>
    <!--<?php// echo $row1['fecha']; ?> -->
    <br>
    <?php echo"<img src=\"modulos/buscador/documentos/".$row5['documento']."\"height='130px' width='180px'  " ;?> 
    <br>
    <br>
    <p align="justify"><?php echo (substr($row5['resumen'],0,500));?></p>
    <br>
    <hr>    
    <hr>
    <?php endwhile; ?>
    <br>

<!-- fin culumna nº 1-->
     </div> 
            </div> <!-- fin imagenes -->







            
            <!-- ////////****** comienzo  columna central  ****************////////////-->
            <div class="templatemo_leftcol_subcol">
                <div class="regular_section">
                </div>
            </div>

     <!-- ////////****** fin columnas central ****************////////////-->












<!--///////////////*** seccion estatuto resoluciones decretos leyes disposiciones   ********//////-->
           

            <div class="tab_section">
         <!--       <ul id="countrytabs" class="shadetabs">-->
                    

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

                
                <a href="http://dirdocumentacion.blogspot.com.ar/p/directorio-2012.html" target="_blanck"><img src="mas/img/directorio2013.jpg"></a>
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
                                       
                    
                </div>                                                              
            </div> 
           
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