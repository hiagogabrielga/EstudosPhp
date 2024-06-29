<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <!--<link rel="stylesheet" href="css/footer.css">-->

    <title>Livraria Aviaras</title>
</head>


<body>
    <header>
        <h1 id="tituloDeBoasVindas">Bem vindo à Aviaras</h1>

    </header>
    <nav class="barraSuperior">
        <div>
            <ul class="ulNav">
                <li>
                    <a href="index.php"> <i class="bi bi-house-door-fill"> Home</i></a>
                </li>

                <li>
                    <a href="?page=listar"><i class="bi bi-cart4"> Loja</i></a>
                </li>

                <li>
                    <a href="?page=novo"><i class="bi bi-plus-square"> Adicionar Livro</i></a></a>
                </li>
                <li>
                    <a href="?page=alterar"><i class="bi bi-clipboard2-pulse-fill"> Alterar catálogo</i></a>
                </li>

                <li>
                    <a href=""><i class="bi bi-info-circle-fill"> Sobre</i></a>
                </li>

                <li>
                    <a href=""><i class="bi bi-person-circle"> Conta</i></a>
                </li>
            </ul>
        </div>

    </nav>
    <main>
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
            case "novo":
                include("adicionar-livro.php");
                break;
            case "listar":
                include("listar-livro.php");
                break;
            case "salvar":
                include("salvar-livro.php");
                break;
            case "alterar":
                include("alterarCatalogo.php");
                break;
            case "editar":
                include("editar-livro.php");
                break;
            default;
                include("listar-livro.php");
        };

        ?>
    </main>
    <footer>

    </footer>
    <script src="js/*"></script>
</body>

</html>