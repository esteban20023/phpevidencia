<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Raíz Cuadrada</title>
</head>
<body>
    <h1>Calculadora de Raíz Cuadrada</h1>

    <?php
    $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
    $resultado = '';

    if ($numero) {
        if ($numero >= 0) {
            $resultado = sqrt($numero);
        } else {
            $resultado = "Error: No se puede calcular la raíz cuadrada de un número negativo";
        }
    }
    ?>

    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <br>
        <input type="submit" value="Calcular Raíz Cuadrada">
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>La raíz cuadrada de <?php echo $numero; ?> es igual a <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
