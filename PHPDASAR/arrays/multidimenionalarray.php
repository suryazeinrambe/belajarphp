<?php
$cars = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["Land Rover",17,15],
    ["Ferrari",10,8]
];

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "Stok  Mobil Saab = " .$cars[2][1];

echo "<br>";

for ($row = 0; $row < 5 ;$row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col <3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }