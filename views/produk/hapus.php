<?php
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produkController = new ProdukController($db);
    $result = $produkController->deleteProduk($id);
    if ($result) {
        header("Location: produk");
        exit();
    }
}