
    <?php 
    $judulhalaman="Halaman tambah kasir";
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Tambah Data Kasir</h2>
                            </div>
                            <div class="card-body">
                                <form action="kasir/simpan.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">ID Kasir</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="id_kasir"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">username</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="username"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Level</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="level"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Notlp</label>
                                        <input
                                        type="text"
                                        class="form-control"
                                        name="no_tlp"
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
