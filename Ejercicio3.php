<html >
  <head>
     <title>Ejercicios 3</title>
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
  <h4>Mostrar en pantalla una tabla de 1 por 10</h4>
  <?php
   //Al codigo deberas agregar una tabla para que la lista sea visualizada
     echo "<table background=listade.jpg; border=1>";
	  echo "<tr>";
	 
	 echo "<h2>BUCLE WHILE</h2>";
	 
	 for ($i=0; $i<=10; $i++) //este es eñ bucle, mientras se cumpla la condicion
	 {
		 echo "<td>","Linea".$i."<br>","</td>"; // se ejecuta esta sentencia, es decir 10 veces
	  echo "</tr>";
	 }
       echo "</table>";  
	  ?>  
	  <P>Antonio de Jesús González Pineda</P>
      </center>
  </body>  
</html>
