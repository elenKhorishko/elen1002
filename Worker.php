<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.11.2017
 * Time: 19:24
 */

//Задание 1
//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
// Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта)
// - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения -
// имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker // создаем класс
{
    public $name; // задаем свойства класса
    public $age;
    public $salary;
}

$worker1 = new Worker(); // создаем объект-1 класса
$worker1->name = 'Иван'; //задаем значения
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker(); // создаем объект-2 класса
$worker2->name = 'Вася'; //задаем значения
$worker2->age = 26;
$worker2->salary = 2000;

echo "Задание 1." . PHP_EOL;
echo $worker1->salary + $worker2->salary . PHP_EOL; // выводим на экран
echo $worker1->age + $worker2->age . PHP_EOL;


// Задача 2
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker2 // создаем класс
{
    private $name; // задаем свойства класса
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;

    }
    public function setSalary($salary) {
        $this->salary = $salary;

    }
    public function getSalary() {
        return $this->salary;
    }
}
$worker1 = new Worker2(); // создаем объект-1 класса
$worker1->setName('Иван'); //задаем значения
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker2(); // создаем объект-2 класса
$worker2->setName('Вася'); //задаем значения
$worker2->setAge(26);
$worker2->setSalary(2000);


echo "Задание 2." . PHP_EOL;
echo $worker1->getSalary() +  $worker2->getSalary() .PHP_EOL;
echo $worker1->getAge() +  $worker2->getAge() . PHP_EOL;


// Задача 3
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст
// на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового
// возраста (если возраст не корректный - он не должен меняться).

echo "Задание 3." . PHP_EOL;
class Worker3 // создаем класс
{
    private $name; // задаем свойства класса
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    public function getAge() {
        return $this->age;

    }
    public function setSalary($salary) {
        $this->salary = $salary;

    }
    public function getSalary() {
        return $this->salary;
    }
    private function checkAge($age){
        if ($age < 100) {
            return true;
        } else {
            echo "Вам так много лет?" .PHP_EOL;}
    }
}
$worker1 = new Worker3(); // создаем объект-1 класса
$worker1->setAge(101);//задаем значения


$worker2 = new Worker3(); // создаем объект-2 класса
$worker2->setAge(26);//задаем значения

echo $worker1->getAge();
echo $worker2->getAge() . PHP_EOL;


// Задача 4
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта
//(вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

class Worker4
{
    private $name; // задаем свойства класса
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }
}

echo "Задание 4." . PHP_EOL;
$worker = new Worker4('Дима', 25, 2000);
echo $worker->getAge() * $worker->getSalary() . PHP_EOL;


// Задача 5
//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
// public методы setName, getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася',
// возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия,
// курс, а также геттеры и сеттеры для них.

class User
{
    protected $name;
    protected $age;
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
}

class Worker5 extends User
{
    private $salary;
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}

$worker1 = new Worker5();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker5();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo "Задание 5." . PHP_EOL;
echo $worker1->getSalary() * $worker2->getSalary() . PHP_EOL;


class Student extends User
{
    private $stipend;
    private $course;
    public function setStipend($stipend) {
        $this->stipend = $stipend;
    }
    public function getStipend() {
        return $this->stipend;
    }
    public function setCourse($course) {
        $this->course = $course;
    }
    public function getCourse() {
        return $this->course;
    }
}


// Задача 6
//Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker5
{
    private $DrivingExperience;
    private $DrivingCategory;

    public function setDrivingExperiense($DrivingExperiense){
        if ($this->checkExperiense($DrivingExperiense)) {
            $this->DrivingExperience = $DrivingExperiense;
        }
    }
    public function setDrivingCategory($DrivingCategory) {
        if ($this->checkCategory($DrivingCategory)) {
            $this->DrivingCategory = $DrivingCategory;
        }
    }
    private function checkExperiense($DrivingExperiense){
        if ($DrivingExperiense < 40) {
            return true;
        } else {
            echo "Введите корректное значение водительского стажа!" .PHP_EOL;}
    }
    private function checkCategory($DrivingCategory){
        if ($DrivingCategory == 'A' || $DrivingCategory == 'B' || $DrivingCategory == 'C') {
            return true;
        } else {
            echo "Нет такой категории! Введите верное значение: А или В или С!" .PHP_EOL;}
    }
    public function getDrivingExperiense(){
        return $this->DrivingExperience;
    }
    public function getDrivingCategory(){
        return $this->DrivingCategory;
    }
}

$driver = new Driver();
$driver->setDrivingExperiense(20);
$driver->setDrivingCategory('A') ;

echo "Задание 6." . PHP_EOL;
echo "Водительский стаж - " . $driver->getDrivingExperiense() . " лет.". PHP_EOL;
echo "Категория вождения - " . $driver->getDrivingCategory() . PHP_EOL;