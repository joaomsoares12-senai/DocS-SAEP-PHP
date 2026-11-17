<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
    <style>
        body{
            background: var(--bs-body-bg);
            background: linear-gradient(90deg, var(--bs-violet-500) 0%, var(--bs-pink-500) 50%, var(--bs-yellow-500) 100%);
        }
    </style>
    <title>SalãoDB</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>
    <main class="d-flex d-column vh-100 gap-5 p-5 justify-content-center align-items-center">
            <div class="d-flex w-50 h-50 gap-5 align-items-center justify-content-center" style="background-color: var(--bs-bg-body); border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                <div class="d-flex flex-column gap-2">
                    <h1 style="font-size: 50px; font-family: OCR A Std, monospace"><strong>SalãoDB</strong></h1>
            
                </div>
                <?php include("Elementos/forms/login.php")?>
            </div>
    </main>
</body>
</html>