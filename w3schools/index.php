<?php

// function getName() {
//     return "W3Schools <br/>";
// }


// echo getName();
// echo getName();
// echo getName();
// echo getName();




// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// var_dump($car);
// $x = 75;


// echo "<pre>";
// var_export($GLOBALS);
// echo "</pre>";


// PHP OOP
// class Car{
//     public $brand;
//     public $color;

//     public function drive(){
//         return "driving";
//     }
// }

// $car = new Car();         // create an object
// $car->brand = "Tesla";
// $car->color = "red";
// echo $car->drive();   

// constructor and properties

// class User{
//     public $name;
//     public $email;

//     public function __construct($name, $email){
//         $this -> name = $name;
//         $this -> email = $email;
//     }

//     public function getInfo(){
//         return "Name: " . $this -> name . " , Email: " . $this -> email;
//     }
// }

// $user = new User("John Doe", "john@example.com");
// echo $user -> getInfo();


// Visibility: public, protected, private
// class Account{
//     private $balance;
     
//     public function deposit($amount){
//         $this -> balance += $amount;
//     }

//     public function getBalannce(){
//         return $this -> balance;
//     }
// }

// $account = new Account();

// $account -> deposit(1000);
// echo $account -> getBalannce();



// Inheritance
// class Animal{
//     public function makeSound(){
//         return "Some generic sound";
//     }
// }

// class Dog extends Animal{
//     public function makeSound(){
//         return Animal::makeSound();
//     }
// }


// $dog = new Animal();
// echo $dog -> makeSound();


// utils
// class Utils{
//     public static $version = "1.0";
// }


// echo Utils::$version;

// abstract class Element {
//     protected string $id;
//     protected string $type;

//     public function __construct(string $id, string $type) {
//         $this->id = $id;
//         $this->type = $type;
//     }

//     // Shared behavior for all elements
//     public function renderWrapper($content): string {
//         return "<div id='{$this->id}' class='element element-{$this->type}'>$content</div>";
//     }

//     // Must be implemented by each element type
//     abstract public function render(): string;
// }


// class NewBlock extends Element{
//     public function render(): string{
//         return "hey";
//     }
// }


// class TextElement extends Element {
//     private string $text;

//     public function __construct($id, $text) {
//         parent::__construct($id, 'text');
//         $this->text = $text;
//     }

//     public function render(): string {
//         return parent::renderWrapper("<p>{$this->text}</p>");
//     }
// }

// $block = new TextElement("block1", "custom");
// echo $block -> render();



// traits 
trait HasUniqueId {
    public function generateId(): string {
        return uniqid('el_', true);
    }
}


class Section {
    use HasUniqueId;
}

class Widget {
    use HasUniqueId;
}

$s = new Section();
echo $s->generateId(); // el_653a6f4a9b20c



















































































































































































































































































































































































































































































echo "\n";