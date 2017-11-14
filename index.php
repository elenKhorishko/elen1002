<?php

include 'lib.php';
include  'User.php';
include 'premiumUser.php';

// include_once 'lib.php'; require 'lib.php'; аналоги

$user = new PremiumUser('FSGSG');

$errors =[];
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $errors = $user -> processRequest($_POST);

    if (!$errors) {
        saveUser2($user);

        header('Location: /success.html');
        exit();
    }
}

include 'form.php';