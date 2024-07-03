<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrarUsuario':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        $adm = $_POST["adm"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc, adm) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}','{$adm}')";

        $res = $conn->query($sql);

        if ($res==true) {
            echo "<script>alert('Cadastro feito com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alert('Não foi possivel castrar');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };

        $usuario = $res->fetch_assoc();
        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['adm'] = $usuario['adm'];
        
        header("Location: home.php");
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        $adm = $_POST["administrador"];

        $sql = "UPDATE usuarios SET 
                nome = '{$nome}',
                email = '{$email}',
                senha = '{$senha}',
                data_nasc ='{$data_nasc}'
                administrador ='{$adm}'
            WHERE 
                id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res==true) {
            echo "<script>alert('Cadastro editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alert('Não foi possivel editar');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if ($res==true) {
            echo "<script>alert('Cadastro excluido com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else {
            echo "<script>alert('Não foi possivel excluir');</script>";
            echo "<script>location.href='?page=listar';</script>";
        };
        break;
}
