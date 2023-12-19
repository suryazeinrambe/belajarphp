<?php 
// Class Parent : Komputer 
class Komputer {
    public $merk, $processor, $memory;

    public function __construct($merk, $processor, $memory){
        $this->merk = $merk;
        $this->processor = $processor;
        $this->memory = $memory;
    }

    public function beli_komputer(){
        return 'Beli Komputer Baru ';
    }
}


// Class Child dari komputer 

class Laptop extends Komputer {
    public function lihat_spec(){
        echo  "Merk : {$this->merk}, Processor : {$this->processor}, Memory : {$this->memory}";
    }
}

// Instance objek dari class laptop 
$laptop1 = new Laptop ('Acer', 'Intel Core i5', '16 GB');
$Komputer = new Komputer ('Lenovo','AMD Radeon', '16 GB');

// Panggil Methid Object 
echo $laptop1->beli_komputer();
echo "<br>";
$laptop1->lihat_spec();
echo '<br>';
// var_dump($Komputer);
echo $Komputer->beli_komputer();


// Class Parent
// class Komputer {
//     protected function beli_komputer(){
//         return "Beli Komputer";
//     }
// }

// // Child Class Komputer 
// class Laptop extends Komputer{
//     protected function beli_laptop(){
//         return 'Beli Laptop baru';
//     }
// }

// // Child Class Laptop 
// class Chromebook extends Laptop{
//     protected function beli_chromebook(){
//         return "Beli Chromebook Baru";
//     }

//     public function beli_semua(){
//         $a = $this->beli_komputer();
//         $b = $this->beli_laptop();
//         $c = $this->beli_chromebook();
//     }
// }

// // Instansi objek dari class Laptop (isntansi)
// $gadget_baru = new Chromebook();
// echo $gadget_baru->beli_semua();
