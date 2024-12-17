<div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Data Pemesanan</h2>
                                <a href="?menu=9" class="btn btn-primary">Tambah Data</a>
                                <a href="kursi/reset.php" class="btn btn-warning" onclick="return confirm('Yakin Akan di Reset ??')">Reset Kursi</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead align="center">
                                            <th>No Bon</th>
                                            <th>Id Kasir</th>
                                            <th>Id Film</th>
                                            <th>Atas Nama</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $query = mysqli_query($conn, "SELECT * FROM pemesanan");
                                            while($data = mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr align = "center">
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
            </div>
        </section>
    </div>