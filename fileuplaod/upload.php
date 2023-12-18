<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uplaod Dokumen</h1>

    <form action="" method="post">
    <h2><b>File Upload</b></h2>
    <input type="file" name="namafile">
    <input type="submit" name="proses" value="upload">


    </form>
<?php 
$localhost = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_latihan';

if(isset($_POST['proses'])){
    $direktori = 'berkas/';
    $file_name = $_FILES['namafile']['name'];
    move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$filename);

mysqli_query($koneksi,"insert into dokumen set file = '$file_name'");

echo 'file berhasil di upload';

}





?>





</body>
</html>