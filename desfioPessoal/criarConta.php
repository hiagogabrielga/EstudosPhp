<form action="?page=salvarUsuario" method="POST">
    <input type="hidden" name="acao" value="cadastrarUsuario">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deseja ser adiministrado?</label>
        <select name="adm" id="escolhaDeAdm" required>
            <option value="0" select>Não</option>
            <option value="1">Sim</option>
        </select>
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>