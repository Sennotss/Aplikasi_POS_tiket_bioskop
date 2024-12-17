
    <?php 
    $judulhalaman="Halaman tambah film";
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Tambah Data Film</h2>
                            </div>
                            <div class="card-body">
                                <form action="film/simpan.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">ID Film</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="id_film"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kode Studio</label>
                                        <select name="kd_studio" id="" class="form-control">
                                            <?php
                                            include '../config/koneksi.php';
                                            $q2 = mysqli_query($conn, "SELECT * FROM studio");
                                            while ($d2 = mysqli_fetch_assoc($q2)){
                                            ?>
                                            <option value="<?php echo $d2['kd_studio'];?>">
                                                <?php echo $d2['kd_studio'];?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Judul</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Genre</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="genre"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Pilih Gambar</label>-
                                        <input type="file" name="foto" class="form-control" accept="image/*" style="background-color: transparent; border: 2px solid #fff; color: #black;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Durasi</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="durasi"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jadwal Tayang</label>
                                        <input
                                        type="time"
                                        class="form-control"
                                        name="jadwal"
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
                                        <label for="" class="form-label">Harga</label>
                                        <input
                                        type="int"
                                        class="form-control"
                                        name="harga"
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
