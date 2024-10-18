<?php

    function sessionAuth($res) {
        session_start();
        if(isset($_SESSION['ID_USUARIO'])){
            $res->user = new stdClass();
            $res->usuario->id = $_SESSION['ID_USUARIO'];
            $res->usuario->id = $_SESSION['NOMBRE'];
           return;
        } else {
            header('Location: ' . BASE_URL . 'mostrarLogin');
        }
    }

    ?>