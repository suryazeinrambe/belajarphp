<?php 

// $x = 5; //global scope

// function myTest(){
//     //Local Scope
//     global $x;
//     $y = $x + 5;
//     echo "<p>Variable x inside function is : $y</p>";
// }

// myTest();

// echo "<p>Variable x inside function is : $x</p>";
function myTest() {
  static $x = 0;
  echo $x . "<br>";
  $x++;
}

myTest();
myTest();
myTest();
?>
