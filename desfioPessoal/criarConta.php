<div id="janelaCentral">
    <div class="telaAdicionarLivros">
        <h2 id="tituloAdicionarLivro">CRIAR CONTA</h2>
        <form action="?page=salvarUsuario" method="POST">
            <input type="hidden" name="acao" value="cadastrarUsuario">
            <div class="inputCadastro">
                <label>Nome Completo: </label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="inputCadastro">
                <label>E-mail: </label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="inputCadastro">
                <label>Senha: </label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <div class="inputCadastro">
                <label>Data de nascimento: </label>
                <input type="date" name="data_nasc" class="form-control">
            </div>

            <div class="inputCadastro">
                <label>Deseja ser adiministrado?</label>
                <select name="adm" id="escolhaDeAdm" required>
                    <option value="0" select>Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>


            <div id="enviadiv">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </form>
    </div>
</div>