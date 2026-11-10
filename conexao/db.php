<?php 
    $host = "localhost";
    $dbname = "teste";
    $usuario = "root";
    $senha = "";

    try {
        $db = new PDO("mysql:host=$host; dbname=$dbname", $usuario, $senha);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>