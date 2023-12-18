<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>

<?php 
$str = "<h1>Hello World !</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr. "<br>";


$int = 2;
if (!filter_var($int,FILTER_VALIDATE_INT)=== false){
    echo "Variabel INTEGER";

}else {
    echo 'variabel bukan INT';
}



// Validasi alamat IP

$IP = '127.192.2.1';

if (!filter_var($IP,FILTER_VALIDATE_IP) === false )
{
    echo "<br>ALAMAT IP VALID!<br>";
} 
else 
{
    echo "<br>Alamat IP TIDAK VALID!<br>";
}