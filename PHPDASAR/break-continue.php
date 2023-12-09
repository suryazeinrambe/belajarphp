<?php
for ($x = 0; $x < 10; $x+=2) {
  if ($x >= 10) {
    break;
  }
  echo "The number is: $x <br>";
}

echo"<br>";
for ($x=0; $x <10; $x++){
    if ($x == 4) {
      continue; }
      echo "The number is: $x <br>";
}

echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}



echo"<br>";
$x = 0;
while ($x <= 100) {
  if ($x == 5) {
    $x++;
    continue;
  } echo "Nomor anda $x <br>";
  $x++; 
}

