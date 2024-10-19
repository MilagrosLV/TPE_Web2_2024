<?php

class user_view {

    public function showLogin(){
        require 'templates/formLogin.phtml';
    }

    function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }

}