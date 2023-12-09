<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

echo"<br>";

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }


echo"<br>";
  $x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
   break;
  }
  echo "The number is: $x <br>";
  $x++; 
}
?>