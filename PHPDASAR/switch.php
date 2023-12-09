<?php 

$favcolor = "red" ;

switch ($favcolor) {
    case 'red':
        echo 'Your fav color is red!';
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    
    default:
        echo "Anda belum memasukkan warna";
        break;
}


echo"<br>";

$angka =2;
switch ( $angka ) {
    case 1 : 
        echo 'Angka pilihan anda adalah'. $angka;
        break;
    default :
    echo 'Hanya anda angka 1';
}
 


echo '<br>';
$nomor ='2';
switch ($nomor){
    case 1 :
        echo "pilihan anda 1";
    break;
    case 2 : 
        echo "Pilihan anda 2";
    break;
    default:
    echo "Masukkan Nomor anda terlebih dahulu";
}