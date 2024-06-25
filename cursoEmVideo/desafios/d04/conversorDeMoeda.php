<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertendo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $cotacao = 5.22;
            $valorReais = $_GET["valorReais"] ?? 0;

            $ValorDolar = $valorReais / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $valorReais, "BRL") . " Equivale a " . numfmt_format_currency($padrao, $ValorDolar, "USD") . "</p>";

            echo " <p><strong>'Cotação fixade R$ $cotacao '</strong> iformada diretamente do código.</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>

</body>

</html>