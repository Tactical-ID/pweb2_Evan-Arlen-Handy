<?php 
include_once '../../models/Produk.php';

class ProdukController{
private $model;

public function __construct($db){
    $this->model = new produk($db);
}
public function getAllProduk(){
    return $this->model->getAllProduk();
}

public function createProduk($nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk){
    return $this->model->createProduk($nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk);
}

public function getProdukById($id)
{
    return $this->model->getProdukById($id);
}

public function updateProduk($id, $nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk, $lokasi_foto)
{
    return $this->model->updateProduk($id, $nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk, $lokasi_foto);
}

public function deleteProduk($id)
{
    return $this->model->deleteProduk($id);
}
}