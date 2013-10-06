<?php

  $dbhost = 'localhost';
  $dbuser = 'v0020840';
  $dbpass = 'po67baSUmu'; // NOTA: Reemplace password por el password de su cuenta de hosting

  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Ocurrio un error al conectarse al servidor mysql');

  $dbname = 'v0020840_instrumentos';
  mysql_select_db($dbname);
?>