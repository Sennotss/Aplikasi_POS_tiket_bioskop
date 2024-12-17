<div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Data Studio</h2>
                                <a href="?menu=6" class="btn btn-primary">Tambah Data</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead align="center">
                                            <th>KD Studio</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $query = mysqli_query($conn, "SELECT * FROM studio");
                                            while($data = mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr align = "center">
                                                <td><?php echo $data['kd_studio'];?></td>
                                                <td><?php echo $data['status'];?></td>
                                                <td>
                                                <a href="?menu=7&id=<?php echo $data['kd_studio'];?>" class="btn btn-warning">Edit</a>
                                                <a href="studio/delete.php?id=<?php echo $data['kd_studio'];?>" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus')">Hapus</a>
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