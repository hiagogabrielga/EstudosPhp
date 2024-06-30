<?php 
include('config.php');

if(isset($_POST['email']) || isset($_POST['email'])) {
    if(strlen($_POST['email'])==0) {
        echo "Preencha seu e-mail";
    } elseif (strlen($_POST['email']) == 0) {
        echo "preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'";
        $sqlQuery = $conn ->query($sql) or die("Flanha na execução do codigo SQL: ". $conn->error);
        $quantidade = $sqlQuery ->num_rows;

        if ($quantidade == 1) {
            $usuario = $sqlQuery->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } else {
            echo "Falha ao logar, senha ou email incorretos";
        };
    };
};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email" id="emial">
        </p>

        <p>
            <label>Senha</label>
            <input type="password" name="senha" id="senha">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>