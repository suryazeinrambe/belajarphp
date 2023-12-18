<?php 

$namaCookie = '';
$valueCookie = '';
setcookie('user','Surya Zein Rambe', time()-3600,'/');
setcookie('nama:', 'Surya Zein Rambe', time()-(60 * 60),'/') ;// 3600 detik = 1 jam
setcookie('warna','Hijau',strtotime('-7 days'),'/');
setcookie('test_cookie', 'test', time()-3600,'/');
setcookie('$namaCookie','$valueCookie',time()-86400);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php 
       print_r($_COOKIE);
    if(count($_COOKIE)>0){
        echo "Cookie dipasang";
    }else {
        echo "Cookie tidak dipasang";
    }
    ?>



</body>
</html>