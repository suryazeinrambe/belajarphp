<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "My favorit color : " . $_SESSION['warna']."<br>";

        echo "Hewan beduri : ". $_SESSION['hewan'] = 'KCUING'. "<br>";


        print_r($_SESSION);
        session_destroy();
    ?>
</body>
</html>