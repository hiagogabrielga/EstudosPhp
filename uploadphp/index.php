<?php
include("config.php");

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    //var_dump($_FILES['arquivo']);

    if ($arquivo['error'])
        die("Falha ao enviar arquivo");

    if ($arquivo['size'] > 2097152)
        die("Arquivo muito Grande!! Max: 2MB");



    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));


    if ($extensao != "jpg" && $extensao != "png")
        die("Tipo de arquivo não aceito");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deu_certo)
        echo ("<p>Arquivo enviado com sucesso!</p>");
    $conn->query("INSERT INTO upload (path, nome) VALUE('$novoNomeDoArquivo','$nomeDoArquivo.')") or die($conn->error);
    //1024 bytes = 1kb
    //1024 kb = 1mb
};
$sql_quey = $conn->query("SELECT * FROM upload") or die("$conn->error");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadr em php</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="">
        <label for="">Selecione seu arquivo</label>
        <p><input type="file" name="arquivo" id=""></p>
        <button type="submit">Enviar arquivo</button>
    </form>
    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
        </thead>
        <tbody>
            <?php
            while ($arquivo = $sql_quey->fetch_assoc()) {
            ?>
            <ty>
                <td></td>
                <td><?php echo $arquivo['nome']; ?></td>
                <td><?php echo date("d/m/y H:i", strtotime($arquivo['data_uplod'])); ?></td>
            </ty>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>