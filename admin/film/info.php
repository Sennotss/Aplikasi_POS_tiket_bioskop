<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM film WHERE id_film = '$id'");
while($data = mysqli_fetch_assoc($query)){
?>
<div class="content-wrapper">
        <section class="content">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2><?php echo $data['nama']?></h2>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="foto">
                                        <img src="../assets/img/upload/<?php echo $data['foto'];?>" style="width: 250px; margin: 50px 0 100px 70px">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="more-info">
                                        <div class="card" style="padding: 50px 20px 20px; margin-top: 50px;">
                                            <div class="mb-4">
                                                <label for="" class="form-label">JUDUL</label> : <?php echo $data['nama']?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="" class="form-label">GENRE</label> : <?php echo $data['genre']?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="" class="form-label">DURASI</label> : <?php echo $data['durasi']?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="" class="form-label">JADWAL</label> : <?php echo $data['jadwal']?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="" class="form-label">TANGGAL</label> : <?php echo $data['tanggal']?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="" class="form-label">HARGA</label> : <?php echo $data['harga']?>
                                            </div>
                                            <div class="mb-4">
                                                <a href="?menu=14" class="btn btn-danger">Kembali</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                              
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