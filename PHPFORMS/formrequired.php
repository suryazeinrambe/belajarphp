<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM HANDLING</title>
</head>
<body>
   

    <?php  
        // define variable and set to empty values
        $nameErr=$emailErr=$genderErr=$websiteErr="";
        $name = $email = $gender = $comment = $website = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
            }
              
            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
            }
          
            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }

        // if($_SERVER['REQUEST_METHOD'] == "POST") {
        //     $name = test_input($_POST["name"]);
        //     $email = test_input($_POST["email"]);
        //     $gender = test_input($_POST["gender"]);
        //     $comment = test_input($_POST["comment"]);
        //     $website = test_input($_POST["website"]);
        // }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
    
    ?>

<h2>PHP FORM VALIDATION</h2>
<p><span class="error">Required File</span></p>

<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

NAME : <input type="text" name="name"><span class="error">* <?= $nameErr ?></span><br><br>
E-mail : <input type="text" name="email"><span class="error"> * <?= $emailErr ?></span><br><br>
Website : <input type="text" name="website"><span class="error"> * <?= $websiteErr ?></span><br><br>
Comment : <textarea name="comment" rows="5" cols="40"></textarea><br><br>
Gender : 
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<span class="error"> * <?= $genderErr ?></span>
<br><br>
<input type="submit" name="submit" value="Submit">


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