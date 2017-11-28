<?php

//писали в консоле

SELECT d.name "отдел", w.name "сотрудник"
  FROM workers w
JOIN departmens d ON w.department_id = d.id


    SELECT d.name "отдел", w.name "сотрудник"
FROM workers w LEFT JOIN departmens d ON w.department_id = d.id

    SELECT d.name "отдел", w.name "сотрудник"
FROM workers w LEFT JOIN departmens d ON w.department_id = d.id
WHERE w.department_id IS NULL

SELECT d.name "отдел", COUNT(w.id)
FROM departmens d JOIN workers w ON w.department_id = d.id
GROUP BY d.name
//считает сотрудников в отделе


SELECT d.name "отдел", COUNT(w.id), SUM(w.salary), MIN(w.salary), MAX(w.salary)
FROM departmens d JOIN workers w ON w.department_id = d.id
GROUP BY d.name
//считает среднюю, мин и макс зарплаты

SELECT d.name "отдел", COUNT(w.id), GROUP_CONCAT(w.name SEPARATOR ', '), SUM(w.salary), MIN(w.salary), MAX(w.salary)
FROM departmens d JOIN workers w ON w.department_id = d.id
GROUP BY d.name
//дает список сотрудников через запятую


SELECT d.name "отдел", COUNT(w.id), GROUP_CONCAT(w.name SEPARATOR ', '), SUM(w.salary), MIN(w.salary), MAX(w.salary)
FROM departmens d LEFT JOIN workers w ON w.department_id = d.id
GROUP BY d.name
  HAVING COUNT(w.id) > 2
ORDER BY d.name
// сортировка по имени

SELECT d.name "отдел", w.name
FROM departmens d LEFT JOIN workers w ON w.department_id = d.id
WHERE w.name = 'Кирилл'
// отдел по сотруднику

SELECT d.name "отдел", (SELECT MAX(w.salary) FROM departmens d LEFT JOIN workers w ON w.department_id = d.id) max_salary
FROM departmens d
//максимальная зарплата в отделах


