<?php
include_once '../../config.php';
include_once '../../controllers/LayananController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $layananController = new LayananController($db);
    $layananData = $layananController->getLayananById($id);

    if ($layananData) {
        if (isset($_POST['submit'])) {
            $nama_layanan = $_POST['nama_layanan'];
            $harga_layanan = $_POST['harga_layanan'];
            $foto_layanan = $_FILES['foto_layanan']['name'];
            $deskripsi_layanan = $_POST['deskripsi_layanan'];

            $result = $layananController->updateLayanan($id, $nama_layanan, $harga_layanan, $foto_layanan, $deskripsi_layanan, $lokasifoto);

            if ($result) {
                header("location: layanan");
            } else {
                header("location: editlayanan");
            }
        }
    } else {
        echo "Layanan tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - Layanan</title>
</head>
<?php require '../../index.php'; ?>
<body>
    <main class="main-content position-relative border-radius-lg">
        <section class="py-4">
            <div class="container-fluid">
                <h3 class="mb-4">Ubah Data Layanan</h3>
                <?php
                if ($layananData) {
                ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <?php
                            foreach ($layananData as $d => $value) {
                            ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="<?php echo $d; ?>"><?php echo ucfirst(str_replace('_', ' ', $d)); ?></label>
                                        <?php if ($d === 'foto_layanan') { ?>
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
                            <a href="layanan" class="btn btn-abu">Kembali</a>
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
