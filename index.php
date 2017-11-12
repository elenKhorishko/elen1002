<?php

include 'lib.php';
// include_once 'lib.php'; require 'lib.php'; аналоги

$user = [
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'phone' => '',
    'confirm' => false,
    ];
$errors =[];
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $user = processRequest($user);
    $errors = validateUser($user);

    if (!$errors) {
        saveUser2($user);

        header('Location: /success.html');
        exit();
    }
}

include 'form.php';