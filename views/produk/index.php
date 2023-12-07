<?php
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';
$database = new database();
$db = $database->getKoneksi();

$produkController = new ProdukController($db);
$produk = $produkController->getAllProduk();

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
        <h3 class="mb-4">Data Produk</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Berat</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$nomor = 1;
foreach ($produk as $x) {
    echo "<tr>";
    echo "<td class='text-center'>" . $nomor++ . "</td>";
    echo "<td class='text-center'>" . $x['nama_produk'] . "</td>";
    echo "<td class='text-center'>" . $x['harga_produk'] . "</td>";
    echo "<td class='text-center'>" . $x['berat_produk'] . "</td>";
    echo "<td class='text-center'><img src='./foto_produk/{$x['foto_produk']}' width='100'></td>";
    echo "<td class='text-center'>
    <a class='btn btn-awas' href='editproduk$x[id_produk]'>Ubah</a>
    <a class='btn btn-bahaya' href='hapusproduk$x[id_produk]' onclick='confirmDelete(event)'>Hapus</a>
          </td>"; 
    echo "</tr>";
}
?>


                </tbody>
            </table>
        </div>

        <a href="tambahproduk" class="btn btn-green">Tambah</a>
    </div>
</section>

</main>

  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    function confirmDelete(event) {
        event.preventDefault();
        var confirmation = confirm("Apakah Anda yakin ingin menghapus produk ini?");
        if (confirmation) {
            window.location.href = event.target.getAttribute("href");
        }
    }
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>