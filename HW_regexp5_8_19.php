<?php
//Задача 5
//Дана строка 'a1a a22a a333a a4444a a55555a aba aca'. Напишите регулярку, которая найдет строки,
//в которых по краям стоят буквы 'a', а между ними любое количество цифр.
$str = 'a1a a22a a333a a4444a a55555a aba aca';
preg_match_all('/a\d+a/', $str, $match);
print_r($match);


//Задача 8
//Дана строка 'ave a#b a2b a$b a4b a5b a-b acb'. Напишите регулярку, которая найдет строки следующего вида:
//по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
preg_match_all('/a\Wb/', $str, $match);
print_r($match);


//Задача 19
//Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку, которая найдет строки следующего вида:
// по краям стоят буквы 'a', а между ними - маленькие и большие латинские буквы, не затронув остальных.
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
preg_match_all('/a[a-zA-Z]+a/', $str, $match);
print_r($match);
