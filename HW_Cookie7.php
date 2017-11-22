<?php
//Задача 7
//Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
// Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.

if (empty($_COOKIE['STOP'])) { ?>

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
        <label> Мы вас приветствуем, если не хотите нас видеть, то нажмите:</label>
        <input type="submit" name="username" value="Не показывать больше!">
    </form>
</body>
</html>

    <?php
} else {
    echo 'Мы Вам больше это не покажем 1 месяц!';
}

if (!empty($_REQUEST)) {
    setcookie('STOP', '1', time() + 3600*24*30);
}
?>

