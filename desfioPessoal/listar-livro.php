<?php
$sql = "SELECT * FROM livro ORDER BY nomeLivro ASC;
";
$res = $conn->query($sql);
$qtd = $res->num_rows;
include("barraLateral.php");
print "<div class=\"conteudoCentral\">";
    print "<div class=\"livros\">";

if ($qtd > 0) {
    while ($row = $res->fetch_object()) {

        print "<div class=\"divTituloImgSinopse\">";
            print "<h2>$row->nomeLivro</h2>";
            print "<div class=\"divImgSinopse\">";
                print "<img src=\"$row->imagemLivro\" alt=\"Imagem do livro $row->nomeLivro\">";
                print "<div class=\"sinopse\">";
                    print "<h3>Sinopse</h3>";
                    print "<p>$row->sinopseLivro</p>";
                print "</div>";
            print "</div>";
        print "</div>";
    };
} else {
    print "<p class='alert alert-danger'>Não encrontou resultados!</p>";
};
    print "</div>";
print "</div>";

?>