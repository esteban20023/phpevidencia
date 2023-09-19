<!DOCTYPE html>
<html>
<head>
    <title>Calcular Porcentaje</title>
</head>
<body>
    <h1>Calcular Porcentaje</h1>
    
    <?php
    $valorTotal = isset($_POST['valorTotal']) ? $_POST['valorTotal'] : '';
    $porcentaje = isset($_POST['porcentaje']) ? $_POST['porcentaje'] : '';
    $resultado = '';

    if ($valorTotal && $porcentaje) {
        $resultado = ($porcentaje / 100) * $valorTotal; 
    }
    ?>

    <form method="post" action="">
        <label for="valorTotal">Valor Total:</label>
        <input type="number" name="valorTotal" id="valorTotal" required>
        <br>
        <label for="porcentaje">Porcentaje (%):</label>
        <input type="number" name="porcentaje" id="porcentaje" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>El <?php echo $porcentaje; ?>% de <?php echo $valorTotal; ?> es igual a <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
