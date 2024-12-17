<?php
include '../../config/koneksi.php';

$no_bon = $_POST['no_bon'];
$id_kasir = $_POST['id_kasir'];
$id_film = $_POST['id_film'];
$atasnama = $_POST['atasnama'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];

$query = "INSERT INTO pemesanan values
('$no_bon','$id_kasir','$id_film','$atasnama','$tanggal','$total', 'Belum Selesai')";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Simpan');
    window.location='../?menu=8';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Simpan');
    window.location='../?menu=9';
    </script>
    ";
}
?>