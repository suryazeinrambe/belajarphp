<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Function</title>
</head>
<body>
    <?php 
        // function myCallback($item){
        //     return strlen($item);
        // }
        
        // $str = ['apel', 'jeruk', 'pisang', 'kelapa'];
        // $panjang = array_map("myCallback",$str);
        // print_r($panjang);
    
        // $strings = ['apel', 'orange', 'banana', 'kelapa'];
        // print_r($strings);

        function exclaim($str){
            return $str ."!" ;
        }

        function ask($str){
            return $str .  "? ";
        }

        function printFormatted($str, $format){
            // calling the $format callback function
            echo $format($str);
        }
        // pass exclaim and ask as callback function to printFormatted()
        printFormatted("Hello World", "exclaim");
        echo "<br>";
        printFormatted("Hello WOrld", "ask");

        function namaKucing(){
            return 'KCUING';
        }

       


        function argumenSaya(){
            return 'Selamat Pagi Dunia!';
        }

        function Cetak($str, $function){
            echo $function($str);
        }

        Cetak("SELAMAT PAGI","argumenSaya");
        echo '<br>';
        echo namaKucing();

    ?>

    
</body>
</html>