<div class="container-fluid py-4">
  <?php
   include '../config/data.php';
   ?>
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body pb-6">
              <div class="row">
                <div class="col-8">
                  <div class="inner">
                  <?php 
                    include '../config/koneksi.php';
                    $query = mysqli_query($conn, "SELECT SUM(total) as total FROM pemesanan");
                    if ($query) {
                      $data = mysqli_fetch_assoc($query);
                      $total = $data['total'] ?? 0; 
                    } else {
                      $total = 0; 
                    }
                    ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Pemasukan</p>
                    <h1>
                      <?php echo number_format($total);?>
                    </h1> 

                   <a href="?menu=8" class="small-box-footer">More Info<i class="fas fa-arrow-circle-right" style="margin-left: 10px;"></i></a>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body pb-6">
              <div class="row">
                <div class="col-8">
                  <div class="inner">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Film</p>
                    <h1>
                     <?php echo $jml_film ?>
                    </h1>
                  <a href="?menu=11" class="small-box-footer">More Info<i class="fas fa-arrow-circle-right" style="margin-left: 10px;"></i></a>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-tv-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body pb-6">
              <div class="row">
                <div class="col-8">
                  <div class="inner">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Studio</p>
                    <h1>
                    <?php echo $jml_studio ?>
                    </h1>
                  <a href="?menu=5" class="small-box-footer">More Info<i class="fas fa-arrow-circle-right" style="margin-left: 10px; margin-bottom: 22px;"></i></a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
        <div class="col-lg-12 mb-lg-0 mb-4 mt-6">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h3 class="text-capitalize">Data Pemesanan</h3>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
                <table class="table">
                    <thead align="center">
                        <th>Nobon</th>
                        <th>ID Kasir</th>
                        <th>ID Film</th>
                        <th>Atas Nama</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody align="center">
                        <?php
                        include '../config/koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM pemesanan");
                        while($data = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                          <td><?php echo $data['no_bon'];?></td>
                          <td><?php echo $data['id_kasir'];?></td>
                          <td><?php echo $data['id_film'];?></td>
                          <td><?php echo $data['atasnama'];?></td>
                          <td><?php echo $data['tanggal'];?></td>
                          <td><?php echo $data['total'];?></td>
                          <td><?php echo $data['status'];?></td>
                          <td>
                            <?php
                            if($data['status'] == "Selesai"){
                                echo"<a href='laporan/cetakbon.php?id=" . $data['no_bon'] . "' class='btn btn-success'>Cetak Struk</a>";
                            }else{
                            ?>
                            <a href="?menu=10&id=<?php echo $data['no_bon'];?>" class="btn btn-warning">Edit</a>
                            <a href="pemesanan/delete.php?id=<?php echo $data['no_bon'];?>" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus')">Hapus</a>
                            <a href="?menu=17&id=<?php echo $data['no_bon'];?>" class="btn btn-primary">Detail</a>
                            <?php
                            }
                            ?>
                          
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

        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>