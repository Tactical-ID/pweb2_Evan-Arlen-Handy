<?php

include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_produk = $_POST['nama_produk'];
            $harga_produk = $_POST['harga_produk'];
            $berat_produk = $_POST['berat_produk'];
            $foto_produk = $_POST['foto_produk'];
            $deskripsi_produk = $_POST['deskripsi_produk'];
    $produkController = new ProdukController($db);
    $result = $produkController->createProduk($nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk);
    if ($result) {
        header("Location: produk");
        exit();
    }
}
