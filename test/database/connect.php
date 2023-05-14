<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
else{
}
?>