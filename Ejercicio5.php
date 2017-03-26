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
  <h4>Mostrar en pantalla cual es la mayor de tres números</h4>
  <?php
    $n1=54;
    $n2=10;
    $n3=36;
     // se busca la mayor
     if (($n1 > $n2) && ($n1 > $n3)) {
    echo $n1. ' es  mayor que  '.$n2.'  y  '.$n3;
    } elseif (($n2 > $n1) && ($n2 > $n3)) {
    echo $n2.'  es  mayor que  '.$n1.'  y  '.$n3;
    } elseif (($n3 > $n1) && ($n3 > $n2)) {
    echo $n3.'  es  mayor que  '.$n1.' y '.$n2;
    }
echo '<br />';

   ?>  
	  <P>Antonio de Jesús González Pineda</P>
      <center>
  </body>  
</html>