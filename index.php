<?php
// однострочный комментарий
/*
Многострочный комментарий
*/

/*
echo "Hello, world"; // однострочный комментарий

$a = 4;
$a = sqrt(6);
echo $a;

$b = 1 + false;
echo $b;

$a = ' stroka ';
echo $a . PHP_EOL; // . PHP_EOL - это разрыв строки
var_dump($a);




// надо делать на отдельной странице php
 <p> <?php echo 'Hello'; ?><p/>;




echo 3+'3f' . PHP_EOL;

$a = ['pn', 'vt', 'sr', 'chtv', 'pt', 'sb', 'vs'];
print_r($a);
echo $a[4];

$c = [
    'mon' => '1',
    'tue' => '2',
    'wed' => '3',
    '4',
    '5',
    '6',
    '7'
];
echo $c['mon'] . PHP_EOL;
print_r($c);

$a = [];
$a [1] = 'Mon';
$a [2] = 'Tue';
$a [3] = 'Wed';
$a [] = 'Thu';
print_r($a);

// многомерный массив
$a = [
    'boys' => ['Kolja', 'Vasja', 'Petja'],
    'girls' => ['Dasha', 'Masha', 'Lena'],
];
echo $a['boys'][1] . PHP_EOL;
print_r($a);


$a = 3;
if ($a > 0) {echo 'Verno!';} else {echo 'Neverno!';}

$a = null; // = 0, = ''
if (empty($a)) echo 'Verno!'; else echo 'Neverno!';


$a = [];
$a [1] = 'Mon';
$a [2] = 'Tue';
if (!isset($a['wed'])) {
    echo 'Neizvestnj den' . PHP_EOL;
}

$a = 6;
$b = -2;
if ($a = 0) {
    echo 'a = 0';
} elseif ($a > 0) {
    echo 'a > 0';
} elseif ($a < 0 && $b < 0) {
    echo 'i a i b < 0';
} else {
    echo " a < 0, a b > ili =";
}

$a = 6;
$b = -2;
switch (true) {
    case $a == 0:
        echo 'a = 0'; break;
    case $a > 0:
        echo 'a > 0'; break;
    case $a < 0 && $b < 0:
        echo 'i a i b < 0'; break;
    default:
        echo 'a < 0, a b > ili =';
}



$a = [];
$a [1] = 'Mon';
$a [2] = 'Tue';
$a [3] = 'Wed';
$a [4] = 'Thu';
foreach ($a as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}
foreach ($a as $value) {
    echo $value . PHP_EOL;
}



$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if ($elem === 3)
        break; //выходим из цикла
    else
        echo $elem;
}


//Задача 1
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
$a = [];
$a [1] = 'html';
$a [2] = 'css';
$a [3] = 'php';
$a [4] = 'js';
$a [5] = 'jq';
foreach ($a as $value) {
    echo $value . PHP_EOL;
}


//Задача 2
//Дан массив с элементами 1, 2, 3, 4, 5.
// С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result
$a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $value) {
    $result += $value;
}
echo $result;


//Задача 3
//Дан массив с элементами 1, 2, 3, 4, 5.
// С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result
$a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $value) {
    $result += $value*$value;
}
echo $result;


//Задача 4
// Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'
$a = ['green'=>'green', 'red'=>'red','blue'=>'blue'];
foreach ($a as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
}


//Задача 5
// Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'.
// С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'
$a = ['Kolja'=>'200', 'Vasja'=>'300','Petja'=>'400'];
foreach ($a as $key => $value) {
    echo $key . ' - zarplata ' . $value . ' dollars' . PHP_EOL;
}


//Задача 6
// Выведите столбец чисел от 1 до 100.
for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
}

$i = 1;
while ($i <= 100) {
    echo $i . PHP_EOL;
    $i ++;
}



//Задача 7
// Выведите столбец чисел от 11 до 33
$i = 11;
while ($i <= 33) {
    echo $i . PHP_EOL;
    $i ++;
}
for ($i = 11; $i <= 33; $i++) {
    echo $i . PHP_EOL;
}


//Задача 8
//Выведите столбец четных чисел в промежутке от 0 до 100
for ($i = 0; $i <= 100; $i+=2) {
    echo $i . PHP_EOL;
}

$i = 0;
while ($i <= 100) {
    echo $i . PHP_EOL;
    $i +=2;
}


//Задача 9
//С помощью цикла найдите сумму чисел от 1 до 100
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
     $sum += $i;
}
echo $sum;

$sum = 0;
$i = 1;
while ($i<= 100) {
    $sum += $i;
    $i ++;
}
echo $sum;
*/