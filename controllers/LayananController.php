<?php 
include_once '../../models/Layanan.php';

class LayananController{
private $model;

public function __construct($db){
    $this->model = new layanan($db);
}
public function getAllLayanan(){
    return $this->model->getAllLayanan();
}

public function createLayanan($nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan){
    return $this->model->createLayanan($nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan);
}

public function getLayananById($id)
{
    return $this->model->getLayananById($id);
}

public function updateLayanan($id, $nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan, $lokasi_foto)
{
    return $this->model->updateLayanan($id, $nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan, $lokasi_foto);
}

public function deleteLayanan($id)
{
    return $this->model->deleteLayanan($id);
}
}