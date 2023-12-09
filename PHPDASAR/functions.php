<?php declare(strict_types=1); 
//deklarasi
function myMessage() {
  echo "Hello world!<br>";
}
// call function
myMessage();

// PHP function Argumen
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}
familyName("Surya");

// function with two argumen

function Name($fname, $year) {
  echo "$fname adalah nama saya, Kelahiran Tahun $year <br>";
}
Name("Surya Zein Rambe", "2002");

function Produk($nmProduk, $hargaProduk){
  echo "Nama Produk adalah $nmProduk, harganya $hargaProduk";
}

Produk("bakso","10.000");

echo"<br>";
echo"<br>";

// Default Argumen Value
function setHeight($minHeight=50){
  echo "The Height is : $minHeight <br>";
}

setHeight(350);
setHeight();
echo"<br>";

// Returning Values
function sum($x, $y){
  $z = $x + $y;
  echo $z;
}
sum(10,8);

echo "<br>";  
// echo "5 + 10 = ". sum(5,10) . "<br>";
// echo "10 + 15 = " . sum(10,15) . "<br>";


// Membuat fungsi
function perkalian($a, $b)
{
	$hasil = $a * $b;
  return $hasil;
}

// Memanggil fungsi
$hasil = perkalian(3, 4);
echo $hasil . "<br>"; // hasil 12

$a = 4;
$b = 5;
// Memanggil fungsi
echo 'Hasil perkalian ' . $a . ' x ' . $b . ' adalah: ' . perkalian ($a, $b);

// pass reference argument untuk update variabel
echo "<br>";
echo "<br>";
function addFive(&$value){
  $value += 5;
  return $value;
}

$a = 10;
addFive($a);
echo $a;

function sumMyNumbers(...$x){
  $n = 0;
  $len = count($x);
  for ($i = 0; $i < $len; $i++){
    $n += $x[$i];
  }
  return  $n;
}


echo "<br>";
echo "<br>";
$a = sumMyNumbers(3,4,5,6,7);
echo $a;


echo "<br>";
echo "<br>";


function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);

  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

echo "<br>";
echo "<br>";

function addNumbers(int $a, int $b) {
  return $a + $b . '<br>';
}
echo addNumbers(5, 10);

echo "<br>";

function namaKeluarga($namaBelakang, ...$namaDepan){
  $txt = "";
  $panjang = count($namaDepan);

  for ($i=0; $i < $panjang; $i++){
    $txt = $txt."Nama Saya $namaDepan[$i] $namaBelakang. <br>";
  }
  return $txt;
}

$b = namaKeluarga("Rambe", "Muhammad Ramlan", "Siti Aisyah", "Taufik Tamara", "Surya Zein", "Agus Wisman");
echo $b;

echo "<br>";  


// return tipe deklarasi
// strict requirement
function addNumber(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumber(1.1, 5.6);
