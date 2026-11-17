<?php
    

?>

<!-- Tela de cadastro -->
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
            <label class="form-control form-adorn">
                <div class="form-adorn-icon">
                    <i class="bi bi-calendar-week"></i>
                </div>
                <input type="text" name="dataNascimento" class="form-ghost w-12" id="cadastroDataNascimento" data-bs-toggle="datepicker" autocomplete="off" placeholder="Escolha uma data…" required>
            </label>
        </div>
        <div class="mb-3 w-50">
            <label for="cadastroCPF" class="form-label">CPF</label>
            <label class="form-control form-adorn">
                <div class="form-adorn-icon">
                    <i class="bi bi-card-heading"></i>
                </div>
                <input type="text" name="CPF" class="form-ghost w-12" id="cadastroCPF" placeholder="***.***.***-**" required>
            </label>
        </div>
        <button type="submit" class="btn btn-solid theme-primary">Cadastrar</button>
    </form>
</div>