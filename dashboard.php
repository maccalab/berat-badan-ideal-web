<!doctype html>
<html lang="en">
<?php
   include('session.php');
   include('env.php');
   $sql = "SELECT * FROM `data` ORDER BY id DESC";
   $result = $conn->query($sql);
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/landingPage/favicon/favicon.ico" type="image/x-icon" />
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/landingPage/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/landingPage/css/theme.bundle.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <!-- Title -->
    <title>Dashboard | Sistem Deteksi Berat Badan Ideal</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="assets/landingPage/img/logo-macca.png" class="navbar-brand-img" alt="...">
        </a>
    
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>
          <!-- Button -->
        
            <a href="<?=$BASE_URL;?>logout.php" class="navbar-btn btn btn-sm btn-success-soft lift ms-auto">
              <span class="fe fe-log-out d-none d-md-inline p-0 m-0"></span> Logout 
            </a>

        </div>
    
      </div>
    </nav>

    <!-- WELCOME -->
    <section class="position-relative pt-12 pt-md-14 mt-n11">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <div class="row mb-3">
                        <div class="card">
                            <div class="text-center mt-3">
                                <p><b>Data Hasil Deteksi</b></p>
                                <hr>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Kategori</th>
                                    <th>Alamat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 1;
                                      while($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                    <td><?= $no ?></td>
                                    <td> <?= $row['nama']; ?> </td>
                                    <td> <?= $row['jenis_kelamin']; ?> </td>
                                    <td> <?= $row['umur']; ?> Tahun</td>
                                    <td> <?= $row['berat_badan']; ?> Cm </td>
                                    <td> <?= $row['tinggi_badan']; ?> Kg </td>
                                    <td> <?= $row['kategori']; ?> </td>
                                    <td> <?= $row['alamat']; ?> </td>
                                    </tr>
                                    <?php $no++ ?>
                                    <?php endwhile; ?>
                                    
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Kategori</th>
                                    <th>Alamat</th>
                                    <!-- <th>Aksi</th> -->
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- HUB -->
    <section class="py-8 pt-md-11 pb-md-9">
       <!-- / .container -->
    </section>

    <!-- FOOTER -->
    <footer class="py-2 btn-success-soft">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="text-center text-muted small mb-0">
              &copy; <?= date('Y');
              ?> <a href="https://maccalab.com/" target="_blank" class="text-muted">Monitoring Suhu by MaccaLab</a>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT -->
    
    <!-- Vendor JS -->
    <script src="assets/landingPage/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="assets/landingPage/js/theme.bundle.js"></script>

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
    // $(function () {
        var table = $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Nothing found - sorry",
            "info": "Menampilkan Halaman _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search" : "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            }
        },
        "lengthMenu": [
            [5, 10, 25, -1],
            [5, 10, 25, 'All'],
        ],
        });
    // });
</script>
<script src="assets/js/main.js"></script>
  </body>
</html>
