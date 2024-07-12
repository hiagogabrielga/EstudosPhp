<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    print
        "<div class=\"conteuLogarCriar\">
        <h2>Você não está logado</h2>
        <div class=\"criarLogar\">
            <a id=\"btnCriarconta\" href=\"?page=criarConta\"><i class=\"bi bi-person-add\"> Criar conta</i></a>
            <a href=\"?page=logarConta\" id=\"btnLogarconta\"><i class=\"bi bi-box-arrow-in-right\"> Logar</i> </a>
        </div>
    </div>";
} else {
    print "<div class=\"conteuLogarCriar\">"?>
    <h2>Olá, <?php print  explode(" ",$_SESSION['nome'])[0] . " ".explode(" ",$_SESSION['nome'])[count(explode(" ", $_SESSION['nome']))-1];?></h2>
    <?php 
    print "   <div class=\"criarLogar\">
        <a id=\"btnSairconta\" href=\"logout.php\"><i class=\"bi bi-x-circle\"> Sair</i></a>
    </div>
</div>";
    

};
?>