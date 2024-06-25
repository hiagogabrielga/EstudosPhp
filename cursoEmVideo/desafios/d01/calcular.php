<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Resultado Final
        </h1>
        <?php
        $numero = $_GET["numero"];
        echo "<p>O número escolhindo foi <strong>$numero</strong></p>";
        echo "<p>O seu antecessor é " . $numero - 1 . "</p>";
        echo "<p>O seu sucessor é " . $numero + 1 . "</p>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>


</body>

</html>