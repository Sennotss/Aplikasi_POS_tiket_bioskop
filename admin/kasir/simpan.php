<?php
include '../../config/koneksi.php';

$id_kasir = $_POST['id_kasir'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$no_tlp = $_POST['no_tlp'];
$status = $_POST['status'];

$query = "INSERT INTO kasir values
('$id_kasir','$nama','$username','$password','$level','$no_tlp','$status')";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Simpan');
    window.location='../?menu=2';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Simpan');
    window.location='../?menu=3';
    </script>
    ";
}
?>