<?php 

Class  Fruit {
    public $nama,$warna;

    public function __construct($nama,$warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function __destruct(){
        echo "The Fruit is {$this->nama},  apel Berwarna {$this->warna}";

    }
}
$Apel = New Fruit('Apel','Merah');