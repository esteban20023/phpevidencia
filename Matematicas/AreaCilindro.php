<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Calculadora de Área de Cilindro</h1>
    
    <?php
    $radio = isset($_POST['radio']) ? $_POST['radio'] : '';
    $altura = isset($_POST['altura']) ? $_POST['altura'] : '';
    $areaBase = '';
    $areaLateral = '';
    $areaTotal = '';

    if ($radio && $altura) {

        $areaBase = M_PI * pow($radio, 2);


        $areaLateral = 2 * M_PI * $radio * $altura;
        $areaTotal = 2 * $areaBase + $areaLateral;
    }
    ?>

    <form method="post" action="">
        <label for="radio">Radio de la base (cm):</label>
        <input type="number" name="radio" id="radio" required>
        <br>
        <label for="altura">Altura del cilindro (cm):</label>
        <input type="number" name="altura" id="altura" required>
        <br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php if ($areaTotal !== ''): ?>
        <h2>El área total del cilindro es: <?php echo $areaTotal; ?> cm²</h2>
    <?php endif; ?>
</body>
</html>
