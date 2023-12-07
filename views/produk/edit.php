<?php
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $produkController = new ProdukController($db);
    $produkData = $produkController->getProdukById($id);

    if ($produkData) {
        if (isset($_POST['submit'])) {
            $nama_produk = $_POST['nama_produk'];
            $harga_produk = $_POST['harga_produk'];
            $berat_produk = $_POST['berat_produk'];
            $foto_produk = $_FILES['foto_produk']['name'];
            $deskripsi_produk = $_POST['deskripsi_produk'];

            $result = $produkController->updateProduk($id, $nama_produk, $harga_produk, $berat_produk, $foto_produk, $deskripsi_produk, $lokasi_foto);

            if ($result) {
                header("location: produk");
            } else {
                header("location: editproduk");
            }
        }
    } else {
        echo "Produk tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - Produk</title>
</head>
<?php require '../../index.php'; ?>
<body>
    <main class="main-content position-relative border-radius-lg">
        <section class="py-4">
            <div class="container-fluid">
                <h3 class="mb-4">Ubah Data Produk</h3>
                <?php
                if ($produkData) {
                ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <?php
                            foreach ($produkData as $d => $value) {
                            ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="<?php echo $d; ?>"><?php echo ucfirst(str_replace('_', ' ', $d)); ?></label>
                                        <?php if ($d === 'foto_produk') { ?>
                                            <input type="file" class="form-control" id="<?php echo $d; ?>" name="<?php echo $d; ?>">
                                            <img src="<?php echo $value; ?>" width="200">
                                        <?php } else { ?>
                                            <input type="text" class="form-control" id="<?php echo $d; ?>" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-green" name="submit">Simpan</button>
                            <a href="produk" class="btn btn-abu">Kembali</a>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>
