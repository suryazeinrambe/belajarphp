<?php

echo"Ada 2 cara menggunakan constant yaitu define dan const";
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING; 
echo "<br>";

const SAPA  = "Halo Semua";
echo SAPA ;

define ("CARS",
["Honda", "Yoyota", "Wuling"]
);
echo "<br>";
print_r( CARS );
echo "<br>";
echo CARS[2];

const MOTOR = ["Beat", "Vario", "Nmax", "PCX"];
echo "<br>";
print_r (MOTOR);
echo "<br>";

define ("HELLO","Hello World");

function myTest(){
    echo HELLO;
}

myTest();