<nav class="navbar sm:navbar-expand bg-2">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">
            <img src="imgs/logo.png" alt="logo" width="32" height="32" class="align-bottom">
            DOCS Saep
        </span>

        <dialog class="drawer drawer-end" tabindex="-1" id="drawerNavegacao">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarTopDrawerLabel">Navegação</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer"></button>
            </div>

            <div class="drawer-body">
                <ul class="navbar-nav nav-underline gap-5 ms-4">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="bi bi-house"></i>Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="bi bi-pencil-square"></i>Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="bi bi-person"></i>Gerenciar</a>
                    </li>
                </ul>
            </div>
        </dialog>
        
        <div class="menu p-5" style="width: 300px; max-width: 300px; height: 200px; max-height: 300px;">
            <h3> Olá
            <?php
                session_start();
                if(isset($_SESSION["usuario"])) {
                    echo $_SESSION["usuario"]["nome"];
                } else {
                    echo "Visitante";
                }
            ?>
            !
            </h3>
        </div>

        <a class="ms-auto" type="button" data-bs-toggle="menu" data-bs-target="#menuUsuario">
            <span class="avatar theme-primary" style="width: 40px; height: 40px;">
                <i class="bi bi-person-fill"></i>
            </span>
        </a>

        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#drawerNavegacao">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>