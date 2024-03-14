<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="matriz.php" method="post">
        <?php 
            for ($i = 1; $i <= 6; $i++) { 
        ?>
        <h2>
            Número: <?php echo $i; ?>
            <input type="number" name="num<?php echo $i; ?>">
        </h2>
        <?php 
            }
        ?>
        <h2>
            <button type="submit">Enviar</button>
        </h2>
    </form>
</body>
</html>