<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomeLivro = $_POST["nomeLivro"];
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

        $sql = "INSERT INTO livro (nomeLivro,imagemLivro, sinopseLivro) VALUES ('{$nomeLivro}','{$path}','{$sinopseLivro}')";

        $res = $conn->query($sql);

        if ($res==true) {
            echo "<script>alert('Cadastro feito com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alet('Não foi possivel castrar');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
    case 'editar':
        $nomeLivro = $_POST["nomeLivro"];
        $imagemLivro = $_POST["imagemLivro"];
        $sinopseLivro = md5($_POST["sinopseLivro"]);

        $sql = "UPDATE livro SET 
                nomeLivro = '{$nomeLivro}',
                imagemLivro = '{$imagemLivro}',
                sinopseLivro = '{$sinopseLivro}'
            WHERE 
                id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res==true) {
            echo "<script>alert('Cadastro editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alet('Não foi possivel editar');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
    case 'excluir':
        $sql = "DELETE FROM livro WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if ($res==true) {
            echo "<script>alert('Cadastro excluido com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alet('Não foi possivel excluir');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
}
