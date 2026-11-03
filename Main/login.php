<div class="card card-subtle theme-secondary m-auto" style="width:70%; max-width: 500px;">
    <div class="card-header">
        <h1>Login</h1>
    </div>
    <form class="card-body" action="" method="POST">
        <div class="mb-3">
            <label for="emailInput" class="form-label">Usuário</label>
            <label class="form-control form-adorn">
                <div class="form-adorn-icon">
                    <i class="bi bi-envelope-at"></i>
                </div>
                <input class="form-ghost" type="email" name="email" placeholder="seu-nome@exemplo.com" id="emailInput" required>
            </label>
        </div>
        <div class="mb-3">
            <label for="senhaInput" class="form-label">Senha</label>
            <input class="form-control" type="password" name="senha" id="senhaInput" required>
        </div>
        <button type="submit" class="btn-solid theme-primary">Entrar</button>
    </form>
</div>