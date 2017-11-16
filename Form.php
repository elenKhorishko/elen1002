<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.11.2017
 * Time: 18:59
 */
// Задача 7
//Создайте класс Form - оболочку для создания форм. Он должен иметь методы
// input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.
//Передаваемые атрибуты могут быть любыми:
//Для решения задачи сделайте private метод, который параметром будет принимать массив, например,
// ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами, в нашем случае type="text" value="!!!".

class Form
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $array = array(
        'type' => 'text',
        'value' => '!!!',
    );

    public function __construct($arr){
        $this->mas=$arr;
    }
    public function input(){
        echo $this->mas[0].$this->mas[1];
    }
}
$arr=array(10,23);
$obj=new Form($arr);

$obj->input();

