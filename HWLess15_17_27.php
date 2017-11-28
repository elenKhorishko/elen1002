<?php
// Задача 17
//Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'INSERT INTO workers SET name="Никита", age=30, salary=1000';
$result = $pdo -> query($sql);


// Задача 18
//Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'INSERT INTO workers (name, age, salary) VALUES ("Светлана", 20, 1200)';
$result = $pdo -> query($sql);


// Задача 19
//Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30,
//Петра с зарплатой 1000$ и возрастом 31.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'INSERT INTO workers (name, age, salary) VALUES ("Ярослав", 30, 1200), ("Петр", 31, 1000)';
$result = $pdo -> query($sql);


// Задача 20
//	Удалите работника с id=4.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'DELETE FROM workers WHERE id=4';
$result = $pdo -> query($sql);


//Задача 21
//Удалите Никиту.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'DELETE FROM workers WHERE name="Никита"';
$result = $pdo -> query($sql);


//Задача 22
//Удалите всех работников, у которых возраст 23 года
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'DELETE FROM workers WHERE age=23';
$result = $pdo -> query($sql);


//Задача 23
//Поставьте Пете зарплату в 200$.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'UPDATE workers SET salary=200 WHERE name="Петя"';
$result = $pdo -> query($sql);


//Задача 24
//Работнику с id=2 поставьте возраст 35 лет.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'UPDATE workers SET age=35 WHERE id=2';
$result = $pdo -> query($sql);


//Задача 25
//Всем, у кого зарплата 500$ сделайте ее 700$.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'UPDATE workers SET salary=700 WHERE salary=500';
$result = $pdo -> query($sql);


//Задача 26
//Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'UPDATE workers SET age=23 WHERE id>2 AND id<=5';
$result = $pdo -> query($sql);


//Задача 26
//Поменяйте Петра на Женю и прибавьте ему зарплату до 900$.
$pdo = new PDO ('mysql:host=localhost;dbname=skillup;charswt=utf8', 'root', '');
$sql = 'UPDATE workers SET name="Женя", salary=900 WHERE name="Петр"';
$result = $pdo -> query($sql);
