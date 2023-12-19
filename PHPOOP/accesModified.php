<?php 

Class Rumah {
    Public $nama;
    protected $usia;
    private $jeniskelamin;

    public function setUsia ($usia=21){
        $this->usia = $usia;
    }
    public function getUsia (){
        return $this->usia;
    }
    
} 

$Anak = new Rumah();
$Anak->nama = 'Surya Zein Rambe';
echo $Anak->nama;
// $Anak->usia = 21;
// echo $Anak->usia();
echo $Anak->getUsia();