<html>
<head>
    <title>Ejercicio Matemático con PHP</title>
</head>
<style>
body{
	background-color:#0CF25D;
	 font-size: 1.6rem;
	 color: #FFFFFF;
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
    <h2>La multiplicacion de dos números</h2>
	<hr>
	<br>
	<br>
	<br>
	<hr>
    <form method="POST" action=""><br>
	ingrese el primer numero:<br>
	<input type="text" name="numero1"><br>
	ingrese el segundo numero:<br>
	<input type="text" name="numero2"><br>
	Oprime el boton para multiplicar <br>
	<input type="submit" value="multiplicar"><br>
    </form>
	<hr>
    <?php
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$multiplicar = $numero1 * $numero2;
	echo"la suma de ".$numero1." * ".$numero2." es igual a: ".$multiplicar."";
    ?>
	</center>
</body>
</html>