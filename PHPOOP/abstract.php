<?php 

// Parent CLass 
abstract class Car {
    public $nama; 
    public function __construct($nama){
        $this->nama = $nama;
    }

   abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
    public function intro() : string {
        return "Choose German Quality! I am an $this->nama!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish ! i'am a $this->nama !";
    }
}

class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->nama!";
    }
  }

// Instance object dari child classes
$volvo = new Volvo('Volvo');
echo $volvo->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>";


// abstract class ParentClass {
//     // Abstract method with an argument
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//     public function prefixName($name){
//         if ($name == 'John Doe'){
//             $prefix = 'Mr. ';
//         } elseif ($name == 'Jane Doe'){
//             $prefix = 'Mrs. '; 
//         } else {
//             $prefix = '';
//         } return "{$prefix} {$name}";
//     } 
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>";
// echo $class->prefixName("Jane Doe");


abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "John Doe") {
        $prefix = "Mr";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");