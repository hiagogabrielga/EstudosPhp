<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de dceclarações</title>
</head>
<body>
    <h1>teste de declaração e de if</h1>
    <?php 
        $nome = "Hiago";
        $sobreNome = "Gabriel";
        const PAIS = "BRASILLLLL";
        echo "OLá $nome $sobreNome Você Mora no " . PAIS;
        $numeroUm = random_int(1,15);
        if ($numeroUm >=1 ) {
            echo "\nSeu número é $numeroUm";
            if ($numeroUm == 13) {
                echo "\nVocê é petista, logo não gosto de vc";
            }
        }
        
    ?>
</body>
</html>