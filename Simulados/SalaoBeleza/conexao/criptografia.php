<?php
    define("CHAVE_SECRETA", "aaaaaaaaaaaaaaaa");
    define("METODO", "AES-128-CBC");

    function criptografar($texto) {
        $iv = openssl_random_pseudo_bytes(16);

        $criptografado = openssl_encrypt($texto, METODO, CHAVE_SECRETA, OPENSSL_RAW_DATA, $iv);

        return base64_encode($iv . $criptografado);
    }

    function descriptografar($cData) {
        $bits = base64_decode($cData);

        $iv = substr($bits, 0, 16);

        $criptografado = substr($bits , 16);

        return openssl_decrypt($criptografado, METODO, CHAVE_SECRETA, OPENSSL_RAW_DATA, $iv);
    }
?>