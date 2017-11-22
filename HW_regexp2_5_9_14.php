<?php
//Задача 2
//Дана строка 'aba aca aea abba adca abea'.
//Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.

$str = 'aba aca aea abba adca abea';
$res = preg_match_all('/a..a/', $str, $match);
print_r($match);


//Задача 5
//Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba
// по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'
$str = 'aa aba abba abbba abca abea';
$res = preg_match_all('/ab*a/', $str, $match);
print_r($match);


//Задача 9
//Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.
$str = '2+3 223 2223';
$res = preg_match_all('/2\+3/', $str, $match);
print_r($match);


//Задача 14
//Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых
// стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a)
$str = 'aba accca azzza wwwwa';
echo preg_replace('/a.+?a/', '!', $str);


