<?php
include_once '../../config.php';
include_once '../../controllers/LayananController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $layananController = new LayananController($db);
    $result = $layananController->deleteLayanan($id);
    if($result){
        header("location: layanan");
    }
    else {
        return "Gagal menghapus data";
    }
}