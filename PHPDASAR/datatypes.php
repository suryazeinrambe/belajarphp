<?php
// String
$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo "<br>";
echo $y;

// Interger
echo "<br>";
$x = 5985;
var_dump($x);

// Float
echo "<br>";
$x = 10.365;
var_dump($x);

// Boolean
echo "<br>";
$x = true;
$y = false;
echo $x;
echo "<br>";
echo $y;

// Array
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);

// Object
class Car {
    // Properti
    public $color, $model;
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    
    }
    // Method
    public function message(){
        return "Mobil saya adalah  " . 
        $this->model . $this->color ; 
    }
}

// Instance
$myCar1 = new Car("Volvo ", " Hitam");
echo $myCar1->message();
echo "<br>";
$myCar2 = new Car("Toyota ","Merah");
echo $myCar2->message();
echo "<br>";
echo $myCar1->model;

echo "<br>";
echo "Mobil saya yang berwarna" . $myCar2->color;
echo "<br>";



// Nul Value
// $x = "Hello world!";
$x = null;
var_dump($x);



?>