'use strict';

var arr = [3, -4, 50, 34, 8, -20, 20, -12],
    i,
    sum = 0;
for (i = 0; i < arr.length; i++) {
    if (arr[i] > 0) {
        sum += arr[i];
    }
}
alert(sum);
// считает сумму подожительных чисел

