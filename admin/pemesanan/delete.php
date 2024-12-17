<?php
include '../../config/koneksi.php';

$no_bon = $_GET['id'];

$query = "DELETE from pemesanan
WHERE no_bon = '$no_bon'";

$sql = mysqli_query($conn, $query);

if($sql){
echo "
    <script>
    alert('Data Berhasil di Hapus');
    window.location='../?menu=8';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Hapus');
    window.location='../?menu=8';
    </script>
    ";
}
?>