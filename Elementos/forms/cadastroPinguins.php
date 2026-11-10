<div class="card theme-primary" style="width:80%; max-width: 650px;">
    <div class="card-header">
        <h2 class="mb-5"><i class="bi bi-plus-square"></i> Novo Pinguim</h2>
    </div>
    <form class="card-body" method="POST">
        <div class="mb-3">
            <label for="cadastroNome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="cadastroNome" placeholder="Astoldo" required>
        </div>
        <div class="mb-3 w-10">
            <label for="cadastroDataNascimento" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control w-12" id="cadastroDataNascimento" data-bs-toggle="datepicker" autocomplete="off" placeholder="Escolha uma data…">
        </div>
        <div class="mb-3">
            <label for="cadastroDescricao" class="form-label">Descrição</label>
            <textarea type="text" name="descricao" class="form-control" id="cadastroDescricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-solid theme-primary">Cadastrar</button>
    </form>
</div>