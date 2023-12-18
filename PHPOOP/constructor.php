<?php 

// Class Fruit {
//     public $nama, $warna;
//     function __construct($nama, $warna){
//         $this->nama = $nama;
//         $this->warna = $warna;
//     }

//     function get_nama(){
//         return $this->nama;
//     }

//     function get_warna(){
//         return $this->warna;
//     }

// }

// $apel = new Fruit("Apel", "Merah");
// echo $apel->get_nama();
// echo "<br>";

// $Pisang = new Fruit('Pisang ', 'Kuning');

// var_dump(Fruit);

class gangDamaiNo7 {
    public $nama, $usia;

    public function __construct($nama,$usia){
        $this->nama = $nama;
        $this->usia = $usia;
    }

    function getNama(){
        return $this->nama;
    }

    function getUsia(){
        return $this->usia;
    }
}

$nama1 = new gangDamaiNo7('Muhammad Ramlan Rambe',58);
echo $nama1->getNama();
var_dump($nama1);