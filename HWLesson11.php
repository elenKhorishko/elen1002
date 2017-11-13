<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица зарегистрированных пользователей</title>
</head>
<body>
<h1>
    Таблица зарегистрированных пользователей - 1
</h1>

<?php
$users = "users.txt";
$arr = file( $users );
?>

<table border="1">
    <tr>
        <th>№ п/п</th>
        <th>ФИО пользователя, e-mail, телефон</th>
    </tr>

    <?php foreach($arr as $key => $value) {
    $value = explode('|', $value);
    ?>

        <tr>
            <td><?=$key+1?></td>
            <td><?=$value[0]?></td>
        </tr>

    <?php
        };
    ?>
</table>


<h1>
    Таблица зарегистрированных пользователей - 2
</h1>

<table border="1">
    <tr>
        <th>№ п/п</th>
        <th>Имя пользователя</th>
        <th>Фамилия пользователя</th>
        <th>e-mail</th>
        <th>Телефон</th>
    </tr>

<?php
$users2 = fopen("users.txt", "r");
$key2 = 1;
while (!feof($users2)) {
        $value2 = fgets($users2, 999).'<br>';
        $user2 = explode("\t", $value2);
        ?>

    <tr>
        <td><?=$key2?></td>
        <td><?=$user2[0]?></td>
        <td><?=$user2[1]?></td>
        <td><?=$user2[2]?></td>
        <td><?=$user2[3]?></td>
    </tr>

    <?php
    $key2++; }
fclose($users2);
?>

</body>
</html>
