<?php
// Session Start
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
<?php
    // Set variabel session
    $_SESSION['warna'] = 'hijau';   
    $_SESSION['hewan'] = 'landak';
    echo 'Varialbel sesi di set';


?>    



</body>
</html>