<?php
include '../../config/koneksi.php';

$kd_studio = $_POST['kd_studio'];
$status = $_POST['status'];

$query = "INSERT INTO studio values
('$kd_studio','$status')";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Simpan');
    window.location='../?menu=5';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Simpan');
    window.location='../?menu=6';
    </script>
    ";
}
?>