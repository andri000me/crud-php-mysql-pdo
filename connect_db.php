<?php
$host = "localhost";
$db_name = "latihan_php";
$username = "root";
$password = "root";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
// to handle connection error
catch(PDOException $exception){
    echo "Gagal terkoneksi ke database: " . $exception->getMessage();
}
?>
