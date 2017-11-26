<?php

// Задача 1
//Выбрать работника с id = 3.
echo 'Задача 1' . '<br>';
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE id = 3';
$result = $pdo -> query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 2
// Выбрать работников с зарплатой 1000$
echo 'Задача 2' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE salary = 1000';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 3
//Выбрать работников в возрасте 23 года
echo 'Задача 3' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age = 23';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 4
//Выбрать работников с зарплатой более 400$.
echo 'Задача 4' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE salary > 400';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 5
//Выбрать работников с зарплатой равной или большей 500$.
echo 'Задача 5' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE salary >= 500';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 6
//Выбрать работников с зарплатой НЕ равной 500$.
echo 'Задача 6' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE salary != 500';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 7
//Выбрать работников с зарплатой равной или меньшей 900$.
echo 'Задача 7' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE salary <= 900';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 8
//Узнайте зарплату и возраст Васи.
echo 'Задача 8' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE name = "Вася"';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 9
//Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
echo 'Задача 9' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age > 25 AND age <= 28';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 10
//Выбрать работника Петю.
echo 'Задача 10' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE name = "Петя"';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 11
//Выбрать работников Петю и Васю.
echo 'Задача 11' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE name = "Петя" OR name = "Вася"';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 12
//Выбрать всех, кроме работника Петя.
echo 'Задача 12' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE name != "Петя"';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 13
//Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
echo 'Задача 13' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age = 27 OR salary = 1000';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 14
//Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
echo 'Задача 14' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age >= 23 AND age < 27 OR salary = 1000';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 15
//Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
echo 'Задача 15' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age >= 23 AND age <= 27 OR salary >= 400 AND salary <= 1000';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}

// Задача 16
//Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
echo 'Задача 16' . '<br>';
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'SELECT * FROM workers WHERE age = 27 OR salary != 400';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row); echo '<br>';
}
