<?php

    include('complementos/funciones.php');

    session_start();

    if (isset($_SESSION["usuario"])) {
        session_unset();
        session_destroy();
        error_entrar('Cerrar sesión', 'login.php');
    }
    else {
        error_entrar('No has iniciado sesión', 'login.php');
    }
?>