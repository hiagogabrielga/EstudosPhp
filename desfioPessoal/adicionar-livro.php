<h2 id="texto">ADICIONAR LIVRO AO CATÁLOGO</h2>
<form enctype="multipart/form-data" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div id="campoNomeLivro">
        <label>Nome do livro</label><br>
        <textarea type="text" name="nomeLivro" rows="1" cols="30" placeholder="Digite o nome do Livro aqui"></textarea>
    </div>
    <div id="campoUploadImagem">
        <label>Imagem do Livro</label><br>
        <input id="inputArquivo" type="file" name="imagemLivro">
    </div>

    <div id="campoSinopse">
        <label><strong>Sinopse do Livro</strong></label><br>
        <textarea type="text" name="sinopseLivro" rows="10" cols="60" id="sinopse" placeholder="Limite de caracteres é de 500" oninput="contarCaracteres()"></textarea>
        <br>
        Quantidade de caracteres digitados: <span id="contador">0</span>
    </div>

    <div id="enviadiv">
        <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>

<script>
    function contarCaracteres() {
        const limiteCaracteres = 500;

        var sinopse = document.getElementById("sinopse")

        var mensagemConteudo = sinopse.value;

        if (mensagemConteudo.length > limiteCaracteres) {
            sinopse.value = mensagemConteudo.slice(0, limiteCaracteres);
            window.alert("Limite de caracteres atingido")
        }


        document.getElementById("contador").textContent = sinopse.value.length
    }
</script>