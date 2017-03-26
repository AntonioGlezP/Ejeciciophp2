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

print "Tu nombre es: $nombre";
echo"<br>";
echo"<br>";

 if($_REQUEST['edad']>=18)
 {
     echo " Tienes $edad  Años eres mayor de edad";
      
 }
else{
    echo "Tienes $edad Años eres menor de edad";
}


?>
       <br>
	   <br>
            
        
        <a href="Ejercicio6.php">Regresar</a>
       </center>
        </body>
            </html>