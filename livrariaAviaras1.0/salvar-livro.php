<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomeLivro = $_POST["nomeLivro"];
        $categoria = $_POST["categoria"];
        if (isset($_FILES['imagemLivro'])) {
            $arquivo = $_FILES['imagemLivro'];
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
            //1024 bytes = 1kb
            //1024 kb = 1mb
        };




        $sinopseLivro = $_POST["sinopseLivro"];

        $sql = "INSERT INTO livro (nomeLivro, categoria, imagemLivro, sinopseLivro) VALUES ('{$nomeLivro}','{$categoria}', '{$path}','{$sinopseLivro}')";

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Livro adcionado feito com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possivel adicionar este livro ao catálogo');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
    case 'editar':
        $nomeLivro = $_POST["nomeLivro"];
        $categoria = $_POST["categoria"];
        if (isset($_FILES['imagemLivro'])) {
            $arquivo = $_FILES['imagemLivro'];
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
                echo ("");
            //1024 bytes = 1kb
            //1024 kb = 1mb
        };


        $sinopseLivro = $_POST["sinopseLivro"];


        $sql = "UPDATE livro SET
                nomeLivro = '{$nomeLivro}',
                categoria = '{$categoria}',
                imagemLivro = '{$path}',
                sinopseLivro = '{$sinopseLivro}'
            WHERE 
                idLivro=" . $_REQUEST["idLivro"];


        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Livro editado com sucesso');</script>";
            echo "<script>location.href='?page=alterar';</script>";
        } else {
            echo "<script>alert('Não foi possivel editar');</script>";
            echo "<script>location.href='?page=alterar';</script>";
        };
        break;
    case 'excluir':
        $sql = "DELETE FROM livro WHERE idLivro=" . $_REQUEST["idLivro"];
        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Livro excluido com sucesso');</script>";
            echo "<script>location.href='?page=alterar';</script>";
        } else {
            echo "<script>alet('Não foi possivel excluir');</script>";
            echo "<script>location.href='?page=alterar';</script>";
        };
        break;
}
