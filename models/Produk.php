<?php

class Produk{
private $koneksi;

public function __construct($db){

    $this->koneksi = $db;
}
public function getAllProduk(){
    $query = "SELECT * FROM produk";
    $result = mysqli_query($this->koneksi, $query);
    return $result;
}

public function createProduk($nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk){

    $query = "INSERT INTO produk(nama_produk, harga_produk, berat_produk, foto_produk, deskripsi_produk) 
    VALUES('$nama_produk', '$harga_produk', '$berat_produk', '$foto_produk', '$deskripsi_produk')";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }
    else {
        return false;
    }
} 
public function getProdukById($id)
{
    $query = "SELECT * FROM produk WHERE id_produk=$id";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
}

public function updateProduk($id, $nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk, $lokasifoto) {
    $query = "";

    if (!empty($foto_produk)) {
        $query = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', berat_produk='$berat_produk', foto_produk='$foto_produk', deskripsi_produk='$deskripsi_produk' WHERE id_produk='$id'";
    } else {
        $query = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', berat_produk='$berat_produk', deskripsi_produk='$deskripsi_produk' WHERE id_produk='$id'";
    }

    $result = mysqli_query($this->koneksi, $query);

    if ($result) {
        if (!empty($lokasifoto)) {
            move_uploaded_file($lokasifoto, "../foto_produk/$foto_produk");
        }
        return true;
    } else {
        return false;
    }
}

public function deleteProduk($id) {
    $query = "DELETE FROM produk WHERE id_produk=$id";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }
    else {
        return false;
    }
}
}


