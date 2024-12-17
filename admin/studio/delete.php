<?php
include '../../config/koneksi.php';

$kd_studio = $_GET['id'];

$query = "DELETE from studio
WHERE kd_studio = '$kd_studio'";

$sql = mysqli_query($conn, $query);

if($sql){
echo "
    <script>
    alert('Data Berhasil di Hapus');
    window.location='../?menu=5';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Hapus');
    window.location='../?menu=5';
    </script>
    ";
}
?>