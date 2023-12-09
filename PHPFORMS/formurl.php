<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM HANDLING</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<?php
    $name = $email = $website = $comment = $gender = '';
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }
          
        if (empty($_POST["website"])) {
          $website = "";
        } else {
          $website = test_input($_POST["website"]);
          // check if URL address syntax is valid
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
          }    
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
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
      

?>
<h2>PHP FORM VALIDATION</h2>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    
    Name : <input required type="text" name="name"><span class="error">*<?= $nameErr; ?></span><br><br>

    E-mail : <input required type="text" name="email"><span class="error">*<?= $emailErr; ?></span><br><br>
    
    Website : <input required type="text" name="website"><span class="error">*<?= $websiteErr; ?></span><br><br>
    
    Comment : <textarea required name="comment" cols="40" rows="5"></textarea><br><br>

    Gender :
    <input type="radio" name="gender" value="female">Female 
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other 
    <br><br>
    <input type="submit" name="submit">


    
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</form>
</body>
</html>