<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--<link rel="stylesheet" href="css/footer.css">-->

    <title>Livraria Aviaras</title>
</head>


<body>
    <header>
        <?php if (!isset($_SESSION)) {
                    session_start();
                }

                if (!isset($_SESSION['id'])) {
                    print "<h1 id=\"tituloDeBoasVindas\">Bem vindo à Aviaras</h1>";

                } if (isset($_SESSION['id'])) {?> <h1 id="tituloDeBoasVindas">Bem vindo à Aviaras <?php print  explode(" ",$_SESSION['nome'])[0] . " ".explode(" ",$_SESSION['nome'])[count(explode(" ", $_SESSION['nome']))-1];?></h1><?php };?>
        ?>


    </header>
    <nav class="barraSuperior">
        <div>
            <ul class="ulNav">
                <li>
                    <a href="?page=home"> <i class="bi bi-house-door-fill"> Home</i></a>
                </li>

                <li>
                    <a href="?page=listar"><i class="bi bi-bookmark-fill"> Livros</i></a>
                </li>
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }

                if (!isset($_SESSION['id'])) {
                    print "";
                }else {?>
                    <?php $adm = $_SESSION['adm'];?>
                    <?php
                    if ($adm == 1) {
                        print "<li>
                    <a href=\"?page=novo\"><i class=\"bi bi-bookmark-plus-fill\"> Adicionar Livros</i></a></a>
                </li>
                <li>
                    <a href=\"?page=alterar\"><i class=\"bi bi-clipboard2-pulse-fill\"> Alterar catálogo</i></a>
                </li>";
                    };
                }


                ?>

                <li>
                    <a href="?page=sobre"><i class="bi bi-info-circle-fill"> Sobre</i></a>
                </li>
                <li>
                    <a href="?page=conta"><i class="bi bi-person-circle"> Conta</i></a>
                </li>
            </ul>
        </div>

    </nav>
    <main>
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
            case "home":
                include("home.php");
                break;
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
            case "sobre":
                include("sobre.php");
                break;
            case "conta":
                include("conta.php");
                break;
            case "criarConta":
                include("criarConta.php");
                break;
            case "logarConta":
                include("logarConta.php");
                break;

            case "salvarUsuario":
                include("salvar-usuario.php");
                break;

            default;
                include("home.php");
        };

        ?>
    </main>
    <footer>
        <div class="conteudoFooter">
            <h2>Fim da pagína</h2>
            <div class="redesSociais">
                <h3>Aqui estão minhas rdes sociais abandonadas (Exeto o GitHub)</h3>
                <ul>
                    <br>
                    <li><span><a href="https://github.com/hiagogabrielga" target="_blank"><i class="bi bi-github">GitHub</i></a></span></li>
                    <br>
                    <li><span><a href="" target="_blank"><i class="bi bi-twitter-x">Twitter X</i></a></span></li>
                    <br>
                    <li><span><a href="https://www.instagram.com/hiago.gabriel.940098?igsh=MWtidnV1MTVla2Mzaw==" target="_blank"><i class="bi bi-instagram"> Instagram</i></a></span></li>
                    <br>
                    <li><span><a href="https://www.facebook.com/hiago.gabriel.940098?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"> Facebook</i></a></span></li>
                    <br>
                </ul>
            </div>
            <div id="direitosAutorais">
                <h3>&copy; Site criado por um aluno</h3>
            </div>
        </div>

    </footer>
</body>

</html>