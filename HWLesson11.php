<?php
/***
 * @var array $user;
 * $user_info;
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица зарегистрированных пользователей</title>
</head>
<body>
<h1>
    Таблица зарегистрированных пользователей
</h1>

<?php

$fp = fopen("users.txt", "r");
while (!feof($fp)) {
        $value = fgets($fp, 999).'<br>';
        $user = explode("\t", $value);
        print_r($user);
        $user =
        }
fclose($fp);


$user2 = file('users.txt');

?>

<table border="1">
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Телефон</th>
    </tr>
    <tr>
        <td><?= $user[0]; ?></td>
        <td><?= $user[1]; ?></td>
        <td><?= $user[2]; ?></td>
        <td><?= $user[3]; ?></td>
    </tr>
    <tr>
        <td>Николай</td>
        <td>Сидоров</td>
        <td>1000$</td>
        <td>1000$</td>
    </tr>
</table>

</body>
</html>