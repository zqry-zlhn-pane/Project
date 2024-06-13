<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$produk = $_POST['produk'];
$harga = $_POST['harga'];

$sql = "INSERT INTO pesan (nama, hp, produk, harga) VALUES ('$nama', '$hp', '$produk', '$harga')";

$koneksi->query($sql);
header("Location: pesan.php");
?>