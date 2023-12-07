<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin - Layanan</title>

</head>

<?php require '../../index.php'; ?>

    <main class="main-content position-relative border-radius-lg ">
        <section class="py-4">
            <div class="container-fluid">
                <h3 class="mb-4">Tambah Data Layanan</h3>
                <form action="prosestambahlayanan" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan">
                            </div>
                        </div>
                        <div class="col-md-6">
                <div class="form-group">
                    <label for="harga">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga_layanan" name="harga_layanan">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto_layanan" name="foto_layanan">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_layanan" name="deskripsi_layanan" rows="5"></textarea>
</div>
                    <button class="btn btn-green" name="submit" onclick="return validateForm()">Simpan</button>
                    <a href="layanan" class="btn btn-abu">Kembali</a>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST['nama_layanan']) || empty($_POST['harga_layanan']) || empty($_POST['deskripsi_layanan']) || empty($_FILES['foto_layanan']['name'])) {
                        echo "<script>alert('Harap isi semua field terlebih dahulu.');</script>";
                    } else {
                        $nama = $_FILES['foto_layanan']['name'];
                        $lokasi = $_FILES['foto_layanan']['tmp_name'];
                        move_uploaded_file($lokasi, "../../foto_layanan/" . $nama);
                        echo "<script>alert('Data tersimpan');</script>";
                        echo "<meta http-equiv='refresh' content='1;url=layanan'>";
                    }
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            var nama = document.getElementById("nama_layanan").value;
            var harga = document.getElementById("harga_layanan").value;
            var deskripsi = document.getElementById("deskripsi_layanan").value;
            var foto = document.getElementById("foto_layanan").value;

            if (nama == "" || harga == "" || deskripsi == "" || foto == "") {
                alert("Harap isi semua field terlebih dahulu");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
