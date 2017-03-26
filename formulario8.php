<html >
  <head>
     <title>Ejercicios 5</title>
<link rel="stylesheet" type="text/css" href="css/Style.css">
     <meta charset="utf-8"/>
  </head>
  <body background="mayor2.jpg">
  <div id="menu">
	      <ul>
          <li><a href="index.php">Menu</a></li>        
		 <li><a href="ejercicio1.php">Ejercicio 1</a></li>
		 <li><a href="ejercicio2.php">Ejercicio 2</a></li>
		 <li><a href="ejercicio3.php">Ejercicio 3</a></li>
		 <li><a href="ejercicio4.php">Ejercicio 4</a></li>
		 <li><a href="ejercicio5.php">Ejercicio 5</a></li>
		 <li><a href="ejercicio6.php">Ejercicio 6</a></li>
		 <li><a href="ejercicio7.php">Ejercicio 7</a></li>
		 <li><a href="ejercicio8.php">Ejercicio 8</a></li>
		 <li><a href="ejercicio9.php">Ejercicio 9</a></li>
		 <li><a href="ejercicio10.php">Ejercicio 10</a></li>
      	</ul>
		</div>
		 <center>
         <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <br>
		<?php

extract($_REQUEST,EXTR_SKIP);
    
 print "El numero de dia es: $numero";
            echo "<br>";
			echo "<br>";

    if($numero>=1 && $numero<=7){

    switch ($numero) {
    case 1:
        echo 'Domingo';
        break;
 
    case 2:
        echo 'Lunes';
        break;
 
    case 3:
        echo 'Martes';
        break;
 
    case 4:
        echo 'Miércoles';
        break;
 
    case 5:
        echo 'Jueves';
        break;
 
    case 6:
        echo 'Viernes';
        break;
 
    case 7:
        echo 'Sábado';
        break;
 }
 


    }
	?>
	<br>
	<br>
  <a href="Ejercicio8.php">Regresar</a>
       </center>
        </body>
            </html>