<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    
    <?php
    $fahrenheit = isset($_POST['fahrenheit']) ? $_POST['fahrenheit'] : '';
    $celsius = '';

    if ($fahrenheit !== '') {
        $celsius = ($fahrenheit - 32) * (5/9); 
    }
    ?>

    <form method="post" action="">
        <label for="fahrenheit">Temperatura en Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" required>
        <br>
        <input type="submit" value="Convertir a Celsius">
    </form>

    <?php if ($celsius !== ''): ?>
        <h2>La temperatura en Celsius es: <?php echo $celsius; ?> grados Celsius</h2>
    <?php endif; ?>
</body>
</html>
