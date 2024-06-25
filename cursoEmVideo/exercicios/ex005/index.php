<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de string</title>
</head>
<body>
    <h1>Aspas duplas (double quoted)</h1>
    <?php echo "PHP \u{1F418}"//PHP 🐘
    //Interpleta o conteudo/string.
    ?>
    <h1>Aspas simples (single quoted)</h1>
    <?php echo 'PHP \u{1F418}'//PHP \u{1F418}
    //Não há interpretação do conteúdo/string
    ?>

    <h1>Concatenação de string</h1>
    <?php 
    $nome = "Hiago";
    $sobreNome = " Gabriel";
    echo $nome . $sobreNome
    //No php é feito pelo " . " 
    ?>

    <h1>String com constante</h1>
    <?php
    const ESTADO = "RO";
    echo "<p>Moro no Estado ESTADO</p>";
    //Moro no Estado ESTADO
    echo "<p>Moro no Estado " . ESTADO . "</p>";
    //Moro no Estado RO

    //Para constantes e para resultado de funções não funciuona a interpletação entre aspas quaisquer que sejam.
    ?>
     
    <h1>Problema do minotauro</h1>
    <?php 
    $nom = "Rodrigo";
    $sNome = "Nogueira";
    echo "$nom \"Minoutaro\" $sNome";
    ?>

    <h1>Valvulas de escape</h1>
    <?php 
    echo "<p>A história O Rato Roeu a roupa\vestido da rainha que tem usa$na conta na sua conta u{1F418}</p>";
    
    echo "A história\n O Rato Roeu a roupa\\\tvestido da rainha que tem usa\$na conta na sua conta \u{1F418}";
    // \n Nova linha 
    // \t Tabulação horizontal
    // \\ barra invertida
    // \$ Sinal de cifrão
    // \u{} Codepoint Unicode
    ?>

    <h1>Sintaxe Heredoc</h1>
    <?php
    $curso = "PHP";
    $ano = date('y');
    echo <<< "TESTE"
        Estou estudando
            $curso em $ano
    TESTE;
 
    ?>
    
</body>
</html>