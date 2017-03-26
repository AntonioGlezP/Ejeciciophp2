  <html >
  <head>
     <title>Ejercicios 2</title>
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
  <h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4>
  <?php
  echo "<table border=1>";
  $n=1;
  for ($n1=1; $n1<=10; $n1++)
  {
   echo "<tr>";
   for ($n2=1; $n2<=10; $n2++)
   {
	echo "<td>", $n, "<td>";
	 $n=$n+1;
   }
    echo "</tr>";
  }
  echo "</table>";  
	  ?>  
	  <P>Antonio de Jesús González Pineda</P>
      </center>
	  </body>  
</html>
