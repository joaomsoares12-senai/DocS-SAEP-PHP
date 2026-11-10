<?php 
    function enviarErroUsuarioNaoEncontrado() {
        echo "
            <script type='module'>
                import {Dialog} from './bootstrap.js';

                const erro = new Dialog(document.getElementById('dialogUsuarioNaoEncontrado'));
                erro.show();
            </script>
        ";
    }
    function enviarErroSenhaIncorreta() {
        echo "
            <script type='module'>
                import {Dialog} from './bootstrap.js';

                const erro = new Dialog(document.getElementById('dialogSenhaInvalida'));
                erro.show();
            </script>
        ";
    }

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once("conexao/db.php");

        $email = $_POST["email"];
        $senhaCript = $_POST["senha"];

        $stmt = $db->prepare("SELECT * FROM Usuarios");
        $stmt->bindParam(":email", $email);

        if(!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            $listaUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($listaUsuarios) === 0) {
                enviarErroUsuarioNaoEncontrado();
            }

            foreach($listaUsuarios as $u) {
                if($u["email"] === $email) {
                    if(password_verify($senhaCript, $u["senha"])) {
                        //Cadastra o usuário na sessão
                        session_start();
                        $_SESSION["usuario"] = $u;

                        //Redireciona para a página inicial
                        echo "<script> window.location.href = './index.php'; </script>";
                    } else {
                        enviarErroSenhaIncorreta();
                    }
                } else {
                    enviarErroUsuarioNaoEncontrado();
                }
            }
        }
    }
?>

<!-- Login -->
<div class="card card-subtle theme-secondary m-auto" style="width:70%; max-width: 500px;">
    <div class="card-header">
        <h1>Login</h1>
    </div>
    <form class="card-body" method="POST">
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

<!-- Mensagens de erro -->
<dialog class="dialog" id="dialogUsuarioNaoEncontrado">
    <div class="dialog-header">
        <h1 class="dialog-title">SAEP DB</h1>
        <a href="" type="button" class="btn-close" data-bs-dismiss="dialog"></a>
    </div>
    <div class="dialog-body">
        <p>Usuário não encontrado.</p>
    </div>
    <div class="dialog-footer">
        <a href="" type="button" class="btn-solid theme-primary">Voltar</a>
    </div>
</dialog>
<dialog class="dialog" id="dialogSenhaInvalida">
    <div class="dialog-header">
        <h1 class="dialog-title">SAEP DB</h1>
        <a href="" type="button" class="btn-close" data-bs-dismiss="dialog"></a>
    </div>
    <div class="dialog-body">
        <p>Senha inválida.</p>
    </div>
    <div class="dialog-footer">
        <a href="" type="button" class="btn-solid theme-primary">Voltar</a>
    </div>
</dialog>