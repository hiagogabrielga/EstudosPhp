<?php 

if(isset($_POST['email']) || isset($_POST['email'])) {
    if(strlen($_POST['email'])==0) {
        echo "Preencha seu e-mail";
    } elseif (strlen($_POST['email']) == 0) {
        echo "preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sqlQuery = $conn ->query($sql) or die("Flanha na execução do codigo SQL: ". $conn->error);
        $quantidade = $sqlQuery ->num_rows;

        if ($quantidade == 1) {
            $usuario = $sqlQuery->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['adm'] = $usuario['adm'];

            header("Location: index.php");
        } else {
            echo "Falha ao logar, senha ou email incorretos";
        };
    };
};
?>

<div id="janelaCentral">
    <div class="telaAdicionarLivros">
        <h2 id="tituloAdicionarLivro">Logar</h2>
        <form action="" method="POST">
            <div class="inputCadastro">
                <label>E-mail: </label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="inputCadastro">
                <label>Senha: </label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <div id="enviadiv">
                <button type="submit" class="btn btn-primary">Logar</button>
            </div>
        </form>
    </div>