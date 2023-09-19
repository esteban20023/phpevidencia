<html>
<head>
    <title>Ejercicio Matemático con PHP</title>
</head>
<style>
body{
	background-color:#038C3E;
	 font-size: 1.6rem;
}
input{
    border-radius:.6em ;
    width: 12rem ;
	font-size: 1.6rem;
}
</style>
<body>
<center>
<hr>
    <h2>Suma de dos números</h2>
	<hr>
	<br>
	<br>
	<br>
    <form method="POST" action=""><br>
	ingrese el primer numero:<br>
	<input type="text" name="numero1"><br>
	ingrese el segundo numero:<br>
	<input type="text" name="numero2"><br>
	Oprime el boton para sumar <br>
	<input type="submit" value="Sumar"><br>
    </form>
    <?php
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$suma = $numero1 + $numero2;
	 echo"la suma de ".$numero1." mas ".$numero2." es igual a: ".$suma."";
    ?>
	</center>
</body>
</html>




