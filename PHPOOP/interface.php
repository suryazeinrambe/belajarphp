<?php 
// Untuk menggunakan method ke dalam class interface , kita menggunakan keyword impplements
interface Mouse {
    const JENIS = "Laser Mouse";
    public function klik_kanan();
    public  function klik_kiri();
}

interface mouse_gaming extends Mouse {
    public function ubah_dpi();
}
class Laptop implements mouse_gaming,Mouse {
    public function klik_kanan(){
    return "Klik kanan!";
    }
    public function klik_kiri(){
        return "Klik Kiri!";
    }
    public function ubah_dpi(){
        return "Ubah Settingan DPI Mouse";
    }

}

$laptop_baru = new Laptop();
// echo Mouse::klik_kanan();
echo $laptop_baru->klik_kanan();
echo "<br>";
// echo $laptop_baru->klik_kiri();
echo $laptop_baru->ubah_dpi();
echo "<br>";
echo Mouse::JENIS;