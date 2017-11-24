<?php
include 'Worker.php';

//Задача 1
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE id = 3'; // id IN (3, 4)
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}

//Задача 2
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE salary = 500'; //
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}

//Задача c Классом
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE salary = 500'; //
$result = $pdo->query($sql);
while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}

//Задача c Классом 2
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE salary = :salary';
$result = $pdo->prepare($sql);
$result->execute(['salary' => 500]);

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}

