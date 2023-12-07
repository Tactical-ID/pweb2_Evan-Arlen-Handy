<?php

class Layanan{
private $koneksi;

public function __construct($db){

    $this->koneksi = $db;
}
public function getAllLayanan(){
    $query = "SELECT * FROM layanan";
    $result = mysqli_query($this->koneksi, $query);
    return $result;
}

public function createLayanan($nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan){

    $query = "INSERT INTO layanan(nama_layanan, harga_layanan, foto_layanan, deskripsi_layanan) 
    VALUES('$nama_layanan', '$harga_layanan', '$foto_layanan', '$deskripsi_layanan')";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }
    else {
        return false;
    }
} 
public function getLayananById($id)
{
    $query = "SELECT * FROM layanan WHERE id_layanan=$id";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
}



public function updatelayanan($id, $nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan, $lokasifoto) {
    $query = "";

    if (!empty($foto_layanan)) {
        $query = "UPDATE layanan SET nama_layanan='$nama_layanan', harga_layanan='$harga_layanan', foto_layanan='$foto_layanan', deskripsi_layanan='$deskripsi_layanan' WHERE id_layanan='$id'";
    } else {
        $query = "UPDATE layanan SET nama_layanan='$nama_layanan', harga_layanan='$harga_layanan', deskripsi_layanan='$deskripsi_layanan' WHERE id_layanan='$id'";
    }

    $result = mysqli_query($this->koneksi, $query);

    if ($result) {
        if (!empty($lokasifoto)) {
            move_uploaded_file($lokasifoto, "../foto_layanan/$foto_layanan");
        }
        return true;
    } else {
        return false;
    }
}


public function deleteLayanan($id) {
    $query = "DELETE FROM layanan WHERE id_layanan=$id";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }
    else {
        return false;
    }
}
}


