<?php 
 if (isset($_GET['lunghezza']) && isset($_GET['options'])) {
    
    function generatePassword($length, $options) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-=';

    $characters = '';
    $password = '';
    if (in_array('lowercase', $options)) {
        $characters .= $lowercase;
    }
    if (in_array('uppercase', $options)) {
        $characters .= $uppercase;
    }
    if (in_array('numbers', $options)) {
        $characters .= $numbers;
    }
    if (in_array('symbols', $options)) {
        $characters .= $symbols;
    }
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $password;
}

 }

?>