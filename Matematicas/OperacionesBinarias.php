<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Binaria</title>
</head>
<body>
    <h1>Calculadora Binaria</h1>

    <?php
    $operando1 = isset($_POST['operando1']) ? $_POST['operando1'] : '';
    $operando2 = isset($_POST['operando2']) ? $_POST['operando2'] : '';
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';
    $resultado = '';

    if ($operando1 && $operando2 && $operacion) {
        switch ($operacion) {
            case 'suma':
                $resultado = decbin(bindec($operando1) + bindec($operando2));
                break;
            case 'resta':
                $resultado = decbin(bindec($operando1) - bindec($operando2));
                break;
            case 'multiplicacion':
                $resultado = decbin(bindec($operando1) * bindec($operando2));
                break;
            case 'division':
                if ($operando2 !== '0') {
                    $resultado = decbin(bindec($operando1) / bindec($operando2));
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
        }
    }
    ?>

    <form method="post" action="">
        <label for="operando1">Operando 1 (binario):</label>
        <input type="text" name="operando1" id="operando1" required>
        <br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <br>
        <label for="operando2">Operando 2 (binario):</label>
        <input type="text" name="operando2" id="operando2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
