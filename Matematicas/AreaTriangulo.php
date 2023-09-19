<?php

function AreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

$base = isset($_POST['base']) ? $_POST['base'] : '';
$altura = isset($_POST['altura']) ? $_POST['altura'] : '';
$area = '';

if ($base && $altura) {
    $area =AreaTriangulo($base, $altura);
}

?>

<html>
<head>
    <title>Calcular Área del Triángulo</title>
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
</head>
<body>
<center>
    <h1>Calcular Área del Triángulo</h1>
    <form method="post" action="">
        <label for="base">Base:</label>		
        <input type="number" name="base" id="base" required>
        <br><br>
        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($area): ?>
        <h2>El área del triángulo con base <?php echo $base; ?> y altura <?php echo $altura; ?> es: <?php echo $area; ?></h2>
    <?php endif; ?>
	</center>
</body>
</html>