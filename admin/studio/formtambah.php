
    <?php 
    $judulhalaman="Halaman tambah studio";
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Tambah Data Studio</h2>
                            </div>
                            <div class="card-body">
                                <form action="studio/simpan.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">KD Studio</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="kd_studio"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Status</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="status"
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
