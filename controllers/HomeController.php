<?php
class HomeController
{
    public function home()
    {
        header("location:http://localhost/Majestic%20MVC/index.php");
    }
    public function produk()
    {
        header("location:http://localhost/Majestic%20MVC/views/produk/index.php");
    }
    public function layanan()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/layanan/index.php");
    }
    public function tambahproduk()
    {
        header("location:http://localhost/Majestic%20MVC/views/produk/tambah.php");
    }
    public function editproduk()
    {
        header("location:http://localhost/Majestic%20MVC/views/produk/edit.php");
    }
    public function prosestambahmhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/proses_tambah.php");
    }


    public function tambahdosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambah.php");
    }
    public function prosestambahdosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambah.php");
    }
}