<?php

include 'init.php';
setcookie('user', 'tester', time() + 3*3600); // кука живет 3 часа
setcookie('user', '', time() - 3*3600); // кука убита

?>
<a href="readcookie.php"> Узнать значение cookie</a>
<a href="logout.php">Выйти</a>


