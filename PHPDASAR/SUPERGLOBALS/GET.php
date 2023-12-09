
<!DOCTYPE html>
<html>
<body>

<a href="GET.php?subject=PHP&web=W3schools.com">Test $GET</a>
<?php
if(empty($_GET))  {
    echo'Masukkan Link ';
} else {
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
} ?>

</body>
</html>