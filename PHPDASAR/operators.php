<?php 
echo "<h1 style='text-align:center;'>Operator Aritmetik</h1>";
// Arithmetic operators
static $x = 10;
static $y = 10;
$z = $x + $y; //Penjumlahan
echo "Ini  adalah hasil Penjumlahan $x + $y = " . $z ;
echo "<br>";
$z = $x - $y; //Pengurangan 
echo "Ini  adalah hasil Pengurangan $x - $y = " . $z;
echo "<br>";
$z = $x * $y; //perkalian
echo "Ini  adalah hasil Perkalian $x x $y = " . $z;
echo "<br>";
$z = $x % $y; //hasil bagi
echo "Ini  adalah hasil bagi $x % $y = " . $z;
echo "<br>";
$z = $x / $y; //pembagian
echo "Ini  adalah hasil Pembagian $x : $y = " . $z;
echo "<br>";
$z = $x ** $y; //perpangkatan
echo "Ini  adalah hasil pangkat $x ^ $y = " . $z;
echo "<br>";
// Assignment operators
echo "<h1 style='text-align:center;'>Operator Assignment</h1>";
echo "X = 10";
$z = $x ;
echo "<br>";
echo "Assignment X = Y = ".$z;
echo "<br>";
$x = 10 ;
$x += 210; 
echo "Assigment X+=210 =  ". $x;
echo "<br>";
$x = 10;
$x -= 100; 
echo "Assigment X-=100 =  ". $x;

echo "<br>";
$x = 10;
$x *= 100; 
echo "Assigment  X x=100 =  ". $x;

echo "<br>";
$x = 10;
$x /= 100; 
echo "Assigment X : 100 =  ". $x;

echo "<br>";
$x = 10;
$x %= 2; 
echo "Assigment  X % 2 =  ". $x;


echo "<br>";
// Comparison operators
echo "<h1 style='text-align:center;'>Operator Perbandingan</h1>";
echo "<br>";
echo "<h2>Ada 10 jenis operator perbandingan</h2>";
echo "<br>";
echo "1. ==  = sama dengan";
echo "<br>";
echo "2. ===  = sama dengan type data";
echo "<br>";
echo "3. !=  = tidak sama dengan";
echo "<br>";
echo "4. <>  = value true jika hasil tidak ada yang sama dengan value, jika sama hasil akan false";
echo "<br>";
echo "5. !==  = tidak sama dengan type data";
echo "<br>";
echo "6. > = harus lebih besar";
echo "<br>";
echo "7. ==  = harus lebih kecil";
echo "<br>";
echo "8. >= = Lebih Besar dari";
echo "<br>";
echo "9. <=  = Lebih kecil dari";
echo "<br>";
echo "<=> ==  = spaceship";
echo "<br>";echo "<br>";



$x = 10;
$y = 10;
if ($x <> $y){
    echo "Benar";
} else {
    echo "salah";
}
echo "<br>";

echo "<h1 style='text-align:center;'>Operator Increment dan decrement</h1>";
// Increment/Decrement operators
$x++;
echo $x;
echo "<br>";
++$x;
echo $x;
echo "<br>";
--$x;
echo $x;    
echo "<br>";
$x--;
echo $x;

// Logical operators
echo "<h1 style='text-align:center;'>Operator  Logika</h1>";
echo "<br>";
$x = 100;  
$y = 50;

//Operator and nilai x dan return false ketika salah satu false harus semua true 
echo "Operator  and = ";
if ($x == 100 && $y == 60) {
    echo "Hello world!";
} else {
    echo "Data tidak sesuai";
}

echo "<br>";
$x = 100;  
$y = 100;
// operator or return false ketika kedua value tidak sama
echo "Operator  Or = ";
if ($x == 100 || $y == 50) {
    echo "Hello world!";
} else {
    echo "Data tidak sesuai";
}


echo "<br>";    

$x = 100;  
$y = 50;

// nilai falsse ketika kedua value sama / harus memilih salah satu value 
echo "Operator  Xor = ";
if ($x == 100 xor $y == 50) {
    echo "Hello world!";
} else {
    echo "Data tidak sesuai";
}

// String operators
echo "<br>";
echo "<h1 style='text-align:center;'>Operator String</h1>";
echo "<br>";
echo "String Concet = . contoh echo 'Nama saya' . ' Surya Zein Rambe' ;";

echo "<br>";

echo "Concatenation asisgnment  <br> ";
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

// Array operators

echo "<h1 style='text-align:center;'>Operator Array</h1>";
$x = ["a" => "red", "b" => "green"];  
$y = ["c" => "blue", "d" => "yellow"];  
print_r($x + $y); // union of $x and $y

echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green");  
var_dump($x == $y);

echo "<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x === $y);

echo "<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);

echo "<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);


echo "<h1 style='text-align:center;'>Operator conditional assigment</h1>";
echo "<br>";

  // if empty($user) = TRUE, set $status = "anonymous"
if(isset($_POST['user'])){
    echo "Selamat Datang " . $_POST['user'];
}
echo "<br>";

$user = "John Doe";
  // if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

echo "<br>";

echo $user = $_POST["user"] ?? "anonymous";
   echo("<br>");
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";












// Conditional assignment operators
