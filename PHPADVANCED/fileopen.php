<?php 
$myFile = fopen("webdictionary.txt","r") or die ("Tidak dapat membuka file");

echo fread($myFile, filesize("webdictionary.txt"));
fclose($myFile);



/*

PARAMETER : 
r = read / hanya membaca
w = write / mengedit file
a = menulis / manambah isi file
x = membuat file baru, jikda sudah ada mengmeblaikan nialfalse
r+ = membaca/menulis file dimulai dari awal
w+ = membuka file dan bisa diedit
a+ = membuka file dan menambah isi file
x+ = membuat file baru dan mgedit file

*/