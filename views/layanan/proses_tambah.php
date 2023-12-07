<?php

include_once '../../config.php';
include_once '../../controllers/LayananController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_layanan = $_POST['nama_layanan'];
            $harga_layanan = $_POST['harga_layanan'];
            $foto_layanan = $_POST['foto_layanan'];
            $deskripsi_layanan = $_POST['deskripsi_layanan'];

    $layananController = new LayananController($db);
    $result = $layananController->createLayanan($nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan);

    if ($result) {
        header("Location: layanan");
        exit();
    }
}

?>
