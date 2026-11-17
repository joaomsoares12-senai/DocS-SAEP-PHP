<?php 
    $senha = "1234";

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    echo $senhaHash;
?>