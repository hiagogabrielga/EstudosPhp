<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleátórios</h1>
        <p>Gerando um número aleátório entre 0 e 100...</p>
        <?php
            $numeroAleatorio = random_int(1, 100);
            echo "<p>O valor gerado foi <strong>$numeroAleatorio</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; De novo</button>
    </main>

</body>

</html>