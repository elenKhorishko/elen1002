'use strict';

$(document).ready(function (){
    // задача 1
    $('h2').html('!!!!!!!!!!!!');

    // задача 2
    $('h3').css('color','red');

    //задача 3
    $('h2').css({'color': 'blue', 'font-size': '30px'});

    //задача 4
    $('.test').css('color', 'red');

    //задача 5
    $('h2.test').css('color', 'orange');

    //задача 6
    $('p + p').css('color', 'green')

    //задача 7 ????????красит только следующий li а не все последующие??????????????
    $('li.www + li').css('color', 'yellow')

    //задача 8 ?????????????? непонятно чем отличается 'i внутри h3' от "i непосредственно внутри h3"???????
    $('h3 i').css('color', 'red');

    //задача 9
    $('h3 > i').css('color', 'purple');

    //задача 10
    $(':header').css('color', 'red');

    //задача 11
    $('h2:not(.test)').css('color', 'green')

    //задача 12
    $(':header:not(.test)').css('color', 'blue');

    //задача 13
    $(':header + :header').css('color', 'green');

    //задача 16
    $('p:first').css('color', 'red');

    //задача 17
    $('p:last').css('color', 'red');

    //задача 19
    $('h3:has(i)').css('color', 'aqua');

    //задача 20 то же самое что в задание 9!!!
    $('h3 > i').css('color', 'purple');

    //задача 21
    $('li:eq(2)').css('color', 'Chartreuse');

    //задача 23
    $('li:lt(9)').css('color', 'DeepPink');

});