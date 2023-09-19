<!DOCTYPE html>
<html>
<head>
    <title>Calcular Área del Cuadrado</title>
</head>
<body>
    <h1>Calcular Área del Cuadrado</h1>
    
    <?php
    $lado = isset($_POST['lado']) ? $_POST['lado'] : '';
    $area = '';

    if ($lado) {
        $area = $lado * $lado; 
    }
    ?>

    <form method="post" action="">
        <label for="lado">Longitud del lado:</label>
        <input type="number" name="lado" id="lado" required>
        <br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php if ($area): ?>
        <h2>El área del cuadrado con un lado de <?php echo $lado; ?> unidades es: <?php echo $area; ?> unidades cuadradas</h2>
    <?php endif; ?>
</body>
</html>
