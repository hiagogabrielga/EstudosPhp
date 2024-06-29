<?php 
include("barraLateral.php");
if (isset($_POST["filtroCategoria"])) {
    if (($_POST["filtroCategoria"]) != "") {
        $filtrarCategoria = $_POST["filtroCategoria"];
        $sql = "SELECT * FROM livro WHERE categoria = \"$filtrarCategoria\"";
    } else $sql = "SELECT * FROM livro ORDER BY nomeLivro ASC;";
} else $sql = "SELECT * FROM livro ORDER BY nomeLivro ASC;";

$res = $conn->query($sql);
$qtd = $res->num_rows;
print "<div class=\"conteudoCentral\">";
print "<div class=\"livros\">";

if ($qtd > 0) {
    while ($row = $res->fetch_object()) {

        $row->idLivro;
        print "<div class=\"divTituloImgSinopse\">";
        print "<h2>$row->nomeLivro</h2>";
        print "<p>$row->categoria</p>";
        print "<div class=\"divImgSinopse\">";
        print "<img src=\"$row->imagemLivro\" alt=\"Imagem do livro $row->nomeLivro\">";
        print "<div class=\"sinopse\">";
        print "<h3>Sinopse</h3>";
        print "<p>$row->sinopseLivro</p>";
        print "</div>";
        print "<button onclick=\"location.href='?page=editar&idLivro=" . $row->idLivro . "'\" id=\"botaoEditar\">Editar</button>

        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&idLivro=" . $row->idLivro . "';}else{false}\" id=\"botaoExcluir\">Excluir</button>";
        print "</div>";
        print "</div>";
    };
} else {
    print "<p class='alert alert-danger'>Não encrontou resultados!</p>";
};
print "</div>";
print "</div>";

?>