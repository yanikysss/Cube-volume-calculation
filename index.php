<?php
$volume = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = 0;
    if (isset($_POST['edge'])) {
        $a = floatval($_POST['edge']);
    }

    if ($a > 0) {
        $volume = $a * $a * $a;
    } else {
        $error = 'Ошибка: длина ребра должна быть положительным числом.';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление объёма куба</title>
</head>
<body>
    <h1>Вычисление объёма куба</h1>

    <form method="post" action="">
        <label for="edge">Длина ребра куба (a):</label>
        <input type="number" id="edge" name="edge" step="any" required><br><br>
        
        <input type="submit" value="Вычислить объём">
    </form>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <?php if ($volume !== null): ?>
        <p><strong>Объём куба:</strong> <?php echo $volume; ?></p>
    <?php endif; ?>
</body>
</html>
