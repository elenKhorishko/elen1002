<?php
//Задача 3
//Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме
//поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.

session_start();
if (!empty($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    $email = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<form method="post">
    <label> Имя
    <input type="first_name" name="first_name">
    </label>
    <label> Фамилия
        <input type="last_name" name="last_name">
    </label>
    <label> E-mail
        <input type="email" name="email" value="<?= $email?> ">
    </label>
    <label> Пароль
        <input type="password" name="password">
    </label>
    <button type="submit">Зарегистрироваться</button>
</form>
</body>

