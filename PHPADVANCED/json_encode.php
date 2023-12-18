<?php 
$age = [
    'peter' => 35,
    'ben' => 37,
    'joe' => 43
];

echo json_encode($age);

$cars = ['Volvo', 'BMW', 'Toyota' ];

echo json_encode($cars);

echo '<br>';

$jsnobj = '{"peter":35, "Ben":37}';
var_dump(json_decode($jsnobj));

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
echo "<br>";
// Menagkses nilai yang dikembalikan menggunakan aray objectPhp
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
var_dump ($obj);
echo $obj->Joe;

// Mengakses nilai dari array assocv
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr["Peter"].'<br>';
echo $arr["Ben"].'<br>';
echo $arr["Joe"].'<br>';


// Looping nilai objeck
$jsonobj = [
    'Peter'=>35,
    'Ben'=>37,
    'Joe'=>43
];


print_r($jsonobj);














?>