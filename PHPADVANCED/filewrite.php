<?php

$myfile = fopen("newfile.txt","w") or die ("Tidak dapat membuka file");
$txt = "Surya Zein \n";

fwrite($myfile,$txt);
$txt = "Surya \n";
fwrite($myfile,$txt);
fclose($myfile);



$file = fopen("filebaru.txt","w") or die ("Tidak dapat membuka file");
$teks = "NAMA KAMU SIAPA";
fwrite($file,$txt);
$teks  = "WOIISI LAH\n";
fwrite($file,$teks);
fclose($file);