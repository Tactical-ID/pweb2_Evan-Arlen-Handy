<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin - Produk</title>

</head>

<?php require '../../index.php'; ?>

    <main class="main-content position-relative border-radius-lg ">
        <section class="py-4">
            <div class="container-fluid">
                <h3 class="mb-4">Tambah Data Produk</h3>
                <form action="prosestambahproduk" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                            </div>
                        </div>
                        <div class="col-md-6">
                <div class="form-group">
                    <label for="harga">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat">Berat (Gr)</label>
                    <input type="number" class="form-control" id="berat_produk" name="berat_produk">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="5"></textarea>
</div>
                    <button class="btn btn-green" name="submit" onclick="return validateForm()">Simpan</button>
                    <a href="produk" class="btn btn-abu">Kembali</a>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST['nama_produk']) || empty($_POST['harga_produk']) || empty($_POST['berat_produk']) || empty($_POST['deskripsi_produk']) || empty($_FILES['foto_produk']['name'])) {
                        echo "<script>alert('Harap isi semua field terlebih dahulu.');</script>";
                    } else {
                        $nama = $_FILES['foto_produk']['name'];
                        $lokasi = $_FILES['foto_produk']['tmp_name'];
                        move_uploaded_file($lokasi, "../../foto_produk/" . $nama);
                        echo "<script>alert('Data tersimpan');</script>";
                        echo "<meta http-equiv='refresh' content='1;url=produk'>";
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
            var nama = document.getElementById("nama_produk").value;
            var harga = document.getElementById("harga_produk").value;
            var berat = document.getElementById("berat_produk").value;
            var deskripsi = document.getElementById("deskripsi_produk").value;
            var foto = document.getElementById("foto_produk").value;

            if (nama == "" || harga == "" || berat == "" || deskripsi == "" || foto == "") {
                alert("Harap isi semua field terlebih dahulu");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
