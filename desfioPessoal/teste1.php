<!DOCTYPE html>
<html lang="ept-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviaras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <header>
        <h1 id="tituloDeBoasVindas">Bem vindo à Aviaras</h1>

    </header>
    <nav class="barraSuperior">
        <div>
            <ul class="ulNav">
                <li>
                    <a href="index.php"> <i class="bi bi-house-door-fill">Home</i></a>
                </li>

                <li>
                    <a href="#"><i class="bi bi-cart4">Loja</i></a>
                </li>

                <li>
                    <a href=""><i class="bi bi-info-circle-fill">Sobre</i></a>
                </li>

                <li>
                    <a href=""><i class="bi bi-person-circle">Conta</i></a>
                </li>
            </ul>
        </div>

    </nav>
    <main>
        <nav class="barraLateral">
            <h3>
                Filtros
            </h3>
            <ul class="ulNavaLteral">
                <li>Terror <input type="button" value="terror"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>



        <div class="conteudoCentral">
            <div class="livros">
                <div class="divTituloImgSinopse">
                    <h2>Meridiano de sangue</h2>
                    <div class="divImgSinopse">
                        <img src="img/livroMeridianoDeSangue.jpg" alt="">
                        <div class="sinopse">
                            <h3>Sinopse</h3>
                            <p>
                                Meridiano de sangue é um romance épico. Nele, McCarthy reinventa a mitologia do Oeste
                                americano para criar uma obra ao mesmo tempo grandiosa e arrebatadora sobre uma terra
                                sem lei, em que o absurdo e a alucinação se sobrepõem à realidade.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="divTituloImgSinopse">
                    <h2>A pequena Sereia</h2>
                    <div class="divImgSinopse">
                        <img src="img/livroPequenaSereia.jpg" alt="">
                        <div class="sinopse">
                            <h3>Sinopse</h3>
                            <p>uma jovem sereia disposta a dar a sua vida nos mares e a sua identidade como sereia, a
                                fim de conseguir uma alma e o amor de um príncipe humano.</p>
                        </div>
                    </div>

                </div>
                <?php 
                    print "<div class=\"divTituloImgSinopse\">";
                        print "<h2>$nomeDoLivro</h2>";
                        print "<div class=\"divImgSinopse\">";
                            print "<img src=\"$imagemLivro\" alt=\"Imagem do livro $nomeDoLivro\">";
                            print "<div class=\"sinopse\">";
                                print "<h3>Sinopse</h3>";
                                print "<p>$sinopseLivro</p>";
                            print "</div>";
                        print "</div>";
                    print "</div>";
                ?>
                <div class="divTituloImgSinopse">
                    <h2>Pequeno Principe</h2>
                    <div class="divImgSinopse">
                        <img src="img/livroPequenoPrincipe.jpg" alt="">
                        <div class="sinopse">
                            <h3>Sinopse</h3>
                            <p>O Pequeno Príncipe vive em um pequeno planeta, com apenas três vulcões e uma flor. Ele se
                                preocupa com a flor e a protege de todo o mal, e um dia decide sair de seu planeta para
                                explorar outros mundos. Em sua jornada, ele encontra várias criaturas estranhas e
                                coloridas, incluindo um rei, um vaidoso, um homem de negócios e uma raposa.</p>
                        </div>
                    </div>

                </div>
            </div>

    </main>
</body>

</html>