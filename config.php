<?php

$server = "localhost";
$user = "admin";
$password = "caseclosedaptx4869";
$nama_database = "u5023687_pangoje";
//$nama_database = "pangoje_informasi";


$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

