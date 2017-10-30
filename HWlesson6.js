'use strict';

// задание 1 - в HTML-файле

// задание 2
var str = '';
for (var i = 1; i <= 9; i++) {
    str = str + i;
}
alert(str);

// задание 3
var str = '';
for (var i = 9; i >= 1; i--) {
    str = str + i;
}
alert(str);

// задание 4
var str = '-';
for (var i = 1; i <= 9; i++) {
    str = str + i + '-';
}
alert(str);

// задание 5
var str = '';
for (var i = 1; i <= 20; i++) {
    str = str + 'x';
    document.write(str + '<br>');
}

// задание 6
for (var i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++)
        document.write(i)
    document.write('<br>');
}

// задание 7
var str = '';
for (var i = 1; i <= 5; i++) {
    str = str + 'xx';
    document.write(str + '<br>');
}
