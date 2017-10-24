'use strict';

var arr = ["Привет, ", "мир", '!'];
alert(arr[0]+arr[1]+arr[2]);


var arr = ["Привет, ", "мир", '!'];
arr[0]='Пока, ';
alert(arr[0]+arr[1]+arr[2]);


var obj = {
    'Коля':'1000',
    'Вася':'500',
    'Петя':'200'
};
alert(obj['Коля']);


var obj = {};
obj['Коля'] = 1000;
obj['Вася'] = 1000;
obj['Петя'] = 1000;
alert(obj['Коля']);


var arr = {
    'ru':['голубой', 'красный', 'зеленый'],
    'en':['blue', 'red', 'green'],
};
alert(arr['ru'][0]);


var arr = {
    '1': 'Monday',
    '2': 'Tuesday',
    '3': 'Wednesday',
    '4': 'Thursday',
    '5': 'Friday',
    '6': 'Saturday',
    '7': 'Sunday',
};
var date = new Date(),
    day = date.getDay(),
    nameOfDay;
if (day==0) {
    nameOfDay = arr[7];
} else {
    nameOfDay = arr[day];
}
// nameOfDay = day == 0? arr[7]: arr[day];
alert(nameOfDay);


var day;
day = prompt('Какой сегодня день недели (от 1 до 7)?');
switch (day) {
    case '1': alert('Выходные кончились'); break;
    case '2':
    case '3':
    case '4': alert('Сегодня на работу'); break;
    case '5': alert('Скоро выходные'); break;
    case '6':
    case '7': alert('Ура, отдыхаем!'); break;
    default:
        alert("Будь внимательнее!");
}
alert(1 == '1');
alert(1 === 1);


var day,
    dayIsCorrect;
do {
    day = prompt('Какой сегодня день недели (от 1 до 7)?');
    dayIsCorrect = true;
    switch (day) {
        case '1': alert('Выходные кончились'); break;
        case '2':
        case '3':
        case '4': alert('Сегодня на работу'); break;
        case '5': alert('Скоро выходные'); break;
        case '6':
        case '7': alert('Ура, отдыхаем!'); break;
        default:
            dayIsCorrect = false;
            alert("Будь внимательнее!");
    }
} while (dayIsCorrect === false);
alert('Молодец!))');


var day,
    dayIsCorrect = false;
while (dayIsCorrect === false) {
    day = prompt('Какой сегодня день недели (от 1 до 7)?');
    dayIsCorrect = true;
    switch (day) {
        case '1': alert('Выходные кончились'); break;
        case '2':
        case '3':
        case '4': alert('Сегодня на работу'); break;
        case '5': alert('Скоро выходные'); break;
        case '6':
        case '7': alert('Ура, отдыхаем!'); break;
        default:
            dayIsCorrect = false;
            alert("Будь внимательнее!");
    }
}
alert('Молодец!))');


function ask() {
    var day;
    day = prompt('Какой сегодня день недели (от 1 до 7)?');
    switch (day) {
        case '1': alert('Выходные кончились'); break;
        case '2':
        case '3':
        case '4': alert('Сегодня на работу'); break;
        case '5': alert('Скоро выходные'); break;
        case '6':
        case '7': alert('Ура, отдыхаем!'); break;
        default:
            dayIsCorrect = false;
            alert("Будь внимательнее!");
            ask();
    }
}

ask();
alert('Молодец!))');
