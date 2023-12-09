<?php

echo date("H");
echo "<br>";
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}else {
    echo "Waktunya turu";
}
echo "<br>";
if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }


  echo "<br>";

  $a = 13;
  $b = $a < 15 ? "Kecil" : "Besar";

  echo $b;
