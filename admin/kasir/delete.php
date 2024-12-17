<?php
include '../../config/koneksi.php';

$id_kasir = $_GET['id'];

$query = "DELETE from kasir
WHERE id_kasir = '$id_kasir'";

$sql = mysqli_query($conn, $query);

if($sql){
echo "
    <script>
    alert('Data Berhasil di Hapus');
    window.location='../?menu=2';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Hapus');
    window.location='../?menu=2';
    </script>
    ";
}
?>