<?php
include '../../config/koneksi.php';

$no_bon = $_POST['no_bon'];
$total = $_POST['total'];

$query = "UPDATE pemesanan SET
total = '$total',
status = 'Selesai'
WHERE no_bon = '$no_bon'";

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
    window.location='../?menu=8';
    </script>
    ";
}
?>