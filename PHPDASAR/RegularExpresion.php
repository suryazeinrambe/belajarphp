<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str, $matches);

echo"<br>";
$str = "The rain in SPAIN falls mainly on the plains. <br> Visit W3Schools ";
$pattern = "/is/m";
echo preg_match_all($pattern, $str); // Outputs 4