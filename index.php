<?php
// однострочный комментарий
/*
Многострочный комментарий
*/


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
// <p> <?php echo 'Hello'; ?><p/>;
//



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


