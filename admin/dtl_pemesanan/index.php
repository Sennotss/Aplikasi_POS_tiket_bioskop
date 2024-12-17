<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pemesanan WHERE no_bon = '$id'");
$data = mysqli_fetch_assoc($query);
?>
    <section class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Input Detail Penjualan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-6">
                                <form action="dtl_pemesanan/update_pesanan.php" method="POST">
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <label for="" class="form-label">NOBON</label>
                                                <input type="text" class="form-control form-control-sm"
                                                name="no_bon" id="no_bon" value="<?php echo $data['no_bon'];?>">
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="" class="form-label">Total</label>
                                                <input type="text" class="form-control form-control-sm"
                                                name="total" id="total" value="<?php echo $data['total'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <label for="" class="form-label">Kasir</label>
                                                <input type="text" class="form-control form-control-sm"
                                                name="id_kasir" value="<?php echo $data['id_kasir']; ?>">
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="" class="form-label">ID Film</label>
                                                <?php
                                                $id_film = $data['id_film'];
                                                $q4 = mysqli_query($conn, "SELECT * FROM film where id_film = '$id_film'");
                                                $d4 = mysqli_fetch_array($q4);
                                                $harga = $d4['harga'];
                                                ?>
                                                <br>
                                                <label for="">
                                                <?php echo $data['id_film']; ?><br> <?php echo $d4['nama']; ?> - (Rp. <?php echo number_format($d4['harga'], 2, ",", "."); ?>)
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-primary" type="submit">Checkout</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                <table class="table">
                                        <thead align="center">
                                            <th>No</th>
                                            <th>Nomor Kursi</th>
                                            <th>Aksi</th>
            
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $query = mysqli_query($conn, "SELECT * FROM dtl_pemesanan where no_bon = '$id'");
                                            $i = 1;
                                            while($data3 = mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr align = "center">
                                                <td><?php echo $i++ ;?></td>
                                                <td><?php echo $data3['no_kursi'];?></td>
                                                <td>
                                                <a href="dtl_pemesanan/delete.php?id=<?php echo $data3['id_dtl'];?>&nb=<?php echo $id;?>&harga=<?php echo $harga;?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin data akan dihapus')">Cancel</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           



                            <h5>Pilih Kursi Anda:</h5>
                            <form action="dtl_pemesanan/simpan_detail.php" method="POST">
                            <div class="seating-chart">
                                <input type="hidden" name="nb" id="nb" value="<?php echo $data['no_bon'];?>">
                                <input type="hidden" name="harga" value="<?php echo $harga;?>">
                                <?php
                                $q2 = mysqli_query($conn, "SELECT * FROM kursi ORDER BY no_kursi ASC");
                                while($d2 = mysqli_fetch_assoc($q2)) {
                                    $status = $d2['status'];
                                    $disabled = ($status == 'nonaktif') ? 'disabled' : '';
                                    if($status == 'nonaktif') {
                                        echo '<button type="button" class="seat reserved" disabled>'. $d2['no_kursi'] .'</button>';
                                    } else {
                                        echo '<button type="submit" class="seat available" name="no_kursi" value="'.$d2['no_kursi'].'">'. $d2['no_kursi'] .'</button>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</section>
