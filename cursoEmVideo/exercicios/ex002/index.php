<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        Exemplo dee PHP
    </h1>
    <?php
        date_default_timezone_set("America/Manaus");
        echo "Hoje é dia " . date("d/m/y");
        echo " e a hora atual é " . date("G:i:s")
    ?>

    
</body>
</html>