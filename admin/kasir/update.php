<?php
include '../../config/koneksi.php';

$id_kasir = $_POST['id_kasir'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$no_tlp = $_POST['no_tlp'];
$status = $_POST['status'];

$query = "UPDATE kasir SET
nama = '$nama',
username = '$username',
password = '$password',
level = '$level',
no_tlp = '$no_tlp',
status = '$status'
WHERE id_kasir = '$id_kasir'";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Rubah');
    window.location='../?menu=2';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Rubah');
    window.location='../?menu=4&id=$id_kasir';
    </script>
    ";
}
?>