<?php

class usuarioVista {

    public function mostrarLogin(){
        require 'templates/formLogin.phtml';
    }

    function mostrarError($error) {
        echo "<h2>Error. $error.</h2>";
    }

}