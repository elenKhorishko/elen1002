<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 21.11.2017
 * Time: 19:31
 */
$time = time();
echo $time . '<br>';
echo date('d.m.Y H:i:s', $time) . '<br>';



$time = strtotime('2017-11-20 23:12:07');
$time = strtotime('+2 day -1 hour', $time);
$time = strtotime('last Sunday');
$time = strtotime('next Sunday');


echo date('d.m.Y H:i:s', $time). '<br>';

