<?php 

class Goodbye {
    const LEAVING_MESSAGE = "Thank You For Visiting Me ! See You Again! ^_^ <br>";
}

// Class Langsung Constant 
echo Goodbye::LEAVING_MESSAGE;

class Sayonara {
    const PESAN = 'Arigatou Gozaimasu ! ^-^ <br>';

    public function byebye(){
        return self::PESAN;
    }
}

$goodbye = new Sayonara();
// Instant -> function 
echo $goodbye->byebye();

class Surya {
    const NASIHAT = "Perkenalkan Nama Saya Surya Zein Rambe ! Salam Kenal ! ^0^";
    public function Cetak(){
        return self::NASIHAT ;
    }
}

$surya = new Surya();
echo $surya->Cetak();
echo "<br>";
echo Surya::NASIHAT;