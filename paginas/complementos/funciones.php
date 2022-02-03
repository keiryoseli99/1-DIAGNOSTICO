<?php

function error_entrar($mensaje, $direccion){
    echo'<script type="text/javascript">
    alert("'. $mensaje .'");
    window.location.href="'. $direccion .'";
    </script>';
}
?>