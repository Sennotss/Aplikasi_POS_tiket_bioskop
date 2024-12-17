<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Data Kasir</h2>
                                <a href="?menu=3" class="btn btn-primary">Tambah Data</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead align="center">
                                            <th>ID kasir</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Notlp</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $query = mysqli_query($conn, "SELECT * FROM kasir");
                                            while($data = mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr align = "center">
                                                <td><?php echo $data['id_kasir'];?></td>
                                                <td><?php echo $data['nama'];?></td>
                                                <td><?php echo $data['username'];?></td>
                                                <td><?php echo $data['password'];?></td>
                                                <td><?php echo $data['level'];?></td>
                                                <td><?php echo $data['no_tlp'];?></td>
                                                <td><?php echo $data['status'];?></td>
                                                <td>
                                                <a href="?menu=4&id=<?php echo $data['id_kasir'];?>" class="btn btn-warning">Edit</a>
                                                <a href="kasir/delete.php?id=<?php echo $data['id_kasir'];?>" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus')">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
    </div>
</body>
</html>