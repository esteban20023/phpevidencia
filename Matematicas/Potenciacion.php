<!DOCTYPE html>
<html>
<head>
    <title>Calcular Potenciación</title>
</head>
<body>
    <h1>Calcular Potenciación</h1>
    
    <?php
    $base = isset($_POST['base']) ? $_POST['base'] : '';
    $exponente = isset($_POST['exponente']) ? $_POST['exponente'] : '';
    $resultado = '';

    if ($base && $exponente) {
        $resultado = pow($base, $exponente); 
    }
    ?>

    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="number" name="base" id="base" required>
        <br>
        <label for="exponente">Exponente:</label>
        <input type="number" name="exponente" id="exponente" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado !== ''): ?>
        <h2><?php echo $base; ?> elevado a la <?php echo $exponente; ?> es igual a <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
