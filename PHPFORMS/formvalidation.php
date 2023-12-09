<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM HANDLING</title>
</head>
<body>
   

    <?php  
        // define variable and set to empty values

        $name = $email = $gender = $comment = $website = '';

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $comment = test_input($_POST["comment"]);
            $website = test_input($_POST["website"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
    
    ?>

<h2>PHP FORM VALIDATION</h2>

<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

NAME : <input type="text" name="name"><br><br>
E-mail : <input type="text" name="email"><br><br>
Website : <input type="text" name="website"><br><br>
Comment : <textarea name="comment" rows="5" cols="40"></textarea><br><br>
Gender : 
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<br><br>
<input type="submit" name="submit" value="submit">


</form>


<?php 
echo "<h2>Your Input : </h2>";
echo "$name<br>";
echo "$email<br>";
echo "$website<br>";
echo "$comment<br>";
echo "$gender<br>";
?>
</body>
</html>
<?php 
// var_dump($_SERVER);
?>