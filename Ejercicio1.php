  <html >
  <head>
     <title>Ejercicios 1</title>	 
   <link rel="stylesheet" type="text/css" href="css/Style.css">
     <meta charset="utf-8"/>
  </head class="areaPrincipal">
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
		 </div >
		<center><h1>PROGRAMACION DE APLICACIONES WEB</h1>
  <h4>hacer un programa que sume, reste y multiplique y divida 2 variables.</h4>
  
 
  <?php
  $numero1=10;
  $numero2=12;
   //SUMAR
  $suma=$numero1+$numero2."<br>";
  echo  "$numero1+$numero2"."<br>";
  echo "suma =" .$suma."<br>";
  //RESTA
   $resta=$numero1-$numero2."<br>";
   echo  "$numero1-$numero2"."<br>";
   echo "resta =" .$resta."<br>";
  //MULTIPLICAR
  $multiplicacion=$numero1*$numero2."<br>";
  echo  "$numero1*$numero2"."<br>";
  echo "multiplicacion =" .$multiplicacion."<br>";
  //DIVICION
  $divicion=$numero1/$numero2."<br>";
  echo  "$numero1/$numero2"."<br>";
  echo "divicion =" .$divicion."<br>";  
  
  ?>
 
  <P>Antonio de Jesús González Pineda</P>
  
  </center>  
  </body>  
</html>