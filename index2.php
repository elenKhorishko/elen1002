<?php

include 'lib2.php';

$user = [
    'email' => '',
    ];
$errors =[];
$errors =[];
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $user = processRequest($user);
    $errors = validateUser($user);

    if (!$errors) {
        saveUser2($user);

        header('Location: /success2.html');
        exit();
    }
}

include 'form2.php';