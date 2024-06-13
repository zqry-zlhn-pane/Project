<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produk WHERE idProduk = $id";
    $koneksi->query($sql);
    header("Location: admin.php");
}
?>
