<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kasir WHERE id_kasir = '$id'");
while($data = mysqli_fetch_assoc($query)){
?>
 <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Edit Kasir</h2>
                            </div>
                            <div class="card-body">
                                <form action="kasir/update.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">ID Kasir</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="id_kasir"
                                        value="<?php echo $data['id_kasir'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        value="<?php echo $data['nama'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="username"
                                        value="<?php echo $data['username'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        value="<?php echo $data['password'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Level</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="level"
                                        value="<?php echo $data['level'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Notlp</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="no_tlp"
                                        value="<?php echo $data['no_tlp'];?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Status</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="status"
                                        value="<?php echo $data['status'];?>"
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