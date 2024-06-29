<nav class="barraLateral">;
    <h3>
        Filtrar
    </h3>
    <form action="?page=listar" method="POST">
        <label>Categoria do Livro</label>
        <input type="text" name="filtroCategoria" id="idFiltroCategoria" list="listaCategoria">
        <datalist id="listaCategoria">
            <option>Comédia</option>
            <option>Ficção Cientifica</option>
            <option>Terror</option>
            <option>Romance</option>
            <option>Drama</option>
            <option>Educativo</option>
            <option>Mistério</option>
        </datalist>

        <button id="Filrar" type="submit" class="btn btn-primary">Enviar</button>
    </form>
</nav>