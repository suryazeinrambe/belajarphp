<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <form action="POST.php" method="POST">

    Name : <input type="text" name="fname">
    <input type="submit">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        // mengumpulkan value pada input
        $name = $_POST["fname"];
        if(empty($fname)){
            echo "Name is Empty";
    } else {
        echo $name;
    }
}

echo"<br";
// var_dump($_SERVER); 
?>



</body>
</html>