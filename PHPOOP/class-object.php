<?php 
class Buah {
    // Properti 
    public $nama, $warna;
    public $berat = '20kg';

    // Method
    function set_nama($nama){
        $this->nama = $nama;
    }
    function get_nama(){
        return $this->nama;
    }
    function set_warna($warna){
        $this->warna = $warna;
    } 

    function get_warna(){
        return $this->warna;
    }
}





$apel = new Buah();
$pisang = new Buah();
$kelapa = new Buah();

$kelapa->nama = 'Kelapa';
$apel->set_nama('Apel');
$apel->set_warna('Merah');
$pisang->set_nama('Pisang');
$pisang->set_warna('Kuning');


echo "Nama : " . $apel->get_nama();
echo "<br>";
echo "Warna : " . $apel->get_warna();
echo"<br>";
echo "Nama : " . $pisang->get_nama();
echo "<br>";
echo "Warna : " . $pisang->get_warna();
echo '<br>';
// echo $kelapa->nama;
// echo $berat->berat;
var_dump($apel instanceof Buah);