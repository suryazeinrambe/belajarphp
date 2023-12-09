<?php 
/*
    d = data/tanggal dari tangga 1-31
    m = month / bulan 1-12
    Y = Year / tahun dalam 4 digit
    y = year / tahun dalam 2 digit terakhir
    l = merepresentasikan hari pada minggu ini
    H = Hour / Jam dengan format (00-23)
    h = hour / jam denagan format 1-12 
    i = minutes / menit 00-59 
    s = second 00-59
    a = AM/PM 
*/

echo "Hari ini  tanggal " . date("d m- Y") ." hari<br> ". date("l") ;

// Automatic Copyright
echo"<br> &copy  2010 - ". date("Y"); 
echo "<br>";
echo "sekarang pukul " . date("h a");
echo "<br>";
echo "Sekarang jam ". date("H:i:s");

date_default_timezone_set("Europe/Berlin");
echo "<br>";    
echo "The time is ". date("h:i:sa");
echo "<br>";
echo date_default_timezone_get();




/*
    Membuat tanggal dengan function mktime()


    Sintaks mktime(jam,menit,detik,bulan, tanggal, tahun);
*/
echo "<br>";
echo "<br>";
echo "<br>";
$d = mktime(4,36,0,12,9,2023);
echo "created date is ". date("Y-m-d h:i:sa",$d);
echo $d;
echo"<br>";


// strtotime(time,now)

$d =  strtotime("20december2023 16.53");
echo "Tanggal dibuat : " . date("d-M-Y H.i",$d);

echo "<br>";
$d = strtotime("tomorrow");
echo date('Y-m-d ', $d). "<br>";

$d = strtotime('17.24 9-december-2023 +25 month');
echo date('Y-m-d h:i:sa', $d). "<br>";

$d = ("<br>");
$sekarang = strtotime("now");
$tangalAkhir = strtotime("+2 month", $sekarang);

while ($sekarang < $tangalAkhir) {
    echo "". date("M d ", $sekarang) ."<br>";
    $sekarang = strtotime("+1 week", $sekarang);
}