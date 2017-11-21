<?php

$time = new DateTime('yesterday 14:00');
echo $time->format('d.m.Y H:i:s') . '<br>';

$newTime = $time->add(new DateInterval('P3DT5M'));//ДОБАВЛЕНИЕ ВРЕМЕНИ К ЗАДАННОМУ ВРЕМЕНИ
echo $newTime->format('d.m.Y H:i:s') . '<br>';

$newTime1 = $time->sub(new DateInterval('P5DT8M'));//убавление ВРЕМЕНИ отК ЗАДАННОго ВРЕМЕНИ
echo $newTime1->format('d.m.Y H:i:s') . '<br>';

$birthdate = new DateTime('1978-02-10 12:25:00');
$age = $birthdate->diff(new DateTime());
echo $age->format('%a') . '<br>'; //сколько прожито дней)))
echo $age->format('%y лет %m месяцев %d дней'); //сколько прожито дней)))