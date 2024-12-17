
    <div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="col-xl-11 col-sm-6 mb-xl-0 mb-4">
                    <div class="card" style="margin-left: 50px; margin-right: 0px;">
                        <div class="card-body p-6">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                   <h1>
                                    Cinemaxxi
                                   </h1>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                <a href="?menu=15" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- <div class="row"> -->
                <div class="row" style="margin-left:50px;">
                    <?php 
                    include '../config/koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM film Order By tanggal DESC");
                    while($data = mysqli_fetch_assoc($query)){ 
                    ?>
                   
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card" style="margin-top: 20px; margin-right:80px;">
                            <div class="card-body p-3">
                            <div class="row">
                                <div class="col-12">
                                <!-- Memunculkan Foto -->
                                <img src="../assets/img/upload/<?php echo $data['foto'];?>" alt="" class="img-fluid" style="width:252px; margin-bottom:30px">
                                <div class="numbers">
                                    <!-- <p class="text-sm mb-0 text-uppercase font-weight-bold">Judul Film</p> -->
                                    <h5 class="font-weight-bolder">
                                    <?php echo $data['nama'];?>
                                    </h5>
                                    <p class="mb-0">
                                    <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                                    Genre: <br> <span class="text-success text-sm font-weight-bolder"><?php echo $data['genre'];?></span>
                                    </p>
                                    <p class="mb-0">
                                    Durasi : <br> <span class="text-success text-sm font-weight-bolder"><?php echo $data['durasi'];?></span>
                                    </p>
                                    <p class="mb-0">
                                    Jadwal Tayang : <br> <span class="text-success text-sm font-weight-bolder"><?php echo $data['jadwal'];?></span>
                                    </p>
                                    <a href="film/delete.php?id=<?php echo $data['id_film'];?>" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus')">Hapus</a>
                                    <a href="?menu=16&id=<?php echo $data['id_film'];?>" class="btn btn-primary">More Info</a>
                                </div>
                                </div>
                                <div class="col-4 text-end">
                                    
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- </div> -->
            </div>
        </section>
    </div>
