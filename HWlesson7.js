'use strict';
/*
// ссылка заданий 1 - задание 1
var goods = [];
alert(goods.length);


// задание 2
var goods = [];
goods.push('Копьютер');
alert(goods);


// задание 3
var styles = ['Джаз', 'Блюз'];
    alert(styles);
styles.push('Рок-н-Ролл');
    alert(styles);
styles[styles.length-2] = 'Классика';
    alert(styles);
alert(styles.shift(0));
    alert(styles);
styles.unshift('Рэп', 'Регги');
    alert(styles);


// задание 4 - смотрела код((
var arr = ['Яблоко', 'Апельсин', 'Груша', 'Лимон'];
var rand = Math.floor(Math.random() * arr.length);
alert (arr[rand]);


// задание 5 - смотрела код((
var arr = [],
    sum = 0;
while (true) {
    var n = prompt('Введите число');
    if (n === "" || n == null || isNaN (n)) break;
    arr.push(+ n);
}
for (var i = 0; i < arr.length; i++) {
    sum += arr[i];
}
    alert(sum);


// задание 6
5
5


// задание 7 - смотрела код((
function find(arr, value) {
for (var i = 0; i < arr.length; i++) {
    if (arr[i]==value) return i;
    }
    return -1;
}
var arr = ['p', -8, 1, 2, 8, 'r', 0];
var s = find(arr, 5);
alert(s);


// задание 8 - смотрела частично
function filterRange(arr, a, b) {
    var res = [];
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= a && arr[i] <= b) arr2.push(arr[i]);
    }
    return res;
}
var arr = [1, 5, 7, 8, 4];
var arr2 = [];
var s = filterRange(arr, 3, 7);
alert(arr);
alert(arr2);


// задание 9 - смотрела весь код
var arr = [];
for (var i = 2; i < 100; i++) {
    arr [i] = true
}
var p = 2;
do {
    for (i = 2 * p; i < 100; i += p) {
            arr[i] = false;
    }
    for (i = p + 1; i < 100; i++) {
        if (arr[i]) break;
    }
    p = i;
} while (p * p < 100);
var sum = 0;
for (i = 0; i < arr.length; i++) {
    if (arr[i]) {
        sum += i;
    }
}
alert(sum);


// задание 10 - смотрела весь код
var arr = [1, -2, 3, 4, -9, 6];

function getMaxSubSum(arr) {
    var maxSum = 0;
    for (var i = 0; i < arr.length; i++) {
        var sumFixedStart = 0;
        for (var j = i; j < arr.length; j++) {
            sumFixedStart += arr[j];
            maxSum = Math.max(maxSum, sumFixedStart);
        }
    }
    return maxSum;
}
alert(getMaxSubSum(arr));



//ссылка заданий 2 - задание 1
var mas = [15, 'hello', 'trump', 23, 'world', 999, 176];
for (var i = 0; i < mas.length; i++) {
    alert('---' + mas[i]); // console.log ('---' + mas[i]);
}



// задание 2
function moreFife(arr, a) {
    var res = [];
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] > a) arr2.push(arr[i]);
    }
    return res;
}
var arr = [2, 3, 4, 5, 6, 4, 77, 32, 4];
var arr2 = [];
var s = moreFife(arr, 5);
for (var i = 0; i < arr2.length; i++) {
    alert('-' + arr2[i]); // console.log ('-' + arr2[i]);
}
*/


//ссылка заданий 3 - задание 1

