<?php
include '../../config/koneksi.php';

$no_bon = $_POST['no_bon'];

$id_kasir = $_POST['id_kasir'];
$id_film = $_POST['id_film'];
$atasnama = $_POST['atasnama'];
$tanggal = $_POST['tanggal'];

$query = "UPDATE pemesanan SET
id_kasir = '$id_kasir',
id_film = '$id_film',
atasnama = '$atasnama',
tanggal = '$tanggal'
WHERE no_bon = '$no_bon'";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Rubah');
    window.location='../?menu=8';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Rubah');
    window.location='../?menu=10&id=$no_bon';
    </script>
    ";
}
?>