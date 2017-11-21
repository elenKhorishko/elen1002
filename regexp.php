<?php

$str = 'sv skdmvs <привет> sd,d;vla <awfaxfla> test@e-mail.com.ua wf <kjhfb> test@email.com uhvgfhqb';
$res = preg_match_all('/[\w-\.]{1,}@[-a-zAz0-9]+(\.[\w-]+)+/i', $str, $match); // что хотим найти, где и куда записать

echo $res ? 'Найдено' : 'Не найдено';
var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/', '.info', $str);
echo $replaced . '<br>';

$replaced = preg_replace('/<(.*?)>/iu', '($1)', $str);// заменили угловые скобки на круглые
echo $replaced . '<br>';


