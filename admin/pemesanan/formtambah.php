
    <?php 
    $judulhalaman="Halaman tambah pemesanan";
    include '../config/autonumber.php';
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Tambah Data Pemesanan</h2>
                            </div>
                            <div class="card-body">
                                <form action="pemesanan/simpan.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">No Bon</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="no_bon"
                                        value="<?php echo autonumber('pemesanan','no_bon',4,'BON');?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ID Kasir</label>
                                        <select name="id_kasir" id="" class="form-control">
                                            <?php
                                            include '../config/koneksi.php';
                                            $q2 = mysqli_query($conn, "SELECT * FROM kasir");
                                            while ($d2 = mysqli_fetch_assoc($q2)){
                                            ?>
                                            <option value="<?php echo $d2['id_kasir'];?>">
                                                <?php echo $d2['id_kasir'];?> - <?php echo $d2['nama'];?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ID Film</label>
                                        <select name="id_film" id="" class="form-control">
                                            <?php
                                            include '../config/koneksi.php';
                                            $q2 = mysqli_query($conn, "SELECT * FROM film");
                                            while ($d2 = mysqli_fetch_assoc($q2)){
                                            ?>
                                            <option value="<?php echo $d2['id_film'];?>">
                                                <?php echo $d2['id_film'];?> - <?php echo $d2['nama'];?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Atas Nama</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="atasnama"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal</label>
                                        <input
                                        type="date"
                                        class="form-control"
                                        name="tanggal"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Total</label>
                                        <input
                                        type="int"
                                        class="form-control"
                                        name="total"
                                        />
                                    </div>

                                    <button class="btn btn-primary" type="submit">Simpan Data</button>
                                    <button class="btn btn-secondary" type="reset">Bersihkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
