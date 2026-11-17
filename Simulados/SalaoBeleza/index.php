<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
    <title>Document</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>
    <?php include("Elementos/nav/menuUsuario.php")?>
    <main class="d-flex gap-5 p-5">
        <?php include("Elementos/forms/login.php")?>
        <?php include("Elementos/forms/cadastroPinguins.php")?>
    </main>
</body>
</html>