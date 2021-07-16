<?php 
include '../../config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query("SELECT * FROM login where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;
?>