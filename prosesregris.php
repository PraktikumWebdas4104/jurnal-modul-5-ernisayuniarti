<?php 
session_start();
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];

echo "data tersimpan";
?>
