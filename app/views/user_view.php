<?php

class user_view {

    public function showLogin(){
        require 'templates/form_login.phtml';
    }

    function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }

}