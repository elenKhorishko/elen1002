'use strict';

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
    document.write('---' + mas[i] + "<br>"); // alert('---' + mas[i]) // console.log ('---' + mas[i]);
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
    document.write('-' + arr2[i] + "<br>"); // alert('-' + arr2[i]) // console.log ('-' + arr2[i]);
}


//ссылка заданий 3 - задание 1
var person = {};
person.name = 'Елена'
person.age = 39;
person.sex = 'жен';
person.personalNumber = 1234567899;
console.log(person);


// задание 2
var person = {
    name: 'Елена',
    age: 39,
    sex: 'жен',
    personalNumber: 1234567899
};
console.log(person);
var key = 'age';
var yearOfBirt = '2017' - person[key];
alert(yearOfBirt);


// задание 3
var obj = {
   mas: [5, 6, 34, 12, 45]
};
var key = 'mas';
var result = obj[key].reduce(function(sum, current) {
        return sum + current;
}, 0);
alert( result );


// задание 4
var goods = {
    "12121": {
        "name": "Холодильник",
        "cost": "5000 грн.",
        "weight": "12 кг",
        "photo": "http://artlife.rv.ua/uploads/Image/statti/A/w49.jpg",
        "availability": "есть в наличии"
    },
    "13131": {
        "name": "Телевизор",
        "cost": "12000 грн.",
        "weight": "8 кг",
        "photo": "http://liberton.ua/gallery/goods_img/PDP-5030-ABUV-AF2.png",
        "availability": "нет в наличии"
    },
    "14141": {
        "name": "Компьютер",
        "cost": "30000 грн.",
        "weight": "6 кг",
        "photo": "http://www.fainaidea.com/wp-content/uploads/2017/05/kompyuter_bu.jpg",
        "availability": "есть в наличии"
    }
};
console.log(goods);
document.write(goods[12121].name + " - " + goods[12121].cost + goods[12121].weight + "<br>" + goods[12121].photo + "<br>" + goods[12121].availability + "<br>" + "<br>");


// задание 5
var day = {
    "d1" : "Понедельник",
    "d2" : "Вторник",
    "d3" : "Среда",
    "d4" : "Четверг"
};
for (var key in day) {
    document.write(key + " - " + day[key] + "<br>");
}


// задание 6
var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};
for (var key in arr) {
    document.write(key + " *** " + arr[key] + "<br>");
}


// задание 7 - списала в интернете)))
var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};
console.log(arr);
var sArr = JSON.stringify(arr);
localStorage.setItem("arr", sArr);
localStorage.arr;
console.log(arr);
var mass = JSON.parse(localStorage.getItem("arr"));
console.log(mass);


// задание 8
var goods = {
    "dd" : {
        name: "Яблоки",
        cost: 13
    },
    "dc" : {
        name: "Груши",
        cost: 23
    },
    "cd" : {
        name: "Абрикосы",
        cost: 33
    },
    "dee" : {
        name: "Сливы",
        cost: 43
    },
    "dd2" : {
        name: "Вишни",
        cost: 19
    }
};
for (var key in goods) {
    if (goods[key].cost > '20')
        document.write(goods[key].name + " - " + goods[key].cost + "<br>");
}



// задание 9
var goods = {
    "apple" : {
        "name": "Яблоки",
        "cost": 230,
        "amount":300
    },
    "pear" : {
        "name": "Груши",
        "cost": 34,
        "amount":100
    },
    "apricot" : {
        "name": "Абрикосы",
        "cost": 23,
        "amount":170
    },
    "plum" : {
        "name": "Сливы",
        "cost": 21,
        "amount":250
    },
    "cherry" : {
        "name": "Вишни",
        "cost": 19,
        "amount":312
    }
};
for (var key in goods) {
    if (goods[key].cost > '220' && goods[key].cost < '300' && goods[key].amount > '200')
        document.write(goods[key].name + " - " + goods[key].cost + "<br>");
};
