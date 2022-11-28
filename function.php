<?php
session_start();

$length_number = $_GET["numb"] ?? "";


if (empty($length_number)) {
    $_SESSION["pass_key"] = 'Nessun numero inserito';
    return;
} else {
    $passkey = generate_password($length_number);
    $_SESSION["pass_key"] = $passkey;
}

function generate_password($numb)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $numb; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

?>