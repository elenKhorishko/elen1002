//Задание 1
//Выбрать Id заказа и соответствующих пользователей из таблицы users,
//у которых записи в таблице orders имеют status = 0;

SELECT o.order_id "№ заказа", u1.name "Имя"
FROM orders o LEFT JOIN users1 u1 ON u1.users_id = o.users_id
WHERE o.status = '0'



//Задание 2
//Выбрать пользователей у которых есть невыполненные заказы, status = 0;

SELECT u1.name "Имя", count(o.status) "Количество невыполненных заказов"
FROM orders o LEFT JOIN users1 u1 ON u1.users_id = o.users_id
WHERE o.status = '0'
GROUP BY u1.name


//Задание 3
//Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы users,
//у которых 3 и больше записей поля 'status' = '1' в таблице orders

SELECT u1.users_id "users_id", u1.name "Имя", count(o.order_id) "Количество выполненных заказов"
FROM orders o LEFT JOIN users1 u1 ON u1.users_id = o.users_id
WHERE o.status = '1'
GROUP BY u1.name
HAVING COUNT(o.status) >= 3


