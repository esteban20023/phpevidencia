<!DOCTYPE html>
<html>
<head>
    <title>Verificar Igualdad</title>
</head>
<body>
    <h1>Verificar Igualdad</h1>
    
    <?php
    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : '';
    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';
    $resultado = '';

    if ($numero1 !== '' && $numero2 !== '') {
        if ($numero1 == $numero2) {
            $resultado = "Los números $numero1 y $numero2 son iguales.";
        } else {
            $resultado = "Los números $numero1 y $numero2 no son iguales.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br>
        <input type="submit" value="Verificar Igualdad">
    </form>

    <?php if ($resultado !== ''): ?>
        <h2><?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
