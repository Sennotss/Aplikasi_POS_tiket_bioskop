<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pemesanan WHERE no_bon = '$id'");
while($data = mysqli_fetch_assoc($query)){
?>
 <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Edit Pemesanan</h2>
                            </div>
                            <div class="card-body">
                                <form action="pemesanan/update.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">No Bon</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="no_bon"
                                        value="<?php echo $data['no_bon'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Id Kasir</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="id_kasir"
                                        value="<?php echo $data['id_kasir'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Id Film</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="id_film"
                                        value="<?php echo $data['id_film'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Atas Nama</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="atasnama"
                                        value="<?php echo $data['atasnama'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal</label>
                                        <input
                                        type="date"
                                        class="form-control"
                                        name="tanggal"
                                        value="<?php echo $data['tanggal'];?>"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Total</label>
                                        <input
                                        type="number"
                                        class="form-control"
                                        name="total"
                                        value="<?php echo $data['total'];?>"
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
<?php
}
?>