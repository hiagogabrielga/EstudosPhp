<?php 
 $sql = "SELECT * FROM livro";

 $res = $conn->query($sql);
 $qtd = $res->num_rows;
 print "<div class=\"conteudoCentralHome\">";
 print "<h2 id=\"mensagemHome\">Bem vindo à livraria Aviaras, um site de uma amador que sonha e vai ser grande!</h2>";
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
         print "</div>";
         print "</div>";
     };
 } else {
     print "<p class='alert alert-danger'>Não encrontou resultados!</p>";
 };
 print "</div>";
 print "</div>";
 
?>