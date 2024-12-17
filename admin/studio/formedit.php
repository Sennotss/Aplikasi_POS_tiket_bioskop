<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM studio WHERE kd_studio = '$id'");
while($data = mysqli_fetch_assoc($query)){
?>
 <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Edit studio</h2>
                            </div>
                            <div class="card-body">
                                <form action="studio/update.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">KD studio</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="kd_studio"
                                        value="<?php echo $data['kd_studio'];?>"
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