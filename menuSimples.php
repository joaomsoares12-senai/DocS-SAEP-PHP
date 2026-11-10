<nav class="navbar sm:navbar-expand bg-2">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">
            <img src="imgs/logo.png" alt="logo" width="32" height="32" class="align-bottom">
            DOCS Saep
        </span>

        <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarTopDrawerLabel">Menu</h5>
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

        <form class="menu" method="POST" id="menuTema">
            <button class="menu-item" type="submit" name="definirTemaClaro"><i class="bi bi-brightness-high"></i>Claro</button>
            <button class="menu-item" type="submit" name="definirTemaEscuro"><i class="bi bi-cloud-moon-fill"></i>Escuro</button>

            <?php
                session_start();

                if(!isset($_SESSION["tema"])) {
                    $_SESSION["tema"] = "auto";
                }

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["definirTemaEscuro"])) {
                        $_SESSION["tema"] = "escuro";
                    } else if(isset($_POST["definirTemaClaro"])) {
                        $_SESSION["tema"] = "claro";
                    }
                }

                //Alterar tema via js
                if($_SESSION["tema"] == "claro") {
                    echo "<script> document.documentElement.setAttribute('data-bs-theme', 'light'); </script>";
                } else if($_SESSION["tema"] == "escuro") {
                    echo "<script> document.documentElement.setAttribute('data-bs-theme', 'dark'); </script>";
                }
            ?>
        </form>

        <button class="btn-solid theme-secondary ms-auto" type="button" data-bs-toggle="menu" data-bs-target="#menuTema">
            <i class="bi bi-circle-half"></i>Tema
        </button>

        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>